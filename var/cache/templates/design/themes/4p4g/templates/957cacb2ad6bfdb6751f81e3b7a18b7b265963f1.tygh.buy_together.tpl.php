<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 02:59:54
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/buy_together/blocks/product_tabs/buy_together.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210229960652363beaeb7c75-19898026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '957cacb2ad6bfdb6751f81e3b7a18b7b265963f1' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/buy_together/blocks/product_tabs/buy_together.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '210229960652363beaeb7c75-19898026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'chains' => 0,
    'config' => 0,
    'no_ajax' => 0,
    'chain' => 0,
    'is_ajax' => 0,
    'stay_in_cart' => 0,
    'settings' => 0,
    'key' => 0,
    'obj_prefix' => 0,
    'auth' => 0,
    '_product' => 0,
    'option' => 0,
    '_id' => 0,
    'obj_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52363beb428e40_92685034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52363beb428e40_92685034')) {function content_52363beb428e40_92685034($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('save_and_close','specify_options','specify_options','save_and_close','specify_options','specify_options','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price','save_and_close','specify_options','specify_options','save_and_close','specify_options','specify_options','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['chains']->value){?>

    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value){?>
        <?php $_smarty_tpl->tpl_vars["is_ajax"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    
    <div id="content_buy_together">
    
    <?php  $_smarty_tpl->tpl_vars["chain"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["chain"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["chain"]->key => $_smarty_tpl->tpl_vars["chain"]->value){
$_smarty_tpl->tpl_vars["chain"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["chain"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable("bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?>
        <form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value){?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
        <?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value||$_smarty_tpl->tpl_vars['is_ajax']->value){?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['chain']->value['name']), 0);?>

        <div class="chain-content clearfix">
            <div class="chain-products scroll-x nowrap clearfix">
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['products']){?>
                <div class="chain-product">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair']), 0);?>
</a>
                    <div class="chain-note"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_name'], ENT_QUOTES, 'UTF-8');?>
</a></div>
                    <?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']){?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="chain-product-options<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_product_details_layout']!="default_template"){?> long<?php }?>">
                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                    
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])), 0);?>

                                </div>
                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="chain-note">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['key']->value),'link_meta'=>"text-button",'text'=>__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>__("specify_options"),'act'=>"general"), 0);?>

                    </div>
                    <?php }?>
                    <div class="chain-note">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'UTF-8');?>
&nbsp;x
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="P")){?>
                            <?php if ($_smarty_tpl->tpl_vars['chain']->value['price']!=$_smarty_tpl->tpl_vars['chain']->value['discounted_price']){?>
                                <span class="strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0);?>
</span>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0);?>

                        <?php }?>
                    </div>
                </div>
            <?php }?>
            
            <?php  $_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value){
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?>
                <div class="chain-plus">+</div>
                
                <div class="chain-product">
                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair']), 0);?>
</a>
                    <div class="chain-note"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_name'], ENT_QUOTES, 'UTF-8');?>
</a></div>
                    <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']){?>
                        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
                            <div class="chain-note"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php } ?>
                    <?php }elseif($_smarty_tpl->tpl_vars['_product']->value['aoc']){?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="chain-product-options<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_product_details_layout']!="default_template"){?> long<?php }?>">
                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['_product']->value['options'],'name'=>"product_data",'no_script'=>true,'product'=>$_smarty_tpl->tpl_vars['_product']->value,'extra_id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id']), 0);?>

                                </div>
                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <div class="chain-note">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'link_meta'=>"text-button",'text'=>__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>__("specify_options"),'act'=>"general"), 0);?>

                        </div>
                    <?php }?>
                    <div class="chain-note">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;x
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="P")){?>
                            <?php if ($_smarty_tpl->tpl_vars['_product']->value['price']!=$_smarty_tpl->tpl_vars['_product']->value['discounted_price']){?>
                                <span class="strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0);?>
</span>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['discounted_price']), 0);?>

                        <?php }?>
                    </div>
                </div>
            <?php } ?>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['description']){?>
                <div class="chain-description">
                    <?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>

                </div>
            <?php }?>
            
            <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="P")){?>
            <div class="chain-price">
                <div class="chain-old-price">
                    <span class="chain-old"><?php echo $_smarty_tpl->__("total_list_price");?>
</span>
                    <span class="chain-old-line"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0);?>
</span>
                </div>
                <div class="chain-new-price">
                    <span class="chain-new"><?php echo $_smarty_tpl->__("price_for_all");?>
</span>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0);?>

                </div>
            </div>
            <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="B")){?>
                <div width="100%" class="buttons-container cm-buy-together-submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>

                </div>
            <?php }?>
            <?php }else{ ?>
            <p class="price"><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p>
            <?php }?>
        </div>
        
        </form>
    <?php } ?>
    
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/buy_together/blocks/product_tabs/buy_together.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/buy_together/blocks/product_tabs/buy_together.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['chains']->value){?>

    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value){?>
        <?php $_smarty_tpl->tpl_vars["is_ajax"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    
    <div id="content_buy_together">
    
    <?php  $_smarty_tpl->tpl_vars["chain"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["chain"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["chain"]->key => $_smarty_tpl->tpl_vars["chain"]->value){
$_smarty_tpl->tpl_vars["chain"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["chain"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable("bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?>
        <form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value){?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
        <?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value||$_smarty_tpl->tpl_vars['is_ajax']->value){?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['chain']->value['name']), 0);?>

        <div class="chain-content clearfix">
            <div class="chain-products scroll-x nowrap clearfix">
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['products']){?>
                <div class="chain-product">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair']), 0);?>
</a>
                    <div class="chain-note"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_name'], ENT_QUOTES, 'UTF-8');?>
</a></div>
                    <?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']){?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="chain-product-options<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_product_details_layout']!="default_template"){?> long<?php }?>">
                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                    
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])), 0);?>

                                </div>
                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="chain-note">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['key']->value),'link_meta'=>"text-button",'text'=>__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>__("specify_options"),'act'=>"general"), 0);?>

                    </div>
                    <?php }?>
                    <div class="chain-note">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'UTF-8');?>
&nbsp;x
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="P")){?>
                            <?php if ($_smarty_tpl->tpl_vars['chain']->value['price']!=$_smarty_tpl->tpl_vars['chain']->value['discounted_price']){?>
                                <span class="strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0);?>
</span>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0);?>

                        <?php }?>
                    </div>
                </div>
            <?php }?>
            
            <?php  $_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value){
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?>
                <div class="chain-plus">+</div>
                
                <div class="chain-product">
                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair']), 0);?>
</a>
                    <div class="chain-note"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_name'], ENT_QUOTES, 'UTF-8');?>
</a></div>
                    <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']){?>
                        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
                            <div class="chain-note"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php } ?>
                    <?php }elseif($_smarty_tpl->tpl_vars['_product']->value['aoc']){?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="chain-product-options<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_product_details_layout']!="default_template"){?> long<?php }?>">
                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['_product']->value['options'],'name'=>"product_data",'no_script'=>true,'product'=>$_smarty_tpl->tpl_vars['_product']->value,'extra_id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id']), 0);?>

                                </div>
                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <div class="chain-note">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'link_meta'=>"text-button",'text'=>__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>__("specify_options"),'act'=>"general"), 0);?>

                        </div>
                    <?php }?>
                    <div class="chain-note">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;x
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="P")){?>
                            <?php if ($_smarty_tpl->tpl_vars['_product']->value['price']!=$_smarty_tpl->tpl_vars['_product']->value['discounted_price']){?>
                                <span class="strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0);?>
</span>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['discounted_price']), 0);?>

                        <?php }?>
                    </div>
                </div>
            <?php } ?>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['description']){?>
                <div class="chain-description">
                    <?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>

                </div>
            <?php }?>
            
            <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="P")){?>
            <div class="chain-price">
                <div class="chain-old-price">
                    <span class="chain-old"><?php echo $_smarty_tpl->__("total_list_price");?>
</span>
                    <span class="chain-old-line"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0);?>
</span>
                </div>
                <div class="chain-new-price">
                    <span class="chain-new"><?php echo $_smarty_tpl->__("price_for_all");?>
</span>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0);?>

                </div>
            </div>
            <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="B")){?>
                <div width="100%" class="buttons-container cm-buy-together-submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>

                </div>
            <?php }?>
            <?php }else{ ?>
            <p class="price"><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p>
            <?php }?>
        </div>
        
        </form>
    <?php } ?>
    
    </div>
<?php }?>
<?php }?><?php }} ?>