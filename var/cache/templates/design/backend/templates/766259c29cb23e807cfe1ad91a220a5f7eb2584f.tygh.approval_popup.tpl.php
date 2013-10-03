<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:27:45
         compiled from "/var/www/4profit4good/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112960542552333d01034cc0-41679427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766259c29cb23e807cfe1ad91a220a5f7eb2584f' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/vendor_data_premoderation/views/premoderation/components/approval_popup.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112960542552333d01034cc0-41679427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'company_id' => 0,
    'product_id' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333d0106bc17_25240998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333d0106bc17_25240998')) {function content_52333d0106bc17_25240998($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('reason','notify_vendor_by_email'));
?>
<div class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reason");?>
:</label>
	    <div class="controls">
	    	<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[company_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
	    	<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
	    	<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[status]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
" />
	    	<textarea name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="input-text"></textarea>
	    </div>
	</div>
	
	<div class="control-group cm-toggle-button">
		<label class="control-label" for="notify_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("notify_vendor_by_email");?>
</label>
	    <div class="controls">
	    	<input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[notify_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
]" id="notify_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" checked="checked">
	    </div>
	</div>
</div><?php }} ?>