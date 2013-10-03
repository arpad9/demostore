<?php /* Smarty version Smarty-3.1.13, created on 2013-09-19 14:24:08
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1619427330522cf0b9f11001-55977031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9ddbdbb81cc856ce9fda2b6e82962487e7b7c8' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/views/block_manager/render/container.tpl',
      1 => 1379615046,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1619427330522cf0b9f11001-55977031',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf0b9f1aeb5_70637742',
  'variables' => 
  array (
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf0b9f1aeb5_70637742')) {function content_522cf0b9f1aeb5_70637742($_smarty_tpl) {?><div class="container <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }} ?>