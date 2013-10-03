<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 06:33:03
         compiled from "/var/www/4profit4good/design/themes/basic/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1279990874522d335fe40b39-29529955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9e11f70c32265072db1c57180014d205d4476b' => 
    array (
      0 => '/var/www/4profit4good/design/themes/basic/templates/views/block_manager/render/grid.tpl',
      1 => 1378672733,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1279990874522d335fe40b39-29529955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d335fe682f4_15901078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d335fe682f4_15901078')) {function content_522d335fe682f4_15901078($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']){?><div class="row"><?php }?>
    <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']){?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" >
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']){?></div><?php }?><?php }} ?>