<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:48:39
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/social_buttons/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1012655853522cf0b7a12212-18134852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a61fd07a637d1cd832969efa67eb073f60a016' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/social_buttons/hooks/index/meta.post.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1012655853522cf0b7a12212-18134852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'provider_settings' => 0,
    'provider_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf0b7a622a6_47169196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf0b7a622a6_47169196')) {function content_522cf0b7a622a6_47169196($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provider_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value){
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['provider_data']->value&&$_smarty_tpl->tpl_vars['provider_data']->value['meta_template']){?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/meta_templates/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['meta_template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/social_buttons/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provider_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value){
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['provider_data']->value&&$_smarty_tpl->tpl_vars['provider_data']->value['meta_template']){?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/meta_templates/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['meta_template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php } ?>
<?php }?><?php }} ?>