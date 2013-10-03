<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:29:24
         compiled from "/var/www/4profit4good/design/backend/templates/addons/gift_registry/views/events/components/custom_event_fields_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140180312952333d64b35945-50513210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d69ad44f62b0b257ae77b701fe36665ee4101fd' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/gift_registry/views/events/components/custom_event_fields_link.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '140180312952333d64b35945-50513210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333d64b3ee40_32799111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333d64b3ee40_32799111')) {function content_52333d64b3ee40_32799111($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('custom_event_fields'));
?>
<div class="sidebar-row">
    <ul class="nav nav-list">
        <li class="last">
            <a href="<?php echo htmlspecialchars(fn_url("events.field_editor"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("custom_event_fields");?>
</a>
        </li>
    </ul>
</div>
<hr><?php }} ?>