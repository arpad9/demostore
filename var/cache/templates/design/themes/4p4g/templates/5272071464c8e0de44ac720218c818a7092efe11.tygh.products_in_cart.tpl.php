<?php /* Smarty version Smarty-3.1.13, created on 2013-09-10 01:03:37
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/blocks/checkout/products_in_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1047998117522e37a96bc4a0-73075784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5272071464c8e0de44ac720218c818a7092efe11' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/blocks/checkout/products_in_cart.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1047998117522e37a96bc4a0-73075784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'cart_products' => 0,
    'key' => 0,
    'cart' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522e37a97d99b0_49672589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e37a97d99b0_49672589')) {function content_522e37a97d99b0_49672589($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('edit_products','edit_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="checkout_info_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <ul class="order-product-list">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_checkout:cart_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value){
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_checkout:cart_products")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']){?>
            <li>
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']){?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'but_meta'=>"delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>
<?php }?>
                <span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;x&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price']), 0);?>
</span>
                <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'no_block'=>true), 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_checkout:product_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </li>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<div class="edit-products"><a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="text-button"><?php echo $_smarty_tpl->__("edit_products");?>
</a></div>
<!--checkout_info_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/checkout/products_in_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/checkout/products_in_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><div id="checkout_info_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <ul class="order-product-list">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_checkout:cart_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value){
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_checkout:cart_products")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']){?>
            <li>
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']){?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']),'but_meta'=>"delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>
<?php }?>
                <span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;x&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price']), 0);?>
</span>
                <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'no_block'=>true), 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_checkout:product_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_checkout:product_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </li>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_checkout:cart_products"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_checkout:cart_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<div class="edit-products"><a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="text-button"><?php echo $_smarty_tpl->__("edit_products");?>
</a></div>
<!--checkout_info_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }?><?php }} ?>