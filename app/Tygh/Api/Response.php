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

namespace Tygh\Api;

use Tygh\Api;

class Response
{
    /**
     * HTTP response code for successful GET/PUT requests.
     *
     * @const  STATUS_OK
     */
    const STATUS_OK = 200;

    /**
     * HTTP response code for a successful POST request.
     *
     * @const  STATUS_CREATED
     */
    const STATUS_CREATED = 201;

    /**
     * HTTP response code for a request that resulted in a scheduled task being
     * created to perform the actual request.
     *
     * @const  STATUS_ACCEPTED
     */
    const STATUS_ACCEPTED = 202;

    /**
     * HTTP response code for a successful request that produced no response
     * (such as DELETE requests).
     *
     * @const  STATUS_NO_CONTENT
     */
    const STATUS_NO_CONTENT  = 204;

    /**
     * When the API routes have changed (unlikely) or if the incoming request is
     * not secure (http) then it will be redirect to the secure (https) version.
     *
     * @const  STATUS_MOVED_PERMANENTLY
     */
    const STATUS_MOVED_PERMANENTLY = 301;

    /**
     * When the resource was found at a different location. When a request to a
     * deprecated version of the API is received, a 302 Found response will be issued to the current API version.
     *
     * @const  STATUS_FOUND
     */
    const STATUS_FOUND = 302;

    /**
     * If an If-Modified-Since header is sent in the request and the resource
     * has not been modified since the specified date, then this response will
     * be sent. NB. See resource specific pages for support for the
     * If-Modified-Since header.
     *
     * @const  STATUS_NOT_MODIFIED
     */
    const STATUS_NOT_MODIFIED  = 304;

    /**
     * Issued when a malformed request was sent. Such as due to invalid syntax
     * or missing required data.
     *
     * @const  STATUS_BAD_REQUEST
     */
    const STATUS_BAD_REQUEST = 400;

    /**
     * This response is sent when either the clients credentials are not
     * provided or are incorrect.
     *
     * @const  STATUS_UNAUTHORIZED
     */
    const STATUS_UNAUTHORIZED = 401;

    /**
     * When the user doesn't have permission to perform a specific operation on
     * a resource (eg. edit a product). Permissions can be set through the store
     * control panel.
     *
     * @const  STATUS_FORBIDDEN
     */
    const STATUS_FORBIDDEN = 403;

    /**
     * When a particular resource doesn't exist or couldn't be found.
     *
     * @const  STATUS_NOT_FOUND
     */
    const STATUS_NOT_FOUND = 404;

    /**
     * The resource was found, but doesn't support the request method. Issued
     * when either a specific method isn't yet implemented on a resource, or
     * the resource doesn't support the method at all (eg. PUT on /orders is
     * invalid, but PUT on /orders/{id} is valid).
     *
     * @const  STATUS_METHOD_NOT_ALLOWED
     */
    const STATUS_METHOD_NOT_ALLOWED = 405;

    /**
     * When the client specifies a response content type in the Accept header
     * that is not supported.
     *
     * @const  STATUS_METHOD_NOT_ACCEPTABLE
     */
    const STATUS_METHOD_NOT_ACCEPTABLE = 406;

    /**
     * A change requested by the client is being rejected due to a condition
     * imposed by the server. The exact reasons response for this will vary from
     * one resource to the next. Examples may include attempting to delete a
     * Category which would result in Products being orphaned. Additional
     * information about the conflict and how to resolve it may be available
     * in the details section of the response.
     *
     * @const  STATUS_CONFLICT
     */
    const STATUS_CONFLICT  = 409;

    /**
     * When the client requests too many objects. eg. the limit parameter was
     * above the maximum allowed.
     *
     * @const  STATUS_REQUEST_ENTITY_TOO_LARGE
     */
    const STATUS_REQUEST_ENTITY_TOO_LARGE  = 413;

    /**
     * When the client specifies a content type in the Content-Type header that
     * is not supported by the API.
     *
     * @const  STATUS_UNSUPPORTED_MEDIA_TYPE
     */
    const STATUS_UNSUPPORTED_MEDIA_TYPE   = 415;

    /**
     * When an error has occurred within the API.
     *
     * @const  STATUS_INTERNAL_SERVER_ERROR
     */
    const STATUS_INTERNAL_SERVER_ERROR = 500;

    /**
     * When a request method is sent that is not supported by the API (eg.
     * TRACE, PATCH).
     *
     * @const  STATUS_NOT_IMPLEMENTED
     */
    const STATUS_NOT_IMPLEMENTED = 501;

    /**
     * When the store is marked as "Down for Maintenance" or the store is being upgraded to a new version.
     *
     * @const  STATUS_SERVICE_UNAVAILABLE
     */
    const STATUS_SERVICE_UNAVAILABLE = 503;

    /**
     * When the store is marked as "Down for Maintenance" or the store is being upgraded to a new version.
     *
     * @const  STATUS_INSUFFICIENT_STORAGE
     */
    const STATUS_INSUFFICIENT_STORAGE  = 507;

    /**
     * When the requests-per-hour limitations for the API have been reached.
     *
     * @const  STATUS_BANDWIDTH_LIMIT_EXCEEDED
     */
    const STATUS_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * Current response status
     * @var int $_status
     */
    private $_status = '';

    /**
     * Current response body
     * @var mixed $_body
     */
    private $_body = '';

    /**
     * Current response content type
     * @var string $_content_type
     */
    private $_content_type = '';

    /**
     * Creates new response
     *
     * @param  int      $status       Response status
     * @param  mixed    $body         Response body
     * @param  string   $content_type Response content type
     * @return Response
     */
    public function __construct($status = self::STATUS_OK, $body = '', $content_type = '')
    {
        $this->_status = $status;
        $this->_body = $body;
        $this->_content_type = !empty($content_type) ? $content_type : Api::DEFAULT_RESPONSE_FORMAT;
    }

    /**
     * Sends request
     *
     * Method do not return result. It's exit from script.
     */
    public function send()
    {
        $this->_setStatusCode($this->_status);

        if ($this->_status == self::STATUS_NO_CONTENT) {
            exit;
        }

        header('Content-type: ' . $this->_content_type);

        if (!self::isSuccessStatus($this->_status)) {

            $messages = array();
            if (!empty($this->_body['message'])) {
                $messages[] = $this->_body['message'];
            } elseif (!empty($this->_body)) {
                $messages[] = $this->_body;
            }

            $this->_body = array();
            $codes = self::getAvailableCodes();
            $this->_body['message'] = $this->_status . ' ' . $codes[$this->_status];


            $notifications = fn_get_notifications();
            foreach ($notifications as $notice) {
                if ($notice['type'] == 'E') {
                    $messages[] = $notice['message'];
                }
            }

            foreach ($notifications as $notice) {
                if ($notice['type'] == 'W') {
                    $messages[] = $notice['message'];
                }
            }

            if (!empty($messages)) {
                $this->_body['message'] .= ': ' . implode('. ', $messages);
            }

        }

        $body = FormatManager::instance()->encode($this->_body, $this->_content_type);
        echo $body;

        exit;
    }

    /**
     * Sets response status
     *
     * @param  int  $code Response status code
     * @return bool Always true
     */
    private function _setStatusCode($code)
    {
        if (!function_exists('http_response_code')) {
            $codes = $this->getAvailableCodes();

            if (!isset($codes[$code])) {
                $code = self::STATUS_OK;
            }

            $message = $codes[$code];

            $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

            header($protocol . ' ' . $code . ' ' . $codes[$code]);

            $GLOBALS['http_response_code'] = $code;
        } else {
            http_response_code($code);
        }

        return true;
    }

    /**
     * Returns list of status codes and it's text desciptions
     *
     * @return array
     */
    public static function getAvailableCodes()
    {
        return array(
            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information',
            204 => 'No Content',

            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',

            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            409 => 'Conflict',
            413 => 'Request Entity Too Large',
            415 => 'Unsupported Media Type',

            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            503 => 'Service Unavailable',
            507 => 'Insufficient Storage',
            509 => 'Bandwidth Limit Exceeded'
        );
    }

    /**
     * Returns true for a success HTTP status (2xx); false otherwise.
     *
     * @param  int     $status HTTP status
     * @return boolean
     */
    public static function isSuccessStatus($status)
    {
        return $status < 300;
    }
}
