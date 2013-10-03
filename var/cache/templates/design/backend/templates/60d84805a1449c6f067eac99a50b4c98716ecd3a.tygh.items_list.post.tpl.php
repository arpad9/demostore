<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:20:18
         compiled from "/var/www/4profit4good/design/backend/templates/addons/wishlist/hooks/cart/items_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12607733952333b425580e9-18187835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d84805a1449c6f067eac99a50b4c98716ecd3a' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/wishlist/hooks/cart/items_list.post.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12607733952333b425580e9-18187835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333b42563500_53468880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333b42563500_53468880')) {function content_52333b42563500_53468880($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_s'));
?>
<td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['customer']->value['wishlist_products'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("product_s");?>
</td><?php }} ?>