<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:10:53
         compiled from "/var/www/4profit4good/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133561088522cf5ed8df750-53504999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5ea2cab23c4ff155149e6c6091ac0b8201e0614' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '133561088522cf5ed8df750-53504999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf5ed8e4069_57669207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf5ed8e4069_57669207')) {function content_522cf5ed8e4069_57669207($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>