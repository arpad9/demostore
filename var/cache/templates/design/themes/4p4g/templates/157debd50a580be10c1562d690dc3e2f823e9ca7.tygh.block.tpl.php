<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:48:40
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2112422904522cf0b89d5574-23085180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '157debd50a580be10c1562d690dc3e2f823e9ca7' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/views/block_manager/render/block.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2112422904522cf0b89d5574-23085180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'content_alignment' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf0b8a002c5_24715603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf0b8a002c5_24715603')) {function content_522cf0b8a002c5_24715603($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT'){?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']){?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'){?> float-right<?php }elseif($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT'){?>
    float-left<?php }?>">
<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT'){?>
    </div>
<?php }?><?php }} ?>