<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 20:48:24
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/discussion/hooks/news/list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285938780522dfbd870d475-01491261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45a5547421fdd116a4502685de83768d1296530c' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/discussion/hooks/news/list.post.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '285938780522dfbd870d475-01491261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'n' => 0,
    'discussion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522dfbd877a4f0_08415248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522dfbd877a4f0_08415248')) {function content_522dfbd877a4f0_08415248($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('more_w_ellipsis','more_w_ellipsis'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['n']->value['news_id'],"N"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D"){?>
    <p><a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a></p>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/discussion/hooks/news/list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/news/list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['n']->value['news_id'],"N"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D"){?>
    <p><a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a></p>
<?php }?><?php }?><?php }} ?>