<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 16:46:00
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/blocks/pages/pages_text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:433855225523cb40852b578-88957073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1467eff3fedd1f4d5c5b18dc9278d341cf5e14b5' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/blocks/pages/pages_text_links.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '433855225523cb40852b578-88957073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'page' => 0,
    'block' => 0,
    'href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523cb40865b5a7_59915448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523cb40865b5a7_59915448')) {function content_523cb40865b5a7_59915448($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
    <ul class="text-links"><?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value){
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?><li class="level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['page']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['page']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> cm-active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_LINK')){?><?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['page']->value['link']), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), null, 0);?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array("attributes", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup']=='Y'){?>class="cm-dialog-opener<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']=="F"){?> cm-dialog-auto-width<?php }?>"id="opener_page_tl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-target-id="page_tl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']){?>target="_blank"<?php }?><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo Smarty::$_smarty_vars['capture']['attributes'];?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup']){?><div id="page_tl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
"></div><?php }?><?php } ?></ul>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/pages/pages_text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/pages/pages_text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
    <ul class="text-links"><?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value){
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?><li class="level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['page']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['page']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> cm-active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_LINK')){?><?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['page']->value['link']), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), null, 0);?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array("attributes", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup']=='Y'){?>class="cm-dialog-opener<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']=="F"){?> cm-dialog-auto-width<?php }?>"id="opener_page_tl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-target-id="page_tl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']){?>target="_blank"<?php }?><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo Smarty::$_smarty_vars['capture']['attributes'];?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php if ($_smarty_tpl->tpl_vars['page']->value['show_in_popup']){?><div id="page_tl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
"></div><?php }?><?php } ?></ul>
<?php }?>
<?php }?><?php }} ?>