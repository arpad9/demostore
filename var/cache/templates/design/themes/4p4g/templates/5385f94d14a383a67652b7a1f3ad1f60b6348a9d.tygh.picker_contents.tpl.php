<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 20:47:41
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/pickers/products/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:599634479522dfbaddfe5e2-17381521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5385f94d14a383a67652b7a1f3ad1f60b6348a9d' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/pickers/products/picker_contents.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '599634479522dfbaddfe5e2-17381521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522dfbae072e73_46430084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522dfbae072e73_46430084')) {function content_522dfbae072e73_46430084($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_items_added','options','no','yes','any_option_combinations','text_no_matching_results_found','add_products','add_products_and_close','text_items_added','options','no','yes','any_option_combinations','text_no_matching_results_found','add_products','add_products_and_close'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_REQUEST['extra']){?>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {

    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('options', '<?php echo strtr($_smarty_tpl->__("options"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

<?php if ($_REQUEST['display']=="options"||$_REQUEST['display']=="options_amount"||$_REQUEST['display']=="options_price"){?>
    _.tr('no', '<?php echo strtr($_smarty_tpl->__("no"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('yes', '<?php echo strtr($_smarty_tpl->__("yes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('aoc', '<?php echo strtr($_smarty_tpl->__("any_option_combinations"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    function _getDescription(obj, id) 
    {
        var p = {};
        var d = '';
        var aoc = $('#sw_option_' + id + '_AOC');
        if (aoc.length && aoc.prop('checked')) {
            d = _.tr('aoc');
        } else {
            $(':input', $('#option_' + id + '_AOC')).each( function() {
                var op = this;
                var j_op = $(this);
                
                if (typeof(op.name) == 'string' && op.name == '') {
                    return false;
                }

                var option_id = op.name.match(/\[(\d+)\]$/)[1];
                if (op.type == 'checkbox') {
                    var variant = (op.checked == false) ? _.tr('no') : _.tr('yes');
                }
                if (op.type == 'radio' && op.checked == true) {
                    var variant = $('#option_description_' + id + '_' + option_id + '_' + op.value).text();
                }
                if (op.type == 'select-one') {
                    var variant = op.options[op.selectedIndex].text;
                }
                if ((op.type == 'text' || op.type == 'textarea') && op.value != '') {
                    if (j_op.hasClass('cm-hint') && op.value == op.defaultValue) { //FIXME: We should not become attached to cm-hint class
                        var variant = '';
                    } else {
                        var variant = op.value;
                    }
                }
                if ((op.type == 'checkbox') || ((op.type == 'text' || op.type == 'textarea') && op.value != '') || (op.type == 'select-one') || (op.type == 'radio' && op.checked == true)) {
                    if (op.type == 'checkbox') {
                        p[option_id] = (op.checked == false) ? $('#unchecked_' + id + '_option_' + option_id).val() : op.value;
                    }else{
                        p[option_id] = (j_op.hasClass('cm-hint') && op.value == op.defaultValue) ? '' : op.value; //FIXME: We should not become attached to cm-hint class
                    }

                    d += (d ? ',  ' : '') + $('#option_description_' + id + '_' + option_id).text() + variant;
                }
            });
        }
        return {
            path: p, 
            desc: d != '' ? '<span>' + _.tr('options') + ':  </span>' + d : ''
        };
    }
<?php }?>

    $.ceEvent('on', 'ce.formpost_add_products', function(frm, elm) {
        var products = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                <?php if ($_REQUEST['display']=="options"||$_REQUEST['display']=="options_amount"||$_REQUEST['display']=="options_price"){?>
                    products[id] = {
                        option: _getDescription(frm, id),
                        value: $('#product_' + id).val()
                    };
                <?php }else{ ?>
                    products[id] = $('#product_' + id).val();
                <?php }?>
            });
            
            $.ceEvent('trigger', 'ce.picker_transfer_js_items', [products]);
            
            $.cePicker('add_js_item', frm.data('caResultId'), products, 'p', {});

            $.ceNotification('show', {
                type: 'N', 
                title: _.tr('notice'), 
                message: _.tr('text_items_added'), 
                message_state: 'I'
            });
        }
        
        return false;        
    });
}(Tygh, Tygh.$));
//]]>
</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dispatch'=>"products.picker",'search_extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'simple_search_form'=>true), 0);?>



<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_products" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">

<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_descr'=>true,'disable_ids'=>"bulk_addition_",'dont_show_points'=>true,'bulk_addition'=>true,'js_product_var'=>fn_is_empty($_REQUEST['extra']),'hide_form'=>true,'bulk_add'=>true,'hide_layouts'=>true,'hide_links'=>true,'id'=>"pagination_".((string)$_REQUEST['data_id']),'force_ajax'=>true), 0);?>



<?php }else{ ?>
<div class="pagination-container" id="pagination_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
">
    <p class="no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
<!--pagination_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
<div class="buttons-container picker">
    <div>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("add_products"),'but_close_text'=>__("add_products_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

    </div>
</div>
<?php }?>

</form><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="pickers/products/picker_contents.tpl" id="<?php echo smarty_function_set_id(array('name'=>"pickers/products/picker_contents.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if (!$_REQUEST['extra']){?>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {

    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('options', '<?php echo strtr($_smarty_tpl->__("options"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

<?php if ($_REQUEST['display']=="options"||$_REQUEST['display']=="options_amount"||$_REQUEST['display']=="options_price"){?>
    _.tr('no', '<?php echo strtr($_smarty_tpl->__("no"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('yes', '<?php echo strtr($_smarty_tpl->__("yes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('aoc', '<?php echo strtr($_smarty_tpl->__("any_option_combinations"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    function _getDescription(obj, id) 
    {
        var p = {};
        var d = '';
        var aoc = $('#sw_option_' + id + '_AOC');
        if (aoc.length && aoc.prop('checked')) {
            d = _.tr('aoc');
        } else {
            $(':input', $('#option_' + id + '_AOC')).each( function() {
                var op = this;
                var j_op = $(this);
                
                if (typeof(op.name) == 'string' && op.name == '') {
                    return false;
                }

                var option_id = op.name.match(/\[(\d+)\]$/)[1];
                if (op.type == 'checkbox') {
                    var variant = (op.checked == false) ? _.tr('no') : _.tr('yes');
                }
                if (op.type == 'radio' && op.checked == true) {
                    var variant = $('#option_description_' + id + '_' + option_id + '_' + op.value).text();
                }
                if (op.type == 'select-one') {
                    var variant = op.options[op.selectedIndex].text;
                }
                if ((op.type == 'text' || op.type == 'textarea') && op.value != '') {
                    if (j_op.hasClass('cm-hint') && op.value == op.defaultValue) { //FIXME: We should not become attached to cm-hint class
                        var variant = '';
                    } else {
                        var variant = op.value;
                    }
                }
                if ((op.type == 'checkbox') || ((op.type == 'text' || op.type == 'textarea') && op.value != '') || (op.type == 'select-one') || (op.type == 'radio' && op.checked == true)) {
                    if (op.type == 'checkbox') {
                        p[option_id] = (op.checked == false) ? $('#unchecked_' + id + '_option_' + option_id).val() : op.value;
                    }else{
                        p[option_id] = (j_op.hasClass('cm-hint') && op.value == op.defaultValue) ? '' : op.value; //FIXME: We should not become attached to cm-hint class
                    }

                    d += (d ? ',  ' : '') + $('#option_description_' + id + '_' + option_id).text() + variant;
                }
            });
        }
        return {
            path: p, 
            desc: d != '' ? '<span>' + _.tr('options') + ':  </span>' + d : ''
        };
    }
<?php }?>

    $.ceEvent('on', 'ce.formpost_add_products', function(frm, elm) {
        var products = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                <?php if ($_REQUEST['display']=="options"||$_REQUEST['display']=="options_amount"||$_REQUEST['display']=="options_price"){?>
                    products[id] = {
                        option: _getDescription(frm, id),
                        value: $('#product_' + id).val()
                    };
                <?php }else{ ?>
                    products[id] = $('#product_' + id).val();
                <?php }?>
            });
            
            $.ceEvent('trigger', 'ce.picker_transfer_js_items', [products]);
            
            $.cePicker('add_js_item', frm.data('caResultId'), products, 'p', {});

            $.ceNotification('show', {
                type: 'N', 
                title: _.tr('notice'), 
                message: _.tr('text_items_added'), 
                message_state: 'I'
            });
        }
        
        return false;        
    });
}(Tygh, Tygh.$));
//]]>
</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dispatch'=>"products.picker",'search_extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'simple_search_form'=>true), 0);?>



<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_products" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">

<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_descr'=>true,'disable_ids'=>"bulk_addition_",'dont_show_points'=>true,'bulk_addition'=>true,'js_product_var'=>fn_is_empty($_REQUEST['extra']),'hide_form'=>true,'bulk_add'=>true,'hide_layouts'=>true,'hide_links'=>true,'id'=>"pagination_".((string)$_REQUEST['data_id']),'force_ajax'=>true), 0);?>



<?php }else{ ?>
<div class="pagination-container" id="pagination_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
">
    <p class="no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
<!--pagination_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
<div class="buttons-container picker">
    <div>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("add_products"),'but_close_text'=>__("add_products_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

    </div>
</div>
<?php }?>

</form><?php }?><?php }} ?>