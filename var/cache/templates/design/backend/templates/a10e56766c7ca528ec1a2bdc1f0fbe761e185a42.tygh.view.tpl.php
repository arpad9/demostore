<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:31:22
         compiled from "/var/www/4profit4good/design/backend/templates/views/sales_reports/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50820176852333dda0b8759-35542825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a10e56766c7ca528ec1a2bdc1f0fbe761e185a42' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/sales_reports/view.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50820176852333dda0b8759-35542825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'report' => 0,
    'table' => 0,
    'table_id' => 0,
    'table_conditions' => 0,
    'i' => 0,
    'o' => 0,
    'element' => 0,
    'row' => 0,
    'element_hash' => 0,
    'interval_id' => 0,
    'interval_name' => 0,
    'percent_value' => 0,
    'table_prefix' => 0,
    'new_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333dda34c0e3_43921490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333dda34c0e3_43921490')) {function content_52333dda34c0e3_43921490($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_math')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('no_data','table_conditions','total','total','no_data','no_data','manage_reports','edit_report','reports'));
?>
<?php echo smarty_function_script(array('src'=>"js/lib/amcharts/swfobject.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['report']->value){?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['report']->value['tables']){?>
<?php $_smarty_tpl->tpl_vars["table_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['table']->value['table_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["table_prefix"] = new Smarty_variable("table_".((string)$_smarty_tpl->tpl_vars['table_id']->value), null, 0);?>
<div id="content_table_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php if (!$_smarty_tpl->tpl_vars['table']->value['elements']||$_smarty_tpl->tpl_vars['table']->value['empty_values']=="Y"){?>

<p><?php echo $_smarty_tpl->__("no_data");?>
</p>

<?php }elseif($_smarty_tpl->tpl_vars['table']->value['type']=="T"){?>

<?php if ($_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value]){?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("table_conditions"),'meta'=>"collapsed",'target'=>"#box_table_conditions_".((string)$_smarty_tpl->tpl_vars['table_id']->value)), 0);?>

    <div id="box_table_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse">
        <dl class="dl-horizontal">
        <?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value){
$_smarty_tpl->tpl_vars["i"]->_loop = true;
?>
            <dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8');?>
:</dt>
            <dd>
                <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['objects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["o"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["o"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value){
$_smarty_tpl->tpl_vars["o"]->_loop = true;
 $_smarty_tpl->tpl_vars["o"]->iteration++;
 $_smarty_tpl->tpl_vars["o"]->last = $_smarty_tpl->tpl_vars["o"]->iteration === $_smarty_tpl->tpl_vars["o"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["feco"]['last'] = $_smarty_tpl->tpl_vars["o"]->last;
?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['href']){?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['o']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['name'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['o']->value['href']){?></a><?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['feco']['last']){?>, <?php }?>
                <?php } ?>
            </dd>
        <?php } ?>
        </dl>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['table']->value['interval_id']!=1){?>
    <table width="100%">
        <tr valign="top">
            <?php echo smarty_function_cycle(array('values'=>'','assign'=>''),$_smarty_tpl);?>

            <td width="300px">
                <table width="100%" class="table">
                    <thead>
                        <tr>
                            <th width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'UTF-8');?>
</th>
                        </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;</td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td class="right"><?php echo $_smarty_tpl->__("total");?>
:</td>
                    </tr>
                </table>
            </td>
            <td width="200px">
                <?php echo smarty_function_cycle(array('values'=>'','assign'=>''),$_smarty_tpl);?>

                <div id="div_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="scroll-x scroll-sales-report">
                    <table class="table no-left-border" >
                        <thead>
                            <tr class="nowrap">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <th>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                            <tr>
                                <?php $_smarty_tpl->tpl_vars["element_hash"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_hash'], null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                                    <td class="center">
                                        <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]){?>
                                            <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number"){?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'UTF-8');?>
<?php }?>
                                            <?php }else{ ?>-<?php }?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <tr>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['totals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <td class="center">
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value){?>
                                        <span><?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number"){?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></span>
                                        <?php }else{ ?>-<?php }?>
                                </td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
<?php }else{ ?>

<table class="table table-middle">
    <thead>
        <tr>
            <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'UTF-8');?>
</th>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars["interval_name"] = new Smarty_variable("reports_interval_".((string)$_smarty_tpl->tpl_vars['interval_id']->value), null, 0);?>
                <th class="right"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['interval_name']->value);?>
</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php $_smarty_tpl->tpl_vars["elements_count"] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['table']->value['elements']), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["element_hash"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_hash'], null, 0);?>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                    <?php echo smarty_function_math(array('equation'=>"round(value_/max_value*100)",'value_'=>(($tmp = @$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value])===null||$tmp==='' ? "0" : $tmp),'max_value'=>$_smarty_tpl->tpl_vars['table']->value['max_value'],'assign'=>"percent_value"),$_smarty_tpl);?>

                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;
                        <?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/graph_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bar_width'=>"100px",'value_width'=>$_smarty_tpl->tpl_vars['percent_value']->value), 0);?>

                    </td>
                    <td  class="right">
                        <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]){?>
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number"){?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php }else{ ?>
                            -
                        <?php }?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
        <tr>
            <td class="right"><?php echo $_smarty_tpl->__("total");?>
:</td>
            <td class="right">
                <?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['totals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value){?>
                        <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number"){?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0);?>

                        <?php }else{ ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    <?php }else{ ?>
                        -
                    <?php }?>
                <?php } ?>
            </td>
        </tr>
    </tbody>
</table>

<?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['table']->value['type']=="P"){?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie"><?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/amchart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"pie",'chart_data'=>$_smarty_tpl->tpl_vars['new_array']->value['pie_data'],'chart_id'=>$_smarty_tpl->tpl_vars['table_prefix']->value,'chart_title'=>$_smarty_tpl->tpl_vars['table']->value['description'],'chart_height'=>$_smarty_tpl->tpl_vars['new_array']->value['pie_height']), 0);?>
<!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie--></div>

<?php }elseif($_smarty_tpl->tpl_vars['table']->value['type']=="C"){?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie"><?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/amchart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"pie",'set_type'=>"piefl",'chart_data'=>$_smarty_tpl->tpl_vars['new_array']->value['pie_data'],'chart_id'=>$_smarty_tpl->tpl_vars['table_prefix']->value,'chart_title'=>$_smarty_tpl->tpl_vars['table']->value['description'],'chart_height'=>$_smarty_tpl->tpl_vars['new_array']->value['pie_height']), 0);?>
<!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie--></div>

<?php }elseif($_smarty_tpl->tpl_vars['table']->value['type']=="B"){?>
    <div id="div_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="reports-graph-scroll">
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
bar"><?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/amchart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"column",'chart_data'=>$_smarty_tpl->tpl_vars['new_array']->value['column_data'],'chart_id'=>$_smarty_tpl->tpl_vars['table_prefix']->value,'chart_title'=>$_smarty_tpl->tpl_vars['table']->value['description'],'chart_height'=>$_smarty_tpl->tpl_vars['new_array']->value['column_height'],'chart_width'=>$_smarty_tpl->tpl_vars['new_array']->value['column_width']), 0);?>
<!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
bar--></div>
    </div>
<?php }?>

<!--content_table_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php }else{ ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>"table_".((string)$_smarty_tpl->tpl_vars['table_id']->value),'track'=>true), 0);?>


<?php }else{ ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("manage_reports"),'href'=>"sales_reports.manage"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit_report"),'href'=>"sales_reports.update_table?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&table_id=".((string)$_smarty_tpl->tpl_vars['table']->value['table_id'])));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/sales_reports_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('period'=>$_smarty_tpl->tpl_vars['report']->value['period'],'search'=>$_smarty_tpl->tpl_vars['report']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("reports"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>