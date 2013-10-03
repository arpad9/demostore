<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:14:57
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/gift_registry/blocks/giftregistry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:999296268522d5951684ce7-14495150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91fc7f170f27c90fab73400a2de4687e1b612e63' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/gift_registry/blocks/giftregistry.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '999296268522d5951684ce7-14495150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'today_events' => 0,
    'event' => 0,
    'additional_link' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d595174a5f2_70669441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d595174a5f2_70669441')) {function content_522d595174a5f2_70669441($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('today_events','more_w_ellipsis','search','add_new','private_events','today_events','more_w_ellipsis','search','add_new','private_events'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['today_events']->value){?>
<div><strong><?php echo $_smarty_tpl->__("today_events");?>
</strong>:</div>
<ul class="bullets-list">
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['today_events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <li><a href="<?php echo htmlspecialchars(fn_url("events.view?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
<?php } ?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['additional_link']->value){?>
<div class="right"><a href="<?php echo htmlspecialchars(fn_url("events.search?today_events=Y"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a></div>
<?php }?>
<div class="delim"></div>
<?php }?>
<ul class="bullets-list">
    <li><a href="<?php echo htmlspecialchars(fn_url("events.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("search");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars(fn_url("events.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_new");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars(fn_url("events.access_key"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("private_events");?>
</a></li>
</ul><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/gift_registry/blocks/giftregistry.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_registry/blocks/giftregistry.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>

<?php if ($_smarty_tpl->tpl_vars['today_events']->value){?>
<div><strong><?php echo $_smarty_tpl->__("today_events");?>
</strong>:</div>
<ul class="bullets-list">
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['today_events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <li><a href="<?php echo htmlspecialchars(fn_url("events.view?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
<?php } ?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['additional_link']->value){?>
<div class="right"><a href="<?php echo htmlspecialchars(fn_url("events.search?today_events=Y"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a></div>
<?php }?>
<div class="delim"></div>
<?php }?>
<ul class="bullets-list">
    <li><a href="<?php echo htmlspecialchars(fn_url("events.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("search");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars(fn_url("events.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_new");?>
</a></li>
    <li><a href="<?php echo htmlspecialchars(fn_url("events.access_key"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("private_events");?>
</a></li>
</ul><?php }?><?php }} ?>