<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 06:36:33
         compiled from "/var/www/4profit4good/design/themes/basic/templates/addons/rss_feed/hooks/wrapper/mainbox_general_title.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99789931522d3431133de5-09200624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b35b8dcd543c61fb1db7776b8704edb6b4582ccc' => 
    array (
      0 => '/var/www/4profit4good/design/themes/basic/templates/addons/rss_feed/hooks/wrapper/mainbox_general_title.post.tpl',
      1 => 1378672734,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99789931522d3431133de5-09200624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d3431189214_03493220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d3431189214_03493220')) {function content_522d3431189214_03493220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_REQUEST['category_id']){?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rss_feed']['display_rss_feed_in_category']=="Y"){?><?php echo $_smarty_tpl->getSubTemplate ("addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), 0);?>
<?php }?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/rss_feed/hooks/wrapper/mainbox_general_title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rss_feed/hooks/wrapper/mainbox_general_title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_REQUEST['category_id']){?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rss_feed']['display_rss_feed_in_category']=="Y"){?><?php echo $_smarty_tpl->getSubTemplate ("addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), 0);?>
<?php }?>
<?php }?><?php }?><?php }} ?>