<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 13:28:41
         compiled from "/var/www/4profit4good/design/backend/templates/addons/twigmo/settings/upgrade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810511464523c85c9a771c5-71490711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa97a4d3bea7570c17f80b36679001377359dc55' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/twigmo/settings/upgrade.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1810511464523c85c9a771c5-71490711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'next_version_info' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523c85c9aaa420_24340724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523c85c9aaa420_24340724')) {function content_523c85c9aaa420_24340724($_smarty_tpl) {?><div id="addon_upgrade">

<?php echo $_smarty_tpl->getSubTemplate ("addons/twigmo/settings/contact_twigmo_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__('upgrade')), 0);?>


<?php if ($_smarty_tpl->tpl_vars['next_version_info']->value['next_version']&&$_smarty_tpl->tpl_vars['next_version_info']->value['next_version']!=@constant('TWIGMO_VERSION')){?>
	<p><?php echo $_smarty_tpl->tpl_vars['next_version_info']->value['description'];?>
</p>
	
	<input type="submit" name="dispatch[upgrade_center.upgrade_twigmo]" value="<?php echo $_smarty_tpl->__('upgrade');?>
" class="cm-skip-validation btn btn-primary">
<?php }else{ ?>
	<p><?php echo $_smarty_tpl->__('text_no_upgrades_available');?>
</p>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[twigmo_updates.check]",'but_text'=>__('twgadmin_check_for_updates'),'but_role'=>"submit",'but_meta'=>"cm-ajax cm-skip-avail-switch"), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
            <input type="hidden" name="result_ids" value="addon_upgrade" />
        <?php }?>
    </div>
<?php }?>
<!--addon_upgrade--></div>
<?php }} ?>