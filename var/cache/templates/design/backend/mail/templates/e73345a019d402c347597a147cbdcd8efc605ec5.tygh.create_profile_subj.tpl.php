<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 02:42:22
         compiled from "/var/www/4profit4good/design/backend/mail/templates/profiles/create_profile_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17878105015232434e7cc1e6-98810118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e73345a019d402c347597a147cbdcd8efc605ec5' => 
    array (
      0 => '/var/www/4profit4good/design/backend/mail/templates/profiles/create_profile_subj.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17878105015232434e7cc1e6-98810118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'company_data' => 0,
    'u_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5232434e80c091_97909586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5232434e80c091_97909586')) {function content_5232434e80c091_97909586($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('new_profile_notification'));
?>
<?php $_smarty_tpl->tpl_vars['u_type'] = new Smarty_variable(mb_strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type']), 'UTF-8'), null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("new_profile_notification",array("[user_type]"=>$_smarty_tpl->tpl_vars['u_type']->value));?>
<?php }} ?>