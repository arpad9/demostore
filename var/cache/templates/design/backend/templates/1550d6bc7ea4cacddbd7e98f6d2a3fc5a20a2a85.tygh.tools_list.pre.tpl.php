<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 14:03:21
         compiled from "/var/www/4profit4good/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2105915809523c8de96c60b7-99187884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1550d6bc7ea4cacddbd7e98f6d2a3fc5a20a2a85' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2105915809523c8de96c60b7-99187884',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523c8de96cf0b2_63488012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523c8de96cf0b2_63488012')) {function content_523c8de96cf0b2_63488012($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_form'));
?>
<li><a href="<?php echo htmlspecialchars(fn_url("pages.add?page_type=F&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_form");?>
</a></li><?php }} ?>