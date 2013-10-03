<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 13:28:41
         compiled from "/var/www/4profit4good/design/backend/templates/addons/twigmo/settings/connect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2001313154523c85c962ed04-85897104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd96534f3b9758077993e114755707e602f25a482' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/twigmo/settings/connect.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2001313154523c85c962ed04-85897104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'user_info' => 0,
    'tw_email' => 0,
    'config' => 0,
    'tw_register' => 0,
    'images_dir' => 0,
    'twigmo_license' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523c85c98bdb42_88476607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523c85c98bdb42_88476607')) {function content_523c85c98bdb42_88476607($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('twgadmin_manage_settings','twgadmin_connect_your_store','email','reset_password','twgadmin_access_id','password','confirm_password','version','twgadmin_on_social','checkout_terms_n_conditions','twgadmin_connect'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/twigmo/settings/contact_twigmo_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
	<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("twgadmin_manage_settings")), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("twgadmin_connect_your_store")), 0);?>

<?php }?>

<fieldset>

<div id="connect_settings">

    <?php if ($_smarty_tpl->tpl_vars['user_info']->value['email']!=@constant('DEFAULT_ADMIN_EMAIL')){?>
        <?php $_smarty_tpl->tpl_vars["tw_email"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['twigmo']['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_info']->value['email'] : $tmp), null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars["tw_email"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['twigmo']['email'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
    <?php }?>


    <div class="control-group">
        <label class="control-label<?php if (!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?> cm-required cm-email<?php }?>" for="elm_tw_email"><?php echo $_smarty_tpl->__("email");?>
:</label>
        <div class="controls">
            <input type="text" id="elm_tw_email" name="tw_register[email]"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tw_email']->value, ENT_QUOTES, 'UTF-8');?>
" onkeyup="fn_tw_copy_email();" size="60" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>disabled="disabled"<?php }?> />
            <?php if (!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("reset_password"),'but_href'=>"http://twigmo.com/svc/reset_password.php?email=".((string)$_smarty_tpl->tpl_vars['tw_email']->value),'but_id'=>"elm_reset_tw_password",'but_role'=>"link"), 0);?>

            <?php }?>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
    <div class="control-group">
        <label class="control-label" for="access_id"><?php echo $_smarty_tpl->__("twgadmin_access_id");?>
:</label>
        <div class="controls" id="access_id">
            <div class="text-type-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id'], ENT_QUOTES, 'UTF-8');?>
</div>
        </div>
    </div>
    <?php }?>

    <input type="hidden" id="elm_tw_store_name" name="tw_register[store_name]"  value="<?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['store_name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['store_name'], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['http_host'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['http_path'], ENT_QUOTES, 'UTF-8');?>
<?php }?>"/>

    <?php if (!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
        <div id='twg_passwords'>
            <div class="control-group">
                <label for="elm_tw_password1" class="control-label <?php if (!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?> cm-required<?php }?>"><?php echo $_smarty_tpl->__("password");?>
:</label>
                <div class="controls">
                    <input type="password" id="elm_tw_password1" name="tw_register[password1]" size="32" maxlength="32" value="" autocomplete="off">
                </div>
            </div>
            <div class="control-group">
                <label for="elm_tw_password2" class="control-label <?php if (!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?> cm-required<?php }?>"><?php echo $_smarty_tpl->__("confirm_password");?>
:</label>
                <div class="controls">
                    <input type="password" id="elm_tw_password2" name="tw_register[password2]" size="32" maxlength="32" value="" autocomplete="off">
                </div>
            </div>
        </div>
    <?php }?>

    <div class="control-group">
        <label for="version" class="control-label"><?php echo $_smarty_tpl->__("version");?>
:</label>
        <div class="controls" id="version">
            <div class="text-type-value"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['twigmo']['version'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tw_register']->value['version'] : $tmp), ENT_QUOTES, 'UTF-8');?>
</div>
        </div>
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
        <div class="control-group">
            <label for="social_links" class="control-label"><?php echo $_smarty_tpl->__("twgadmin_on_social");?>
:</label>
            <div id="social_links" class="controls">
                
                <a target="_blank" href="http<?php if (defined('HTTPS')){?>s<?php }?>://facebook.com/twigmo">
                    <span class="facebook-btn"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/twigmo/images/buttons/facebook.png"></span>
                </a>
                
                
                
                <a target="_blank" href="http<?php if (defined('HTTPS')){?>s<?php }?>://twitter.com/twigmo">
                    <span class="twitter-btn"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/twigmo/images/buttons/twitter.png"></span>
                </a>
                
            </div>
        </div>
    <?php }?>
    

    <?php if (!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
        <input type="hidden" name="result_ids" value="connect_settings,storefront_settings,addon_upgrade"/>
        <input type="hidden" name="tw_register[checked_email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['checked_email'], ENT_QUOTES, 'UTF-8');?>
"/>

        <div class="control-group">
            <div class="controls">
                <textarea id="twigmo_license" name="tw_register[twigmo_license]" cols="23" rows="12" class="input-large" readonly="readonly" disabled="disabled"><?php if ($_smarty_tpl->tpl_vars['twigmo_license']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twigmo_license']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label for="id_accept_terms" class="cm-check-agreement checkbox">
                    <input type="checkbox" id="id_accept_terms" name="tw_register[accept_terms]" value="Y">
                    <?php echo $_smarty_tpl->__("checkout_terms_n_conditions");?>

                </label>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_role'=>"submit",'but_meta'=>"btn-primary cm-ajax cm-skip-avail-switch",'but_name'=>"dispatch[addons.tw_connect]",'but_text'=>__("twgadmin_connect")), 0);?>

            </div>
        </div>
    <?php }?>

<!--connect_settings--></div>

</fieldset>
<?php }} ?>