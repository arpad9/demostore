<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:29:24
         compiled from "/var/www/4profit4good/design/backend/templates/addons/gift_registry/views/events/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109552595352333d649f0c82-12425901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66bef75d24f1624b1d6edd47374bf7364ca98fdb' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/gift_registry/views/events/search.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109552595352333d649f0c82-12425901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333d64b221f0_11720614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333d64b221f0_11720614')) {function content_52333d64b221f0_11720614($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('title','start_date','end_date','status','type','awaiting','in_progress','finished','public','private','disabled','delete','edit','no_data','add_event','events'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="delete_events_form">

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('save_current_url'=>true), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['events']->value){?>
        <table class="table table-middle">
            <thead>
            <tr>
                <th width="1%" class="center">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</th>
                <th width="50%"><?php echo $_smarty_tpl->__("title");?>
</th>
                <th width="15%"><?php echo $_smarty_tpl->__("start_date");?>
</th>
                <th width="15%"><?php echo $_smarty_tpl->__("end_date");?>
</th>
                <th width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
                <th width="10%"><?php echo $_smarty_tpl->__("type");?>
</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>

            <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                <tr>
                    <td width="1%" class="center">
                        <input type="checkbox" name="event_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['event_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item"/>
                    </td>
                    <td><a href="<?php echo htmlspecialchars(fn_url("events.update?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                    <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['event']->value['status']=="A"){?><?php echo $_smarty_tpl->__("awaiting");?>
<?php }elseif($_smarty_tpl->tpl_vars['event']->value['status']=="P"){?><?php echo $_smarty_tpl->__("in_progress");?>
<?php }else{ ?><?php echo $_smarty_tpl->__("finished");?>
<?php }?></td>
                    <td><?php if ($_smarty_tpl->tpl_vars['event']->value['type']=="P"){?><?php echo $_smarty_tpl->__("public");?>
<?php }elseif($_smarty_tpl->tpl_vars['event']->value['type']=="U"){?><?php echo $_smarty_tpl->__("private");?>
<?php }else{ ?><?php echo $_smarty_tpl->__("disabled");?>
<?php }?></td>
                    <td class="nowrap">
                        <div class="hidden-tools">
                            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"events.delete?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])));?>
</li>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>"events.update?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])));?>
</li>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php }else{ ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['events']->value){?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[events.m_delete]",'form'=>"delete_events_form"));?>
</li>
                <?php }?>
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
            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_registry/views/events/components/custom_event_fields_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dispatch'=>"events.search",'view_type'=>"events"), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_registry/views/events/components/events_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tool_href'=>"events.add",'prefix'=>"top",'icon'=>"icon-plus",'hide_tools'=>"true",'title'=>__("add_event")), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("events"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>