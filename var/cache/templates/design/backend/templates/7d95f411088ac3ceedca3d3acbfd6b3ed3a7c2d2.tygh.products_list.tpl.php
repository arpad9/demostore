<?php /* Smarty version Smarty-3.1.13, created on 2013-09-23 13:07:47
         compiled from "/var/www/4profit4good/design/backend/templates/views/products/components/products_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331916805524075639c45d6-32226047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d95f411088ac3ceedca3d3acbfd6b3ed3a7c2d2' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/products/components/products_list.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1331916805524075639c45d6-32226047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'hide_amount' => 0,
    'show_price' => 0,
    'checkbox_name' => 0,
    'product' => 0,
    'show_aoc' => 0,
    'additional_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52407563a85d56_46939512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52407563a85d56_46939512')) {function content_52407563a85d56_46939512($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('product_name','price','quantity','no_data'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
<table width="100%" class="table">
<thead>
<tr>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_head")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_head"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value){?>
    <th class="center" width="1%">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</th>
    <?php }?>
    <th width="80%"><?php echo $_smarty_tpl->__("product_name");?>
</th>
    <?php if ($_smarty_tpl->tpl_vars['show_price']->value){?>
    <th class="right"><?php echo $_smarty_tpl->__("price");?>
</th>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value){?>
    <th class="center" width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_head"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</tr>
</thead>
<?php if (!$_smarty_tpl->tpl_vars['checkbox_name']->value){?><?php $_smarty_tpl->tpl_vars["checkbox_name"] = new Smarty_variable("add_products_ids", null, 0);?><?php }?>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
<tr id="picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value){?>
    <td class="center" width="1%"><input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mrg-check" id="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /></td>
    <?php }?>
    <td>
        <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value){?>
            <label for="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</label>
        <?php }else{ ?>
            <span><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</span>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/select_product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'show_aoc'=>$_smarty_tpl->tpl_vars['show_aoc']->value,'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value), 0);?>

    </td>
    <?php if ($_smarty_tpl->tpl_vars['show_price']->value){?>
    <td class="cm-picker-product-options right"><?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A"){?><input class="input-medium" id="product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" size="3" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="" /><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);?>
<?php }?></td>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value){?>
    <td class="center nowrap cm-value-changer" width="5%">

        <div class="input-prepend input-append">
            <a class="btn no-underline strong increase-font cm-decrease"><i class="icon-minus"></i></a>
            <input id="product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" value="0" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="3" class="input-micro cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1){?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
            <a class="btn no-underline strong increase-font cm-increase"><i class="icon-plus"></i></a>
        </div>

    </td>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_columns")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_columns"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_columns"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
</tr>
<?php } ?>
</table>
<?php }else{ ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>


<script type="text/javascript">
//<![CDATA[
(function(_, $) {

    function _switchAOC(id, disable)
    {
        var aoc = $('#sw_option_' + id + '_AOC');
        if (aoc.length) {
            aoc.addClass('cm-skip-avail-switch');
            aoc.prop('disabled', disable);
            disable = aoc.prop('checked') ? true : disable;
        }

        $('.cm-picker-product-options', $('#picker_product_row_' + id)).switchAvailability(disable, false);
    }

    $(document).ready(function() {

        $.ceEvent('on', 'ce.commoninit', function(context) {
            if (context.find('tr[id^=picker_product_row_]').length) {
                context.find('.cm-picker-product-options').switchAvailability(true, false);
            }
        });

        $(_.doc).on('click', '.cm-increase,.cm-decrease', function() {
            var inp = $('input', $(this).closest('.cm-value-changer'));
            var new_val = parseInt(inp.val()) + ($(this).is('a.cm-increase') ? 1 : -1);
            var disable = new_val > 0 ? false : true;
            var _id = inp.prop('id').replace('product_id_', '');

            _switchAOC(_id, disable);
        });

        $(_.doc).on('change', '.cm-amount', function() {
            var new_val = parseInt($(this).val());
            var disable = new_val > 0 ? false : true;
            var _id = $(this).prop('id').replace('product_id_', '');

            _switchAOC(_id, disable);
        });        
        
        $(_.doc).on('click', '.cm-item', function() {
            var disable = (this.checked) ? false : true;
            var _id = $(this).prop('id').replace('checkbox_id_', '');

            _switchAOC(_id, disable);
        });

        $(_.doc).on('click', '.cm-check-items', function() {
            var _checked = this.checked;
            $('.cm-item').each(function () {
                if (_checked && !this.checked || !_checked && this.checked) {
                    $(this).click();
                }
            });
        });
    });
}(Tygh, Tygh.$));
//]]>
</script>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>