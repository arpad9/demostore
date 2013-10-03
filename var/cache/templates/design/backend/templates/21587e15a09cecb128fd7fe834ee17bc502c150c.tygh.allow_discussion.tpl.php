<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:21:23
         compiled from "/var/www/4profit4good/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:385124885522cf8639ca697-34644002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21587e15a09cecb128fd7fe834ee17bc502c150c' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '385124885522cf8639ca697-34644002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'non_editable' => 0,
    'title' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'prefix' => 0,
    'discussion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf863a387c8_18923204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf863a387c8_18923204')) {function content_522cf863a387c8_18923204($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('communication','and','rating','communication','rating','disabled','communication','and','rating','communication','rating','disabled'));
?>
<div class="control-group <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value){?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="discussion_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
:</label>
    <div class="controls">
    <?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value), null, 0);?>
    <?php if (fn_check_view_permissions("discussion.update")){?>
    <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discussion_type]" id="discussion_type">
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="B"){?>selected="selected"<?php }?> value="B"><?php echo $_smarty_tpl->__("communication");?>
 <?php echo $_smarty_tpl->__("and");?>
 <?php echo $_smarty_tpl->__("rating");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"){?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("communication");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"){?>selected="selected"<?php }?> value="R"><?php echo $_smarty_tpl->__("rating");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="D"||!$_smarty_tpl->tpl_vars['discussion']->value){?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
    </select>
    <?php }else{ ?>
        <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="B"){?><?php echo $_smarty_tpl->__("communication");?>
 <?php echo $_smarty_tpl->__("and");?>
 <?php echo $_smarty_tpl->__("rating");?>
<?php }elseif($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"){?><?php echo $_smarty_tpl->__("communication");?>
<?php }elseif($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"){?><?php echo $_smarty_tpl->__("rating");?>
<?php }else{ ?><?php echo $_smarty_tpl->__("disabled");?>
<?php }?></span>
    <?php }?>
    </div>
</div><?php }} ?>