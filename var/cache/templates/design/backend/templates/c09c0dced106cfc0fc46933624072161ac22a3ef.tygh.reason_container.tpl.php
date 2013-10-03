<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:27:45
         compiled from "/var/www/4profit4good/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70886039052333d010f9b77-58394026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c09c0dced106cfc0fc46933624072161ac22a3ef' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/reason_container.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '70886039052333d010f9b77-58394026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333d01115d35_26129072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333d01115d35_26129072')) {function content_52333d01115d35_26129072($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal">
	<div class="control-group">
	    <label class="control-label" ><?php echo $_smarty_tpl->__("reason");?>
:</label>
	    <div class="controls">
	    	<textarea name="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="input-text"></textarea>
	    </div>
	</div>
	
	<div class="control-group cm-toggle-button">
	    <label class="control-label" for="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
	    <div class="controls">
	    	<input type="checkbox" name="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" checked="checked">
	    </div>
	</div>
</div><?php }} ?>