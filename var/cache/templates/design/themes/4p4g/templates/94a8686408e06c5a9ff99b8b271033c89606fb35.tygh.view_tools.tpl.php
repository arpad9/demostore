<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:09:36
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/common/view_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:657774733522cf5a09469b5-47156622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94a8686408e06c5a9ff99b8b271033c89606fb35' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/common/view_tools.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '657774733522cf5a09469b5-47156622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'view_tools' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf5a0a220c6_07858726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf5a0a220c6_07858726')) {function content_522cf5a0a220c6_07858726($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('prev_page','of','next','prev_page','of','next'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['view_tools']->value){?>
<div class="product-switcher">
    <a class="switcher-icon left <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']){?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']){?>href="<?php echo htmlspecialchars(fn_query_remove($_smarty_tpl->tpl_vars['view_tools']->value['prev_url'],"skip_result_ids_check"), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']){?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->__("prev_page");?>
<?php }?>"<?php }?>><i class="icon-left-circle"></i></a>
        <span class="switcher-selected-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['current'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span><?php echo $_smarty_tpl->__("of");?>
</span>
        <span class="switcher-total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['total'], ENT_QUOTES, 'UTF-8');?>
</span>
    <a class="switcher-icon right <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']){?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']){?>href="<?php echo htmlspecialchars(fn_query_remove($_smarty_tpl->tpl_vars['view_tools']->value['next_url'],"skip_result_ids_check"), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']){?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->__("next");?>
<?php }?>"<?php }?>><i class="icon-right-circle"></i></a>
</div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="common/view_tools.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/view_tools.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['view_tools']->value){?>
<div class="product-switcher">
    <a class="switcher-icon left <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']){?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']){?>href="<?php echo htmlspecialchars(fn_query_remove($_smarty_tpl->tpl_vars['view_tools']->value['prev_url'],"skip_result_ids_check"), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']){?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->__("prev_page");?>
<?php }?>"<?php }?>><i class="icon-left-circle"></i></a>
        <span class="switcher-selected-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['current'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span><?php echo $_smarty_tpl->__("of");?>
</span>
        <span class="switcher-total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['total'], ENT_QUOTES, 'UTF-8');?>
</span>
    <a class="switcher-icon right <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']){?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']){?>href="<?php echo htmlspecialchars(fn_query_remove($_smarty_tpl->tpl_vars['view_tools']->value['next_url'],"skip_result_ids_check"), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']){?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->__("next");?>
<?php }?>"<?php }?>><i class="icon-right-circle"></i></a>
</div>
<?php }?><?php }?><?php }} ?>