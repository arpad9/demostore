<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 16:30:21
         compiled from "/var/www/4profit4good/design/backend/templates/views/pages/components/pages_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:940884982523cb05dd5acd4-38744322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b35e240b225d1af4ef8f2d6ca918a5fa92dbe888' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/pages/components/pages_link.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '940884982523cb05dd5acd4-38744322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523cb05dd94453_02363647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523cb05dd94453_02363647')) {function content_523cb05dd94453_02363647($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('page_link','open_in_new_window'));
?>
<div class="control-group">
    <label for="page_link" class="control-label cm-required"><?php echo $_smarty_tpl->__("page_link");?>
:</label>
    <div class="controls">
        <input type="text" name="page_data[link]" id="page_link" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="page_link_new_window"><?php echo $_smarty_tpl->__("open_in_new_window");?>
:</label>
    <div class="controls">
    <input type="hidden" name="page_data[new_window]" value="0" />
    <input <?php if ($_smarty_tpl->tpl_vars['page_data']->value['new_window']!="0"){?>checked="checked"<?php }?> type="checkbox" name="page_data[new_window]" id="page_link_new_window" size="55" value="1" />
    </div>
</div><?php }} ?>