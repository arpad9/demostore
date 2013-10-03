<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:24:48
         compiled from "/var/www/4profit4good/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54267256552333c50328eb5-76553604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48fc3a9ad61656704804a88b2cb8f3157e8dbade' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54267256552333c50328eb5-76553604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333c50337d03_20450446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333c50337d03_20450446')) {function content_52333c50337d03_20450446($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_gift_certificate'));
?>
<?php if ($_REQUEST['type']=='G'){?>
	<li><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_gift_certificate");?>
</a></li>
<?php }?><?php }} ?>