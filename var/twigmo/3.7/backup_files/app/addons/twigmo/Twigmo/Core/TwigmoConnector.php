<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

namespace Twigmo\Core;

use Tygh\Http;
use Tygh\Registry;

require_once(Registry::get('config.dir.addons') . 'twigmo/Twigmo/Core/AbstractTwigmoConnector.php');

class TwigmoConnector extends \AbstractTwigmoConnector
{
    const TWIGMO_SERVER =       'cp.twigmo.com';
    const PROTOCOL =            'http://';
    const INDEX_PATH =          '/index.php?dispatch=';
    const API_DISPATCH =        'twg_svc_api.do';
    const RESET_PASS_DISPATCH = 'auth.recover_password';
    const DOWNLOAD_PATH =       '/download/releases/cscart/';
    const SERVER_ROOT_PATH =    '/z/cscart/';
    const USER_PATH =           'u/';
    const PREVIEW_PATH =        'preview/_public/';
    const FAVICON_PATH =        'images/apple-touch-icon.png';
    const DISPATCH =            'twigmo.post';
    const UPDATES_SCRIPT =      'check_updates.php';
    const UA_RULES_MD5_FILE =   'md5.txt';
    const UA_RULES_FILE =       'rules.txt';
    const UA_META_DIR =         'ua_meta/';
    const CONNECT_REQUEST_TTL = 60; // After sending the connect request, service have to check our url within 60 sec
    const TWIGMO_SERVER_TTL =   60; // Minutes

    protected $_default_meta = array('addon_version' => TWIGMO_VERSION);

    public function __construct()
    {
        $private_key = TwigmoSettings::get('my_private_key');
        if (empty($private_key)) {
            $keys = self::createKeys();
            TwigmoSettings::set(array('my_private_key' => $keys['privatekey'], 'my_public_key' => $keys['publickey']));
        }
        $settings = TwigmoSettings::get();
        $settings['url'] = self::PROTOCOL . self::TWIGMO_SERVER . self::INDEX_PATH . self::API_DISPATCH;
        parent::__construct($settings);
    }

    public function authPage($page)
    {
        $access_id = self::getAccessID('A');
        $data = array(
            'page' =>               $page,
            'ttl' =>                self::TWIGMO_SERVER_TTL,
            'customer_access_id' => self::getAccessID('C'),
            'access_id' =>          $access_id
        );
        $meta = array('access_id' => $access_id);
        $response = $this->send('auth.token', $data, $meta);
        if (!$this->responseIsOk($response)) {
            die(str_replace(
                array('[linkOpen]', '[linkClose]'),
                array('<a href="' . fn_url('addons.update&addon=twigmo') . '">', '</a>'),
                $this->_getLangVar('twgadmin_no_token_recieved'))
            );
        }

        $url = fn_link_attach($response['data']['url'], 'sl=' . strtolower(CART_LANGUAGE));
        fn_redirect($url, true);
    }

    public function connectAdmin($user_data, $is_reconnect = false)
    {
        if (!$this->_initHisPublicKey()) {
            return false;
        }
        $store_info = self::getAdminUrls();
        if (!$is_reconnect && !self::_needToConnect($store_info)) {
            return false;
        }
        $meta = array();
        // Connect admin panel
        $data = array(
            'public_key' => $this->getMyPublicKey(),
            'addon_version' => TWIGMO_VERSION,
            'engine' => 'cscart',
            'engine_version' => PRODUCT_VERSION,
            'engine_meta' => PRODUCT_EDITION,
            'name' => Registry::get('settings.Company.company_name')
        );
        if ($store_info['access_id']) {
            $meta['access_id'] = $store_info['access_id'];
        } else {
            $data = array_merge($data, fn_get_user_info($user_data['user_id']));
            $data = array_merge($data, array(
                'email' => $user_data['email'],
                'password' => $user_data['password'],
            ));
        }
        $data = array_merge($data, $store_info);

        self::_setConnectTTL();
        $response = $this->send('connect.admin', $data, $meta);
        if (!$this->responseIsOk($response) or empty($response['data']['access_id'])) {
            return false; // TODO: handle errros
        }
        $new_options = array(
            'admin_connection' => array(
                'access_id' => $response['data']['access_id'],
                'url' => $data['url']
            )
        );
        if (!empty($user_data['email'])) {
            $new_options['email'] = $user_data['email'];
        }
        if ($store_info['access_id'] && $response['data']['access_id'] != $store_info['access_id']) {
            // access_id changed - we have to disconnect storefronts
            $new_options['customer_connections'] = '';
        }
        TwigmoSettings::set($new_options);
        return true;
    }

    public function connect($stores = array(), $user_data = array(), $is_reconnect = false)
    {
        if (!self::adminIsConnected()) {
            $this->connectAdmin($user_data);
        }
        $connected_stores = TwigmoSettings::get('customer_connections');
        // Connect frontends
        $all_stores = fn_twg_get_stores();
        $meta = array('access_id' => self::getAccessID('A'));
        $is_connected = false;
        foreach ($all_stores as $store) {
            $company_id = $store['company_id'];
            if (!in_array($company_id, $stores) && !$is_reconnect) {
                continue; // Dont need to connect this store
            }
            $store_info = $this->getCustomerUrls($store);
            $connected_store = empty($connected_stores[$company_id]) ? array() : $connected_stores[$company_id];
            if ($is_reconnect && !empty($connected_store) && $connected_store['url'] == $store_info['url']) {
                continue; // Dont need to reconnect - its connectd
            }
            if ($is_reconnect && (empty($connected_store) || empty($connected_store['access_id']))) {
                continue; // Dont need to reconnect - it wasn't connected
            }
            $request_data = array(
                'name' => $store['company'],
                'access_id' => empty($connected_store) ? '' : $connected_store['access_id']
            );
            $request_data = array_merge($store_info, $request_data);

            self::_setConnectTTL();
            $response = $this->send('connect.customer', $request_data, $meta);
            if (!$this->responseIsOk($response) or empty($response['data']['access_id'])) {
                if (empty($_SESSION['notifications'])) {
                    $error = self::_getLangVar('twgadmin_error_cannot_connect_store');
                    fn_set_notification('E', self::_getLangVar('error'), $error);
                }
                return false;
            }
            $new_store_data = array(
                'access_id' => $response['data']['access_id'],
                'url' => $store_info['url']
            );
            TwigmoSettings::set(array('customer_connections' => array($company_id => $new_store_data)));
            if (!$is_connected) { // Update ua rules only once
                self::updateUARules($response['data']['access_id']);
            }
            $is_connected = true;
        }
        return $is_connected;
    }

    public function updateConnections($force_admin_reconnect = false)
    {
        if (!self::getAccessID('A')) {
            return false;
        }
        if ($force_admin_reconnect || !self::adminIsConnected()) {
            if (!$this->connectAdmin(array(), true)) {
                return false;
            }
        }
        return $this->connect(array(), array(), true);
    }

    public function displayServiceNotifications($notify_service_on_connection_end = false)
    {
        $meta = $data = array('access_id' => self::getAccessID('A'));
        $response = $this->send('subscriptions.notifications', $data, $meta);
        if (self::responseIsOk($response)) {
            $stores = TwigmoSettings::get('customer_connections');
            $store_plans = $response['data']['stores'];
            if (!empty($store_plans)) {
                foreach($stores as &$store) {
                    if (isset($store['access_id']) && isset($store_plans[$store['access_id']])) {
                        $store['plan_display_name'] = $store_plans[$store['access_id']]['plan_display_name'];
                        TwigmoSettings::set(array('customer_connections' => array($store['company_id'] => $store)));
                    }
                }
            }
        }
        if ($notify_service_on_connection_end) {
            $meta = $data = array('access_id' => self::getAccessID('A'));
            $this->send('connect.end', $data, $meta);
        }
    }

    public static function getAdminUrl()
    {
        return fn_url(self::DISPATCH, 'A', Registry::get('settings.General.secure_admin') == 'Y' ? 'https' : 'http');
    }

    public static function getAdminUrls()
    {
        // TODO: fn_url may return wrong value for the ultimate in the customer area
        return array(
            'http_url'  =>  fn_url(self::DISPATCH, 'A', 'http', CART_LANGUAGE, true),
            'https_url' =>  fn_url(self::DISPATCH, 'A', 'https', CART_LANGUAGE, true),
            'url'       =>  self::getAdminUrl(),
            'saved_url' =>  TwigmoSettings::get('admin_connection.url'),
            'access_id' =>  self::getAccessID('A')
        );
    }

    public static function getCustomerUrl($store, $protocol = 'current') // protocol may be current, http, https
    {
        if (empty($store['secure_storefront']) or empty($store['storefront'])) {
            $config = Registry::get('config');
            $store['secure_storefront'] = $config['https_host'] . $config['https_path'];
            $store['storefront'] = $config['http_host'] . $config['http_path'];
        }
        if ($protocol == 'current') {
            $protocol = fn_twg_use_https_for_customer() ? 'https' : 'http';
        }
        $url = $protocol . '://' . ($protocol == 'http' ? $store['storefront'] : $store['secure_storefront']);
        $url .= '/' . Registry::get('config.customer_index') . '?dispatch=' . self::DISPATCH;
        return $url;
    }

    public static function getCustomerUrls($store)
    {
        return array(
            'http_url' =>   self::getCustomerUrl($store, 'http'),
            'https_url' =>  self::getCustomerUrl($store, 'https'),
            'url' =>        self::getCustomerUrl($store),
            'saved_url' =>  empty($store['url']) ? '' :  $store['url'],
        );
    }

    public static function getAccessID($area = AREA)
    {
        if ($area == 'A') {
            return TwigmoSettings::get('admin_connection.access_id');
        }
        $company_id = fn_twg_get_current_company_id();
        return TwigmoSettings::get("customer_connections.$company_id.access_id");
    }

    public static function allStoresAreConnected($stores)
    {
        if (empty($stores) or !is_array($stores)) {
            return false;
        }
        foreach ($stores as $store) {
            if (empty($store['is_connected'])) {
                return false;
            }
        }
        return true;
    }


    public static function getMobileScriptsUrls($base_url = '')
    {
        $urls = array();
        $root_url = '//' . self::TWIGMO_SERVER . self::SERVER_ROOT_PATH . self::USER_PATH;
        $root_url .= self::getAccessIdPath(self::getAccessID('C')) . '/';
        $favicon_url = TwigmoSettings::get('favicon_url');
        $urls['favicon'] = $favicon_url ? fn_twg_add_path_to_url($favicon_url) : $root_url . self::FAVICON_PATH;
        $urls['preview_css'] = $root_url . self::PREVIEW_PATH;
        if ($base_url) {
            $root_url = $base_url;
        }
        $urls['repo'] = $root_url;
        return $urls;
    }

    /**
     * Check if current frontend is connected
     * @return bool
     */
    public static function frontendIsConnected()
    {
        if (!self::adminIsConnected()) {
            return false;
        }
        $store = reset(fn_twg_get_stores());
        return !empty($store) && !empty($store['is_connected']) && $store['is_connected'];
    }

    /**
     * Check if any frontend is connected
     * @return bool
     */
    public static function anyFrontendIsConnected()
    {
        if (!self::adminIsConnected()) {
            return false;
        }
        $stores = fn_twg_get_stores();
        if (empty($stores)) {
            return false;
        }
        foreach ($stores as $store) {
            if ($store['is_connected']) {
                return true;
            }
        }
        return false;
    }

    public static function adminIsConnected()
    {
        $store_info = self::getAdminUrls();
        // getAdminUrls may return wrong urls for ultimate, so we are using it only in admin
        if (empty($store_info['access_id']) || (AREA == 'A' && $store_info['url'] != $store_info['saved_url'])) {
            return false;
        }
        return true;
    }

    public static function checkUpdates()
    {
        $is_upgradable = false;
        $url = self::PROTOCOL .  self::TWIGMO_SERVER . '/' . self::UPDATES_SCRIPT;
        $url .= '?store_version=' . PRODUCT_VERSION . '&twigmo_version=' . TWIGMO_VERSION;
        $version_info = json_decode(self::_httpRequest($url, null, 'GET', false), true);
        if (empty($version_info)) {
            fn_set_notification('W', self::_getLangVar('warning'), self::_getLangVar('twgadmin_curl_error'));
            return $is_upgradable;
        }
        if ($version_info['next_version'] and $version_info['next_version'] != TWIGMO_VERSION) {
            $link = 'addons.update&addon=twigmo&selected_section=twigmo_addon';
            $msg = str_replace('[link]', fn_url($link), self::_getLangVar('twgadmin_text_updates_available'));
            fn_set_notification('W', self::_getLangVar('notice'), $msg, 'S', 'twigmo_upgrade');
            // Save version info to file
            fn_twg_save_version_info($version_info);

            $is_upgradable = true;
        }
        return $is_upgradable;
    }

    /**
     * Update UA rules.
     * Info will be downloaded for store with the certain access_id.
     * If access_id is empty, one of the connected access_id will be used.
     * @param string $access_id
     */
    public static function updateUARules($access_id = '')
    {
        if (!$access_id) {
            $stores = fn_twg_get_stores();
            foreach ($stores as $store) {
                if (!$access_id && !empty($store['access_id'])) {
                    $access_id = $store['access_id'];
                }
                if ($store['is_connected']) {
                    break;
                }
            }
        }
        if (!$access_id) {
            return;
        }
        $ua_url_path = self::PROTOCOL . self::TWIGMO_SERVER . self::SERVER_ROOT_PATH . self::USER_PATH;
        $ua_url_path .= self::getAccessIdPath($access_id) . '/' . self::UA_META_DIR;
        $update_needed = false;
        if (!file_exists(TWIGMO_UA_RULES_FILE)) {
            $update_needed = true;
        } else {
            $rules_serialized = fn_get_contents(TWIGMO_UA_RULES_FILE);
            $md5_on_twigmo = self::_httpRequest($ua_url_path . self::UA_RULES_MD5_FILE, array(), 'GET', false);
            if (md5($rules_serialized) != $md5_on_twigmo) {
                $update_needed = true;
            }
        }
        if (!$update_needed) {
            return;
        }
        $rules_on_twigmo = self::_httpRequest($ua_url_path . self::UA_RULES_FILE, array(), 'GET', false);
        fn_twg_write_to_file(TWIGMO_UA_RULES_FILE, $rules_on_twigmo, false);
    }

    public static function getResetPassLink()
    {
        return '//' . self::TWIGMO_SERVER . self::INDEX_PATH . self::RESET_PASS_DISPATCH;
    }

    public static function disconnect($company_ids, $disconnect_all)
    {
        if ($disconnect_all) {
            $new_options = array(
                'my_private_key' => '',
                'my_public_key' => '',
                'his_public_key' => '',
                'admin_connection' => '',
                'email' => ''
            );
            TwigmoSettings::set($new_options);
            $company_ids = array_keys(TwigmoSettings::get('customer_connections'));
        }
        if (empty($company_ids)) {
            return;
        }
        // To disconnect we will just erase access_id, other settings will be saved
        $disconnected_store = array('access_id' => '');
        foreach ($company_ids as $company_id) {
            TwigmoSettings::set(array('customer_connections' => array($company_id => $disconnected_store)));
        }
    }


    protected function _setNotifications($notifications)
    {
        if (empty($notifications) || !is_array($notifications)) {
            return;
        }
        foreach ($notifications as $notification) {
            fn_set_notification($notification['type'], $notification['title'], $notification['message']);
        }
    }

    protected static function _httpRequest($url, $data, $method, $add_lang = true)
    {
        if ($add_lang) {
            $url .= '&sl=' . strtolower(CART_LANGUAGE);
        }
        if ($method == 'POST') {
            $result = Http::post($url, $data);
        } else {
            $result = Http::get($url, $data);
        }
        return $result;
    }

    protected static function _getLangVar($name)
    {
        return __($name);
    }

    private function _initHisPublicKey()
    {
        $his_public_key = TwigmoSettings::get('his_public_key');
        if ($his_public_key) {
            $this->setHisPublicKey($his_public_key);
            return true;
        }
        // Load his pub key
        $this->setIsCrypted(false);
        $response = $this->send('connect.keys', array('public_key' => $this->_my_public_key));

        $this->setIsCrypted(true);
        if (!$this->responseIsOk($response) || empty($response['data']['pub_key'])) {
            return false;
        }
        // Save his public key
        $his_public_key = $response['data']['pub_key'];
        $this->setHisPublicKey($his_public_key);
        TwigmoSettings::set(array('his_public_key' => $his_public_key));
        return true;
    }

    /**
    * Checks if we have to connect store existed access_id
    * $store array[url, saved_url, access_id]
    */
    private function _needToConnect($store)
    {
        if (!$store['saved_url'] || !$store['access_id']) { // We didn't connect yet
            return true;
        }
        if ($store['saved_url'] == $store['url']) { // Url didn't change
            return false;
        }
        return true;
    }

    private function _setConnectTTL()
    {
        TwigmoSettings::set(array('connect_till' => TIME + self::CONNECT_REQUEST_TTL));
    }
}
