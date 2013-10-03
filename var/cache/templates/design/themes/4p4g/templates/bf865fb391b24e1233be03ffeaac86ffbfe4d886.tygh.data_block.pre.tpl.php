<?php /* Smarty version Smarty-3.1.13, created on 2013-09-10 00:45:52
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/discussion/hooks/companies/data_block.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1111872207522e338086f838-76724317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf865fb391b24e1233be03ffeaac86ffbfe4d886' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/discussion/hooks/companies/data_block.pre.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1111872207522e338086f838-76724317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_rating' => 0,
    'company' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522e33808b2fa0_83416405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e33808b2fa0_83416405')) {function content_522e33808b2fa0_83416405($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['show_rating']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('object_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'object_type'=>"M"), 0);?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/discussion/hooks/companies/data_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/data_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['show_rating']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/average_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('object_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'object_type'=>"M"), 0);?>

<?php }?><?php }?><?php }} ?>