<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:10:53
         compiled from "/var/www/4profit4good/design/backend/templates/views/categories/components/categories_select_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1906096397522cf5ed86d4b3-83133855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '148c7d77d1f7d0f15706ab37e4c18d6b457c1b0d' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/categories/components/categories_select_fields.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1906096397522cf5ed86d4b3-83133855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf5ed8bbb79_07745108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf5ed8bbb79_07745108')) {function content_522cf5ed8bbb79_07745108($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('status','meta_description','product_details_layout','position','name','meta_keywords','creation_date','localization','category_description','title','usergroups','ttc_usergroups'));
?>
<input type="hidden" name="selected_fields[object]" value="category" />

<table width="100%">
<tr valign="top">
    <td>
        <label class="checkbox" for="elm_status"><input type="hidden" value="status" name="selected_fields[data][]" />
        <input type="checkbox" value="status" name="selected_fields[data][]" id="elm_status" checked="checked" disabled="disabled" class="cm-item-s" />
        <?php echo $_smarty_tpl->__("status");?>
</label>
        
        <label class="checkbox" for="elm_meta_description"><input type="checkbox" value="meta_description" name="selected_fields[data][]" id="elm_meta_description" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("meta_description");?>
</label>

        <label class="checkbox" for="elm_product_details_layout"><input type="checkbox" value="product_details_layout" name="selected_fields[data][]" id="elm_product_details_layout" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("product_details_layout");?>
</label>

        <label for="elm_position" class="checkbox"><input type="checkbox" value="position" name="selected_fields[data][]" id="elm_position" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("position");?>
</label>
    </td>
    <td>
        <label for="elm_name" class="checkbox"><input type="hidden" value="category" name="selected_fields[data][]" />
        <input type="checkbox" value="category" name="selected_fields[data][]" id="elm_category_name" checked="checked" disabled="disabled" class="cm-item-s" />
        <?php echo $_smarty_tpl->__("name");?>
</label>
        
        <label class="checkbox" for="elm_meta_keywords"><input type="checkbox" value="meta_keywords" name="selected_fields[data][]" id="elm_meta_keywords" checked="checked" class="checkbox cm-item-s" /><?php echo $_smarty_tpl->__("meta_keywords");?>
</label>

        <label for="elm_timestamp" class="checkbox"><input type="checkbox" value="timestamp" id="elm_timestamp" name="selected_fields[data][]" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("creation_date");?>
</label>

        <label class="checkbox" for="elm_localization"><input type="checkbox" id="elm_localization" value="localization" name="selected_fields[data][]" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("localization");?>
</label>
    </td>
    <td>
        <label for="elm_description" class="checkbox"><input type="checkbox" value="description" name="selected_fields[data][]" id="elm_description" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("category_description");?>
</label>

        
        

        <label class="checkbox" for="elm_page_title"><input type="checkbox" value="page_title" id="elm_page_title" name="selected_fields[data][]" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("title");?>
</label>

        <?php if (!fn_allowed_for("ULTIMATE:FREE")){?>
            <label class="checkbox" for="elm_usergroup_ids"><input type="checkbox" value="usergroup_ids" name="selected_fields[data][]" id="elm_usergroup_ids" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("usergroups");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tooltip'=>__("ttc_usergroups")), 0);?>
</label>
        <?php }?>
    </td>
    <td>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:fields_to_edit")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:fields_to_edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:fields_to_edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </td>

</tr>
</table>
<p>
<?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('check_target'=>"s",'style'=>"links"), 0);?>

</p><?php }} ?>