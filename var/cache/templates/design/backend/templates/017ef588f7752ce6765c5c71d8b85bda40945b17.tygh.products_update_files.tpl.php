<?php /* Smarty version Smarty-3.1.13, created on 2013-09-15 07:40:16
         compiled from "/var/www/4profit4good/design/backend/templates/views/products/components/products_update_files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142189693852352c20e553a5-55909843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017ef588f7752ce6765c5c71d8b85bda40945b17' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/products/components/products_update_files.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '142189693852352c20e553a5-55909843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'product_id' => 0,
    'expand_all' => 0,
    'hide_for_vendor' => 0,
    'files_tree' => 0,
    'folder' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52352c210010a0_42594701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52352c210010a0_42594701')) {function content_52352c210010a0_42594701($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('new_file','add_file','new_folder','add_folder','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','name','status','no_files','no_data'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['shared_product']=="Y"&&$_smarty_tpl->tpl_vars['product_data']->value['company_id']!=$_smarty_tpl->tpl_vars['runtime']->value['company_id'])){?>
    <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["skip_delete"] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['product_id']->value)){?>
    <?php $_smarty_tpl->tpl_vars["product_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product_data']->value['product_id'], null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['expand_all']->value)){?>
    <?php $_smarty_tpl->tpl_vars["expand_all"] = new Smarty_variable("true", null, 0);?>
<?php }?>

<div class="items-container" id="product_files_list">
<?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value){?>
<div class="btn-toolbar clearfix">
    <div class="pull-right cm-toggle-button">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"add_new_files",'text'=>__("new_file"),'href'=>"products.update_file?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value),'link_text'=>__("add_file"),'act'=>"link"), 0);?>
</li>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"add_new_folders",'text'=>__("new_folder"),'href'=>"products.update_folder?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value),'link_text'=>__("add_folder"),'act'=>"link"), 0);?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"dropleft",'icon'=>"icon-plus",'no_caret'=>true));?>

    </div>
</div>
<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['files_tree']->value){?>
        <table width="100%" class="table table-middle table-tree">
            <thead>
            <tr>
                <th>
                    <div class="pull-left">
                        <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_cat" class="cm-combinations<?php if ($_smarty_tpl->tpl_vars['expand_all']->value){?> hidden<?php }?>"><span class="exicon-expand"> </span></span>
                        <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_cat" class="cm-combinations<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value){?> hidden<?php }?>"><span class="exicon-collapse"> </span></span>
                    </div>
                    &nbsp;<?php echo $_smarty_tpl->__("name");?>

                </th>
                <th width="5%" class="center">&nbsp;</th>
                <th width="15%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
            </thead>
        </table>

        <?php  $_smarty_tpl->tpl_vars["folder"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["folder"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files_tree']->value['folders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["folder"]->key => $_smarty_tpl->tpl_vars["folder"]->value){
$_smarty_tpl->tpl_vars["folder"]->_loop = true;
?>
        <table width="100%" class="table table-middle table-tree cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['folder']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
            <tbody>
            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/folder_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('folder'=>$_smarty_tpl->tpl_vars['folder']->value,'id'=>$_smarty_tpl->tpl_vars['folder']->value['folder_id'],'href'=>"products.update_folder?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&folder_id=".((string)$_smarty_tpl->tpl_vars['folder']->value['folder_id'])), 0);?>

            </tbody>

            <tbody id="group_folder_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['folder']->value['folder_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value){?> hidden<?php }?>">
                <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['folder']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value){
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/file_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_file'=>$_smarty_tpl->tpl_vars['file']->value,'level'=>1,'id'=>$_smarty_tpl->tpl_vars['file']->value['file_id'],'href'=>"products.update_file?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&file_id=".((string)$_smarty_tpl->tpl_vars['file']->value['file_id'])), 0);?>

                <?php }
if (!$_smarty_tpl->tpl_vars["file"]->_loop) {
?>
                    <tr class="multiple-table-row cm-row-status-d">
                        <td colspan="3">
                            <div class="row-status" style="padding-left: 35px;">
                                <?php echo $_smarty_tpl->__("no_files");?>

                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>

        <table width="100%" class="table table-middle table-tree">
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files_tree']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value){
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/file_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_file'=>$_smarty_tpl->tpl_vars['file']->value,'id'=>$_smarty_tpl->tpl_vars['file']->value['file_id'],'href'=>"products.update_file?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&file_id=".((string)$_smarty_tpl->tpl_vars['file']->value['file_id'])), 0);?>

                <?php } ?>
            </tbody>
        </table>
    <?php }else{ ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--product_files_list--></div>
<?php }} ?>