<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:20:18
         compiled from "/var/www/4profit4good/design/backend/templates/addons/wishlist/hooks/cart/items_list_row.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1428092052333b42585233-74522427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed16798c01b4e172dedf16dba329f8faffd940dc' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/wishlist/hooks/cart/items_list_row.post.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1428092052333b42585233-74522427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlist_products' => 0,
    'customer' => 0,
    'wishlist_products_js_id' => 0,
    'sl_user_id' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333b425f09c6_49295279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333b425f09c6_49295279')) {function content_52333b425f09c6_49295279($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('wishlist_products','deleted_product'));
?>
<?php $_smarty_tpl->tpl_vars["products"] = new Smarty_variable($_smarty_tpl->tpl_vars['wishlist_products']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(false, null, 0);?>

<td colspan="2" class="row-more-body row-gray top">
    <?php $_smarty_tpl->tpl_vars["wishlist_products_js_id"] = new Smarty_variable("wishlist_products_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']), null, 0);?>
    <?php if (fn_allowed_for("ULTIMATE")){?>
        <?php $_smarty_tpl->tpl_vars["wishlist_products_js_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wishlist_products_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']), null, 0);?>
    <?php }?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_id']==$_smarty_tpl->tpl_vars['sl_user_id']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['wishlist_products']->value){?>
        <table width="100%" class="table table-condensed">
        <thead>
        <tr class="no-hover">
            <th><?php echo $_smarty_tpl->__("wishlist_products");?>
</th>
        </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlist_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value){
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:product_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:product_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['extra']['parent']){?>
        <tr>
            <td>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['item_type']=="P"){?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']){?>
                <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                <?php }else{ ?>
                <?php echo $_smarty_tpl->__("deleted_product");?>

                <?php }?>
            <?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:products_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:products_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:products_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
        </tr>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:product_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } ?>
        </table>
        <?php }?>
    <?php }?>
    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</td><?php }} ?>