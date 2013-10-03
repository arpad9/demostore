<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:15:08
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/gift_registry/views/events/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1377427620522d595c94c4d6-57448442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80d885e91285c9527c97f9539a426e96cac00a04' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/gift_registry/views/events/update.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1377427620522d595c94c4d6-57448442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'event_data' => 0,
    'id' => 0,
    'access_key' => 0,
    'auth' => 0,
    'user_info' => 0,
    'default_name' => 0,
    'default_email' => 0,
    'settings' => 0,
    'event_fields' => 0,
    'field' => 0,
    'var' => 0,
    'f_id' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d595cda2e62_46809681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d595cda2e62_46809681')) {function content_522d595cda2e62_46809681($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_events','private_events','text_remember_access_key','title','your_name','email','start_date','end_date','event_type','public','private','invitees','name','email','text_delete_recipients','delete_this_event','event_add','add_event','editing_event','view_events','private_events','text_remember_access_key','title','your_name','email','start_date','end_date','event_type','public','private','invitees','name','email','text_delete_recipients','delete_this_event','event_add','add_event','editing_event'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['event_data']->value['event_id']){?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['event_data']->value['event_id'], null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div class="events">
    <div class="events-actions">
        <ul>
            <li><i class="icon-th-list"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("view_events"),'but_href'=>"events.search",'but_role'=>"text"), 0);?>
</li>
            <li><i class="icon-lock"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("private_events"),'but_href'=>"events.access_key",'but_role'=>"text",'but_meta'=>"private"), 0);?>
</li>
        </ul>
    </div>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <div class="events-general" id="content_general">
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="event_form">
                <input type="hidden" name="selected_section" value="" />
                <input type="hidden" name="event_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

                <?php if ($_smarty_tpl->tpl_vars['access_key']->value){?>
                    <div class="events-key">
                        <input type="hidden" name="access_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
                        <strong><?php echo $_smarty_tpl->__("text_remember_access_key");?>
:</strong>
                        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']){?>
                    <?php $_smarty_tpl->tpl_vars["default_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["default_email"] = new Smarty_variable($_smarty_tpl->tpl_vars['user_info']->value['email'], null, 0);?>
                <?php }?>
                <div class="control-group">
                    <label for="elm_title" class="cm-required"><?php echo $_smarty_tpl->__("title");?>
</label>
                    <input type="text" id="elm_title" class="input-text" size="70" name="event_data[title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div class="control-group">
                    <label for="elm_owner" class="cm-required"><?php echo $_smarty_tpl->__("your_name");?>
</label>
                    <input type="text" id="elm_owner" class="input-text" size="70" name="event_data[owner]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['event_data']->value['owner'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div class="control-group">
                    <label for="elm_email" class="cm-required"><?php echo $_smarty_tpl->__("email");?>
</label>
                    <input type="text" id="elm_email" class="input-text" size="70" name="event_data[email]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['event_data']->value['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_email']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div class="control-group">
                    <div class="start-date">
                        <label for="elm_start_date" class="cm-required"><?php echo $_smarty_tpl->__("start_date");?>
</label>
                        <div class="cm-field-container">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"elm_start_date",'date_name'=>"event_data[start_date]",'date_val'=>$_smarty_tpl->tpl_vars['event_data']->value['start_date'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        </div>
                    </div>
                    <div class="events-dash">–</div>
                    <div class="end-date">
                        <label for="elm_end_date" class="cm-required"><?php echo $_smarty_tpl->__("end_date");?>
</label>
                        <div class="cm-field-container">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"elm_end_date",'date_name'=>"event_data[end_date]",'date_val'=>$_smarty_tpl->tpl_vars['event_data']->value['end_date'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label for="elm_type" class="cm-required"><?php echo $_smarty_tpl->__("event_type");?>
</label>
                    <select id="elm_type" name="event_data[type]">
                        <option value="P" <?php if ($_smarty_tpl->tpl_vars['event_data']->value['type']=="P"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("public");?>
</option>
                        <option value="U" <?php if ($_smarty_tpl->tpl_vars['event_data']->value['type']=="U"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("private");?>
</option>
                    </select>
                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"events:fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"events:fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["f_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
                        <div class="control-group">
                            <label for="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']=="Y"){?>class="cm-required"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S"){?>
                                    <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]">
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!="Y"){?>
                                    <option value="">--</option>
                                    <?php }?>
                                    <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['var']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['var']->index++;
 $_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["vars"]['first'] = $_smarty_tpl->tpl_vars['var']->first;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id']==$_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value]){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php } ?>
                                    </select>
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="R"){?>
                                    <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['var']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['var']->index++;
 $_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["vars"]['first'] = $_smarty_tpl->tpl_vars['var']->first;
?>
                                    <input <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id']==$_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value]||(!$_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['vars']['first'])){?>checked="checked"<?php }?> type="radio" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                                    <?php } ?>
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="C"){?>
                                    <input type="hidden" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                                    <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="Y"){?>checked="checked"<?php }?> class="checkbox" />
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="I"){?>
                                    <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="50" type="text" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="T"){?>
                                    <textarea id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"  class="input-textarea" cols="72" rows="10" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="V"){?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>"event_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]",'date_val'=>$_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value],'start_year'=>"1970"), 0);?>

                            <?php }?>
                    </div>
                    <?php } ?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"events:fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <div class="event-envitees">
                    <label for="elm_invitees"><?php echo $_smarty_tpl->__("invitees");?>
</label>
                    <div id="elm_invitees">
                        <table class="table">
                            <thead>
                            <tr class="cm-first-sibling">
                                <th><?php echo $_smarty_tpl->__("name");?>
</th>
                                <th><?php echo $_smarty_tpl->__("email");?>
</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                        <?php if ($_smarty_tpl->tpl_vars['event_data']->value['subscribers']){?>
                        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_data']->value['subscribers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["s_fe"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["s_fe"]['iteration']++;
?><tr id="box_subscriber_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration'], ENT_QUOTES, 'UTF-8');?>
"><td><input class="input-text-auto" type="text" name="event_data[subscribers][<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration'], ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8');?>
" size="18" /></td><td><input class="input-text-auto" type="text" name="event_data[subscribers][<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration'], ENT_QUOTES, 'UTF-8');?>
][email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="18" /></td><td><div class="event-invitees-actions"><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item_id'=>"subscriber_".((string)$_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration']),'only_delete'=>"Y"), 0);?>
</div></td></tr><?php } ?>
                        <?php }?>
                        <tr id="box_new_subscriber" class="cm-row-item">
                            <td><input class="input-text-auto" type="text" name="event_data[add_subscribers][0][name]" value="" size="18" /></td>
                            <td><input class="input-text-auto" type="text" name="event_data[add_subscribers][0][email]" value="" size="18" /></td>
                            <td><div class="event-invitees-actions"><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item_id'=>"new_subscriber"), 0);?>
</div></td>
                        </tr>
                        </table>
                        <?php if ($_smarty_tpl->tpl_vars['event_data']->value['subscribers']){?>
                            <span class="event-envitees-desc"><?php echo $_smarty_tpl->__("text_delete_recipients");?>
</span>
                        <?php }?>
                    </div>
                </div>
                <div class="buttons-container <?php if ($_smarty_tpl->tpl_vars['id']->value){?>events-update<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['id']->value){?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[events.update]"), 0);?>

                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("delete_this_event"),'but_href'=>"events.delete?event_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&access_key=".((string)$_smarty_tpl->tpl_vars['access_key']->value),'but_role'=>"text"), 0);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("event_add"),'but_name'=>"dispatch[events.update]"), 0);?>

                    <?php }?>
                </div>
            </form>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['id']->value){?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"events:update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"events:update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_registry/views/events/components/event_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_registry/views/events/components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"events:update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['id']->value){?>
            <?php echo $_smarty_tpl->__("add_event");?>

        <?php }else{ ?>
            <?php echo $_smarty_tpl->__("editing_event");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['title'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/gift_registry/views/events/update.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_registry/views/events/update.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['event_data']->value['event_id']){?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['event_data']->value['event_id'], null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div class="events">
    <div class="events-actions">
        <ul>
            <li><i class="icon-th-list"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("view_events"),'but_href'=>"events.search",'but_role'=>"text"), 0);?>
</li>
            <li><i class="icon-lock"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("private_events"),'but_href'=>"events.access_key",'but_role'=>"text",'but_meta'=>"private"), 0);?>
</li>
        </ul>
    </div>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <div class="events-general" id="content_general">
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="event_form">
                <input type="hidden" name="selected_section" value="" />
                <input type="hidden" name="event_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

                <?php if ($_smarty_tpl->tpl_vars['access_key']->value){?>
                    <div class="events-key">
                        <input type="hidden" name="access_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
                        <strong><?php echo $_smarty_tpl->__("text_remember_access_key");?>
:</strong>
                        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']){?>
                    <?php $_smarty_tpl->tpl_vars["default_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["default_email"] = new Smarty_variable($_smarty_tpl->tpl_vars['user_info']->value['email'], null, 0);?>
                <?php }?>
                <div class="control-group">
                    <label for="elm_title" class="cm-required"><?php echo $_smarty_tpl->__("title");?>
</label>
                    <input type="text" id="elm_title" class="input-text" size="70" name="event_data[title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div class="control-group">
                    <label for="elm_owner" class="cm-required"><?php echo $_smarty_tpl->__("your_name");?>
</label>
                    <input type="text" id="elm_owner" class="input-text" size="70" name="event_data[owner]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['event_data']->value['owner'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div class="control-group">
                    <label for="elm_email" class="cm-required"><?php echo $_smarty_tpl->__("email");?>
</label>
                    <input type="text" id="elm_email" class="input-text" size="70" name="event_data[email]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['event_data']->value['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_email']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                </div>
                <div class="control-group">
                    <div class="start-date">
                        <label for="elm_start_date" class="cm-required"><?php echo $_smarty_tpl->__("start_date");?>
</label>
                        <div class="cm-field-container">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"elm_start_date",'date_name'=>"event_data[start_date]",'date_val'=>$_smarty_tpl->tpl_vars['event_data']->value['start_date'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        </div>
                    </div>
                    <div class="events-dash">–</div>
                    <div class="end-date">
                        <label for="elm_end_date" class="cm-required"><?php echo $_smarty_tpl->__("end_date");?>
</label>
                        <div class="cm-field-container">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"elm_end_date",'date_name'=>"event_data[end_date]",'date_val'=>$_smarty_tpl->tpl_vars['event_data']->value['end_date'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label for="elm_type" class="cm-required"><?php echo $_smarty_tpl->__("event_type");?>
</label>
                    <select id="elm_type" name="event_data[type]">
                        <option value="P" <?php if ($_smarty_tpl->tpl_vars['event_data']->value['type']=="P"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("public");?>
</option>
                        <option value="U" <?php if ($_smarty_tpl->tpl_vars['event_data']->value['type']=="U"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("private");?>
</option>
                    </select>
                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"events:fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"events:fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["f_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
                        <div class="control-group">
                            <label for="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']=="Y"){?>class="cm-required"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S"){?>
                                    <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]">
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!="Y"){?>
                                    <option value="">--</option>
                                    <?php }?>
                                    <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['var']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['var']->index++;
 $_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["vars"]['first'] = $_smarty_tpl->tpl_vars['var']->first;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id']==$_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value]){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php } ?>
                                    </select>
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="R"){?>
                                    <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['var']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
 $_smarty_tpl->tpl_vars['var']->index++;
 $_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["vars"]['first'] = $_smarty_tpl->tpl_vars['var']->first;
?>
                                    <input <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id']==$_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value]||(!$_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['vars']['first'])){?>checked="checked"<?php }?> type="radio" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                                    <?php } ?>
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="C"){?>
                                    <input type="hidden" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                                    <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="Y"){?>checked="checked"<?php }?> class="checkbox" />
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="I"){?>
                                    <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="50" type="text" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="T"){?>
                                    <textarea id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"  class="input-textarea" cols="72" rows="10" name="event_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="V"){?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>"event_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]",'date_val'=>$_smarty_tpl->tpl_vars['event_data']->value['fields'][$_smarty_tpl->tpl_vars['f_id']->value],'start_year'=>"1970"), 0);?>

                            <?php }?>
                    </div>
                    <?php } ?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"events:fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <div class="event-envitees">
                    <label for="elm_invitees"><?php echo $_smarty_tpl->__("invitees");?>
</label>
                    <div id="elm_invitees">
                        <table class="table">
                            <thead>
                            <tr class="cm-first-sibling">
                                <th><?php echo $_smarty_tpl->__("name");?>
</th>
                                <th><?php echo $_smarty_tpl->__("email");?>
</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                        <?php if ($_smarty_tpl->tpl_vars['event_data']->value['subscribers']){?>
                        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_data']->value['subscribers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["s_fe"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["s_fe"]['iteration']++;
?><tr id="box_subscriber_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration'], ENT_QUOTES, 'UTF-8');?>
"><td><input class="input-text-auto" type="text" name="event_data[subscribers][<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration'], ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8');?>
" size="18" /></td><td><input class="input-text-auto" type="text" name="event_data[subscribers][<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration'], ENT_QUOTES, 'UTF-8');?>
][email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="18" /></td><td><div class="event-invitees-actions"><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item_id'=>"subscriber_".((string)$_smarty_tpl->getVariable('smarty')->value['foreach']['s_fe']['iteration']),'only_delete'=>"Y"), 0);?>
</div></td></tr><?php } ?>
                        <?php }?>
                        <tr id="box_new_subscriber" class="cm-row-item">
                            <td><input class="input-text-auto" type="text" name="event_data[add_subscribers][0][name]" value="" size="18" /></td>
                            <td><input class="input-text-auto" type="text" name="event_data[add_subscribers][0][email]" value="" size="18" /></td>
                            <td><div class="event-invitees-actions"><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item_id'=>"new_subscriber"), 0);?>
</div></td>
                        </tr>
                        </table>
                        <?php if ($_smarty_tpl->tpl_vars['event_data']->value['subscribers']){?>
                            <span class="event-envitees-desc"><?php echo $_smarty_tpl->__("text_delete_recipients");?>
</span>
                        <?php }?>
                    </div>
                </div>
                <div class="buttons-container <?php if ($_smarty_tpl->tpl_vars['id']->value){?>events-update<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['id']->value){?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[events.update]"), 0);?>

                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("delete_this_event"),'but_href'=>"events.delete?event_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&access_key=".((string)$_smarty_tpl->tpl_vars['access_key']->value),'but_role'=>"text"), 0);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("event_add"),'but_name'=>"dispatch[events.update]"), 0);?>

                    <?php }?>
                </div>
            </form>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['id']->value){?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"events:update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"events:update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_registry/views/events/components/event_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_registry/views/events/components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"events:update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['id']->value){?>
            <?php echo $_smarty_tpl->__("add_event");?>

        <?php }else{ ?>
            <?php echo $_smarty_tpl->__("editing_event");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_data']->value['title'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php }?><?php }} ?>