<?php /* Smarty version Smarty-3.1.13, created on 2013-09-19 14:24:08
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389905511522cf0b8a02a96-02023780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d2869c045a4f5f32dcccc9a33016d0280903884' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/views/block_manager/render/grid.tpl',
      1 => 1379615046,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1389905511522cf0b8a02a96-02023780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf0b8a27486_13230201',
  'variables' => 
  array (
    'grid' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf0b8a27486_13230201')) {function content_522cf0b8a27486_13230201($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']){?><div class="row"><?php }?>
    <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']){?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" >
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']){?></div><?php }?>
<?php }} ?>