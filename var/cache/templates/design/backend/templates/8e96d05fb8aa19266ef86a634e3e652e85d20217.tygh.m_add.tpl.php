<?php /* Smarty version Smarty-3.1.13, created on 2013-09-18 00:48:29
         compiled from "/var/www/4profit4good/design/backend/templates/views/categories/m_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9583998515239309d76fb36-39154284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e96d05fb8aa19266ef86a634e3e652e85d20217' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/categories/m_add.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9583998515239309d76fb36-39154284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5239309d836633_12845047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5239309d836633_12845047')) {function content_5239309d836633_12845047($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('category_location','category_name','vendor','usergroup','position','status','root_level','root_level','usergroup','active','hidden','disabled','add_categories'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="categories_m_addition_form">

<table width="100%" class="table table-middle">
<thead>
<tr class="cm-first-sibling">
    <th width="15%"><?php echo $_smarty_tpl->__("category_location");?>
</th>
    <th width="15%"><?php echo $_smarty_tpl->__("category_name");?>
</th>
    <?php if (fn_allowed_for("ULTIMATE")){?>
        <th width="15%"><?php echo $_smarty_tpl->__("vendor");?>
</th>
    <?php }?>
    <?php if (!fn_allowed_for("ULTIMATE:FREE")){?>
        <th width="15%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
    <?php }?>
    <th width="10%"><?php echo $_smarty_tpl->__("position");?>
</th>
    <th width="15%"><?php echo $_smarty_tpl->__("status");?>
</th>
    <th width="7%">&nbsp;</th>
</tr>
</thead>
<tr id="box_new_cat_tag">
    <td>
        <?php if (fn_show_picker("categories",@constant('CATEGORY_THRESHOLD'))){?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('data_id'=>"location_category",'input_name'=>"categories_data[0][parent_id]",'item_ids'=>0,'hide_link'=>true,'hide_delete_button'=>true,'show_root'=>true,'default_name'=>__("root_level")), 0);?>

        <?php }else{ ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"categories_data[0][parent_id]",'select_class'=>"input-medium",'root_text'=>__("root_level"),'id'=>''), 0);?>

        <?php }?>
    </td>
    <td>
        <input class="span3" type="text" name="categories_data[0][category]" size="40" value="" /></td>
    <?php if (fn_allowed_for("ULTIMATE")){?>
        <td>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"categories_data[0][company_id]",'id'=>"categories_data_company_id_0",'no_wrap'=>true), 0);?>

        </td>
    <?php }?>

    <?php if (!fn_allowed_for("ULTIMATE:FREE")){?>
        <td>     
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"ship_data_".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']),'select_mode'=>true,'title'=>__("usergroup"),'name'=>"categories_data[0][usergroup_ids]",'usergroups'=>fn_get_usergroups("C",@constant('DESCR_SL')),'input_extra'=>''), 0);?>

        </td>
    <?php }?>
    <td>
        <input class="input-micro" type="text" name="categories_data[0][position]" size="3" value="" /></td>
    <td>
        <select name="categories_data[0][status]" class="input-small">
            <option value="A"><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="H"><?php echo $_smarty_tpl->__("hidden");?>
</option>
            <option value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
    </td>
    <td class="right nowrap">
    <div class="hidden-tools">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item_id'=>"new_cat_tag",'on_add'=>"fn_calculate_usergroups(Tygh."."$"."(this).next('tr'));"), 0);?>

    </div>
    </td>
</tr>
</table>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[categories.m_add]",'but_role'=>"submit-link",'but_target_form'=>"categories_m_addition_form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("add_categories"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>