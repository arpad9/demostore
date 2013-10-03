<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:42:01
         compiled from "/var/www/4profit4good/design/backend/templates/views/settings_wizard/components/license_number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1973010610522ce119577b50-21294555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '514d595f0e036dd07f4c9d5a9df69db1229e176e' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/settings_wizard/components/license_number.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1973010610522ce119577b50-21294555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'license_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce1195b03c5_41904390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce1195b03c5_41904390')) {function content_522ce1195b03c5_41904390($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('license_number'));
?>
<div class="control-group setting-wide">
    <label for="" class="control-label"><?php echo $_smarty_tpl->__("license_number");?>
:</label>
    <div class="controls">
        <input type="text" name="license_number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_number']->value, ENT_QUOTES, 'UTF-8');?>
">
    </div>
</div><?php }} ?>