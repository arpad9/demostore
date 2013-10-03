<?php /* Smarty version Smarty-3.1.13, created on 2013-09-15 07:31:21
         compiled from "/var/www/4profit4good/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173079386552352a092d7937-79880478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '771cd5cf620600f3a7e14c0dc5215a0a13130353' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173079386552352a092d7937-79880478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52352a09305ed2_22289173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52352a09305ed2_22289173')) {function content_52352a09305ed2_22289173($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('approved','yes','pending','no'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation']=="Y"||$_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit']=="Y")){?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="Y"){?><?php echo $_smarty_tpl->__("yes");?>
<?php }elseif($_smarty_tpl->tpl_vars['product_data']->value['approved']=="P"){?><?php echo $_smarty_tpl->__("pending");?>
<?php }else{ ?><?php echo $_smarty_tpl->__("no");?>
<?php }?>
        	</div>
        </div>
    </div>
<?php }?><?php }} ?>