<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 06:33:04
         compiled from "/var/www/4profit4good/design/themes/basic/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112632792522d3361017854-23734786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '645b63c38adf836c15dbd2681ab5d66d0f92f07f' => 
    array (
      0 => '/var/www/4profit4good/design/themes/basic/templates/views/block_manager/render/container.tpl',
      1 => 1378672733,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112632792522d3361017854-23734786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d33610224d6_40034789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d33610224d6_40034789')) {function content_522d33610224d6_40034789($_smarty_tpl) {?><div class="container <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>