<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:38:57
         compiled from "/var/www/4profit4good/design/backend/templates/common/loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2082093556522ce061e24ee1-58052231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2050dd9020f12c48459996eb70106cf50780c3d7' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/common/loading_box.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2082093556522ce061e24ee1-58052231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce061e29944_36733720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce061e29944_36733720')) {function content_522ce061e29944_36733720($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>