<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:15:09
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369497019522d595d186db9-08446658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd692c230bc35a84358302898942d77f70923688' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/buttons/clone_item.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '369497019522d595d186db9-08446658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'item_id' => 0,
    'but_onclick' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d595d1cce16_57503335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d595d1cce16_57503335')) {function content_522d595d1cce16_57503335($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('clone_this_item','clone_this_item','clone_this_item','clone_this_item'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><a class="button-icon icon-clone" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone_this_item");?>
" alt="<?php echo $_smarty_tpl->__("clone_this_item");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
" ><i class="icon-docs"></i></a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="buttons/clone_item.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/clone_item.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><a class="button-icon icon-clone" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone_this_item");?>
" alt="<?php echo $_smarty_tpl->__("clone_this_item");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
" ><i class="icon-docs"></i></a><?php }?><?php }} ?>