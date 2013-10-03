<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:15:09
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/buttons/remove_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:669196743522d595d1d24e6-38022622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d8cfe676c8d24de5b51ea1b8509b34ae7741a1' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/buttons/remove_item.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '669196743522d595d1d24e6-38022622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'simple' => 0,
    'item_id' => 0,
    'only_delete' => 0,
    'but_onclick' => 0,
    'but_class' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d595d26e474_64882497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d595d26e474_64882497')) {function content_522d595d26e474_64882497($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('remove_this_item','remove_this_item','remove_this_item','remove_this_item','remove_this_item','remove_this_item','remove_this_item','remove_this_item'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['simple']->value){?><a name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" class="button-icon icon-remove icon-remove-disable<?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y"){?> hidden<?php }?>" ><i class="icon-cancel-circle"></i></a><?php }?><a name="remove_hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
"<?php if ($_smarty_tpl->tpl_vars['but_onclick']->value){?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="button-icon icon-remove <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y"){?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['but_class']->value){?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" ><i class="icon-cancel-circle"></i></a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="buttons/remove_item.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/remove_item.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if (!$_smarty_tpl->tpl_vars['simple']->value){?><a name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" class="button-icon icon-remove icon-remove-disable<?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y"){?> hidden<?php }?>" ><i class="icon-cancel-circle"></i></a><?php }?><a name="remove_hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
"<?php if ($_smarty_tpl->tpl_vars['but_onclick']->value){?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="button-icon icon-remove <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y"){?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['but_class']->value){?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" ><i class="icon-cancel-circle"></i></a><?php }?><?php }} ?>