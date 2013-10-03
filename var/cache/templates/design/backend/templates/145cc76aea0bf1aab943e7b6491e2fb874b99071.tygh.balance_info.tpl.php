<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:27:40
         compiled from "/var/www/4profit4good/design/backend/templates/views/companies/components/balance_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5530568852333cfc9336c3-01165046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145cc76aea0bf1aab943e7b6491e2fb874b99071' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/companies/components/balance_info.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5530568852333cfc9336c3-01165046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333cfc973d40_89283440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333cfc973d40_89283440')) {function content_52333cfc973d40_89283440($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('balance_carried_forward','sales_period_total','total_period_payout','total_amount_due','total_unpaid_balance'));
?>
<div class="statistic-list clear pull-right" id="balance_total">
    <table>
        <tr>
            <td><?php echo $_smarty_tpl->__("balance_carried_forward");?>
:</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['total']->value['BCF']>0){?>text-error<?php }else{ ?>text-success<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['BCF']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("sales_period_total");?>
:</td>
            <td class="text-success"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['NO']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("total_period_payout");?>
:</td>
            <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['TPP']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("total_amount_due");?>
:</td>
            <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['LPM']), 0);?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->__("total_unpaid_balance");?>
:</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['total']->value['TOB']>0){?>text-error<?php }else{ ?>text-success<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value['TOB']), 0);?>
</td>
        </tr>
    </table>
<!--balance_total--></div><?php }} ?>