<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 06:33:03
         compiled from "/var/www/4profit4good/design/themes/basic/templates/addons/banners/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2057485476522d335f8751b2-91761686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd63398a93fdabb2f10299ab22073c1a36ac5120' => 
    array (
      0 => '/var/www/4profit4good/design/themes/basic/templates/addons/banners/hooks/index/scripts.post.tpl',
      1 => 1378672733,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2057485476522d335f8751b2-91761686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d335f8a7b23_41190351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d335f8a7b23_41190351')) {function content_522d335f8a7b23_41190351($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/addons/banners/slider.js"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/banners/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php echo smarty_function_script(array('src'=>"js/addons/banners/slider.js"),$_smarty_tpl);?>
<?php }?><?php }} ?>