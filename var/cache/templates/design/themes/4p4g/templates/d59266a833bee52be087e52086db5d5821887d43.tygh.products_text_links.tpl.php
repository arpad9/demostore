<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:09:44
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/blocks/products/products_text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142752652522cf5a82ee980-57968656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd59266a833bee52be087e52086db5d5821887d43' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/blocks/products/products_text_links.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '142752652522cf5a82ee980-57968656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf5a8376d16_60088064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf5a8376d16_60088064')) {function content_522cf5a8376d16_60088064($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y"){?>ol<?php }else{ ?>ul<?php }?> class="bullets-list">

<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value){
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value){?>
    <li>
        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
    </li>
<?php }?>
<?php } ?>

</<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y"){?>ol<?php }else{ ?>ul<?php }?>>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/products/products_text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>

<<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y"){?>ol<?php }else{ ?>ul<?php }?> class="bullets-list">

<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value){
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value){?>
    <li>
        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
    </li>
<?php }?>
<?php } ?>

</<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y"){?>ol<?php }else{ ?>ul<?php }?>>
<?php }?><?php }} ?>