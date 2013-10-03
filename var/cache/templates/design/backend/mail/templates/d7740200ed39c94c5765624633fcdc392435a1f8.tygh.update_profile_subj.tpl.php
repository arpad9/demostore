<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 19:25:36
         compiled from "/var/www/4profit4good/design/backend/mail/templates/profiles/update_profile_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69833746852332e7100a0a2-40925951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7740200ed39c94c5765624633fcdc392435a1f8' => 
    array (
      0 => '/var/www/4profit4good/design/backend/mail/templates/profiles/update_profile_subj.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '69833746852332e7100a0a2-40925951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52332e710323c7_90440263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52332e710323c7_90440263')) {function content_52332e710323c7_90440263($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('update_profile_notification'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("update_profile_notification");?>
<?php }} ?>