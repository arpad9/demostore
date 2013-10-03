<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:38:58
         compiled from "/var/www/4profit4good/design/backend/templates/addons/statistics/hooks/index/finance_statistic.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1301749855522ce06259f863-15388411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e83e2e4954a55c31ffd815d93114aac06d2ab8e' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/statistics/hooks/index/finance_statistic.post.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1301749855522ce06259f863-15388411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'visitors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce0625bdcd8_55239384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce0625bdcd8_55239384')) {function content_522ce0625bdcd8_55239384($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('visits'));
?>
<?php if (fn_check_view_permissions("statistics.reports","GET")){?>
	<td>
	    <div class="dashboard-card">
	        <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("visits");?>
</div>
	        <div class="dashboard-card-content">
	            <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitors']->value['total'], ENT_QUOTES, 'UTF-8');?>
</h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitors']->value['prev_total'], ENT_QUOTES, 'UTF-8');?>
, <?php if ($_smarty_tpl->tpl_vars['visitors']->value['total']>$_smarty_tpl->tpl_vars['visitors']->value['prev_total']){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['visitors']->value['diff'];?>
%
	        </div>
	    </div>
	</td>
<?php }?><?php }} ?>