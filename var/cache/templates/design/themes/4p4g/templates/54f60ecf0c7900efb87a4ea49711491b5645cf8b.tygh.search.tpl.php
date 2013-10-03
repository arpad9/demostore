<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 20:47:59
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/gift_registry/views/events/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:671460566522dfbbf453cd4-39295954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54f60ecf0c7900efb87a4ea49711491b5645cf8b' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/gift_registry/views/events/search.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '671460566522dfbbf453cd4-39295954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'action' => 0,
    'access_key' => 0,
    'event_fields' => 0,
    'field' => 0,
    'var' => 0,
    'f_id' => 0,
    'events' => 0,
    'auth' => 0,
    'event' => 0,
    'can_delete' => 0,
    'event_mode' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522dfbbf971c62_90810066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522dfbbf971c62_90810066')) {function content_522dfbbf971c62_90810066($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('event_add','private_events','title','owner','subscriber','status','awaiting','in_progress','finished','event_type','public','private','disabled','yes','no','search','title','start_date','end_date','status','event_type','action','awaiting','in_progress','finished','public','private','disabled','view','edit','no_items_found','delete_selected','search','event_add','private_events','title','owner','subscriber','status','awaiting','in_progress','finished','event_type','public','private','disabled','yes','no','search','title','start_date','end_date','status','event_type','action','awaiting','in_progress','finished','public','private','disabled','view','edit','no_items_found','delete_selected','search'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['action']->value!="today_events"){?>


<script type="text/javascript">
//<![CDATA[
var fields = new Array('start_date[Date_Month]', 'start_date[Date_Day]' , 'start_date[Date_Year]', 'end_date[Date_Month]', 'end_date[Date_Day]' , 'end_date[Date_Year]');

function fn_disable_select_date(disable)
{
    for (i in fields) {
        document.events_search.elements[fields[i]].disabled = disable;
    }
}
//]]>
</script>

<div class="events-search">
    <div class="events-actions">
        <ul>
            <li><i class="icon-plus-circle"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("event_add"),'but_href'=>"events.add",'but_role'=>"text",'but_meta'=>"add"), 0);?>
</li>
            <li><i class="icon-lock"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("private_events"),'but_href'=>"events.access_key",'but_role'=>"text",'but_meta'=>"private"), 0);?>
</li>
        </ul>
    </div>
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="events_search">
<?php if ($_smarty_tpl->tpl_vars['access_key']->value){?>
<input type="hidden" name="access_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('period'=>$_REQUEST['period'],'form_name'=>"events_search"), 0);?>

<div class="control-group">
    <label for="title"><?php echo $_smarty_tpl->__("title");?>
:</label>
    <input class="input-text" name="title" id="title" size="50" type="text" value="<?php echo htmlspecialchars($_REQUEST['title'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="control-group">
    <label for="owner"><?php echo $_smarty_tpl->__("owner");?>
:</label>
    <input class="input-text" name="owner" id="owner" size="25" type="text" value="<?php echo htmlspecialchars($_REQUEST['owner'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="control-group">
    <label for="subscriber"><?php echo $_smarty_tpl->__("subscriber");?>
:</label>
    <input class="input-text" name="subscriber" id="subscriber" size="25" type="text" value="<?php echo htmlspecialchars($_REQUEST['subscriber'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="control-group">
    <label for="status"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <select name="status" id="status">
            <option value="">--</option>
            <option <?php if ($_REQUEST['status']=="A"){?>selected="selected"<?php }?> value="A"><?php echo $_smarty_tpl->__("awaiting");?>
</option>
            <option <?php if ($_REQUEST['status']=="P"){?>selected="selected"<?php }?> value="P"><?php echo $_smarty_tpl->__("in_progress");?>
</option>
            <option <?php if ($_REQUEST['status']=="F"){?>selected="selected"<?php }?> value="F"><?php echo $_smarty_tpl->__("finished");?>
</option>
        </select>
</div>
<div class="control-group">
    <label for="type"><?php echo $_smarty_tpl->__("event_type");?>
:</label>
    <select name="type" id="type">
            <option value="">--</option>
            <option <?php if ($_REQUEST['type']=="P"){?>selected="selected"<?php }?> value="P"><?php echo $_smarty_tpl->__("public");?>
</option>
            <option <?php if ($_REQUEST['type']=="U"){?>selected="selected"<?php }?> value="U"><?php echo $_smarty_tpl->__("private");?>
</option>
            <option <?php if ($_REQUEST['type']=="D"){?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
</div>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["f_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
<div class="control-group">
    <label <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']!="V"){?>for="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S"||$_smarty_tpl->tpl_vars['field']->value['field_type']=="R"){?>
            <select name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <option value=""> -- </option>
            <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]==$_smarty_tpl->tpl_vars['var']->value['variant_id']){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            </select>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="C"){?>
            <select name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <option value=""> -- </option>
            <option value="Y" <?php if ($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="Y"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
            <option value="N" <?php if ($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="N"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
            </select>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="I"||$_smarty_tpl->tpl_vars['field']->value['field_type']=="T"){?>
            <input class="input-text" size="50" type="text" name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value], ENT_QUOTES, 'UTF-8');?>
" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="V"){?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"search_date_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>"search_fields[".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]",'date_val'=>$_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value],'start_year'=>"1970",'end_year'=>"5"), 0);?>

        <?php }?>
</div>
<?php } ?>
<div class="buttons-container">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[events.search]"), 0);?>

</div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('section_title'=>__("search"),'section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>

<?php }?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="delete_events_form">
<?php if ($_smarty_tpl->tpl_vars['access_key']->value){?>
<input type="hidden" name="access_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('save_current_url'=>true), 0);?>

<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_id']==$_smarty_tpl->tpl_vars['event']->value['user_id']){?><?php $_smarty_tpl->tpl_vars["can_delete"] = new Smarty_variable("Y", null, 0);?><?php }?>
<?php } ?>
<table class="table table-width">
<tr>
    <?php if ($_smarty_tpl->tpl_vars['can_delete']->value=="Y"){?>
    <th style="width: 1%">&nbsp;</th>
    <?php }?>
    <th><?php echo $_smarty_tpl->__("title");?>
</th>
    <th><?php echo $_smarty_tpl->__("start_date");?>
</th>
    <th><?php echo $_smarty_tpl->__("end_date");?>
</th>
    <th><?php echo $_smarty_tpl->__("status");?>
</th>
    <th><?php echo $_smarty_tpl->__("event_type");?>
</th>
    <th><?php echo $_smarty_tpl->__("action");?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
<tr <?php echo smarty_function_cycle(array('values'=>",class=\"table-row\""),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['can_delete']->value=="Y"){?>
    <td class="center"><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_id']==$_smarty_tpl->tpl_vars['event']->value['user_id']){?><input class="checkbox" type="checkbox" name="event_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['event_id'], ENT_QUOTES, 'UTF-8');?>
" /><?php }else{ ?>&nbsp;<?php }?></td>
    <?php }?>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_id']==$_smarty_tpl->tpl_vars['event']->value['user_id']){?>
            <?php $_smarty_tpl->tpl_vars['event_mode'] = new Smarty_variable("update", null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['event_mode'] = new Smarty_variable("view", null, 0);?>
        <?php }?>
        <a href="<?php echo htmlspecialchars(fn_url("events.".((string)$_smarty_tpl->tpl_vars['event_mode']->value)."?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
    </td>
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
    <td><a href="<?php echo htmlspecialchars(fn_url("events.".((string)$_smarty_tpl->tpl_vars['event_mode']->value)."?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['event_mode']->value=="view"){?><?php echo $_smarty_tpl->__("view");?>
<?php }else{ ?><?php echo $_smarty_tpl->__("edit");?>
<?php }?></a></td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['event']->_loop) {
?>
<tr>
    <td colspan="6"><p class="no-items"><?php echo $_smarty_tpl->__("no_items_found");?>
</p></td>
</tr>
<?php } ?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['can_delete']->value=="Y"){?>
<div class="events-search-action buttons-container">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("delete_selected"),'but_name'=>"dispatch[events.m_delete]"), 0);?>

</div>
<?php }?>
</form>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("search");?>
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
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/gift_registry/views/events/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_registry/views/events/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['action']->value!="today_events"){?>


<script type="text/javascript">
//<![CDATA[
var fields = new Array('start_date[Date_Month]', 'start_date[Date_Day]' , 'start_date[Date_Year]', 'end_date[Date_Month]', 'end_date[Date_Day]' , 'end_date[Date_Year]');

function fn_disable_select_date(disable)
{
    for (i in fields) {
        document.events_search.elements[fields[i]].disabled = disable;
    }
}
//]]>
</script>

<div class="events-search">
    <div class="events-actions">
        <ul>
            <li><i class="icon-plus-circle"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("event_add"),'but_href'=>"events.add",'but_role'=>"text",'but_meta'=>"add"), 0);?>
</li>
            <li><i class="icon-lock"></i><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("private_events"),'but_href'=>"events.access_key",'but_role'=>"text",'but_meta'=>"private"), 0);?>
</li>
        </ul>
    </div>
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="events_search">
<?php if ($_smarty_tpl->tpl_vars['access_key']->value){?>
<input type="hidden" name="access_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('period'=>$_REQUEST['period'],'form_name'=>"events_search"), 0);?>

<div class="control-group">
    <label for="title"><?php echo $_smarty_tpl->__("title");?>
:</label>
    <input class="input-text" name="title" id="title" size="50" type="text" value="<?php echo htmlspecialchars($_REQUEST['title'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="control-group">
    <label for="owner"><?php echo $_smarty_tpl->__("owner");?>
:</label>
    <input class="input-text" name="owner" id="owner" size="25" type="text" value="<?php echo htmlspecialchars($_REQUEST['owner'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="control-group">
    <label for="subscriber"><?php echo $_smarty_tpl->__("subscriber");?>
:</label>
    <input class="input-text" name="subscriber" id="subscriber" size="25" type="text" value="<?php echo htmlspecialchars($_REQUEST['subscriber'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="control-group">
    <label for="status"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <select name="status" id="status">
            <option value="">--</option>
            <option <?php if ($_REQUEST['status']=="A"){?>selected="selected"<?php }?> value="A"><?php echo $_smarty_tpl->__("awaiting");?>
</option>
            <option <?php if ($_REQUEST['status']=="P"){?>selected="selected"<?php }?> value="P"><?php echo $_smarty_tpl->__("in_progress");?>
</option>
            <option <?php if ($_REQUEST['status']=="F"){?>selected="selected"<?php }?> value="F"><?php echo $_smarty_tpl->__("finished");?>
</option>
        </select>
</div>
<div class="control-group">
    <label for="type"><?php echo $_smarty_tpl->__("event_type");?>
:</label>
    <select name="type" id="type">
            <option value="">--</option>
            <option <?php if ($_REQUEST['type']=="P"){?>selected="selected"<?php }?> value="P"><?php echo $_smarty_tpl->__("public");?>
</option>
            <option <?php if ($_REQUEST['type']=="U"){?>selected="selected"<?php }?> value="U"><?php echo $_smarty_tpl->__("private");?>
</option>
            <option <?php if ($_REQUEST['type']=="D"){?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
</div>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["f_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
<div class="control-group">
    <label <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']!="V"){?>for="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S"||$_smarty_tpl->tpl_vars['field']->value['field_type']=="R"){?>
            <select name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <option value=""> -- </option>
            <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]==$_smarty_tpl->tpl_vars['var']->value['variant_id']){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            </select>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="C"){?>
            <select name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <option value=""> -- </option>
            <option value="Y" <?php if ($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="Y"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
            <option value="N" <?php if ($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="N"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
            </select>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="I"||$_smarty_tpl->tpl_vars['field']->value['field_type']=="T"){?>
            <input class="input-text" size="50" type="text" name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value], ENT_QUOTES, 'UTF-8');?>
" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="V"){?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"search_date_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>"search_fields[".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]",'date_val'=>$_REQUEST['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value],'start_year'=>"1970",'end_year'=>"5"), 0);?>

        <?php }?>
</div>
<?php } ?>
<div class="buttons-container">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[events.search]"), 0);?>

</div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('section_title'=>__("search"),'section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>

<?php }?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="delete_events_form">
<?php if ($_smarty_tpl->tpl_vars['access_key']->value){?>
<input type="hidden" name="access_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('save_current_url'=>true), 0);?>

<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_id']==$_smarty_tpl->tpl_vars['event']->value['user_id']){?><?php $_smarty_tpl->tpl_vars["can_delete"] = new Smarty_variable("Y", null, 0);?><?php }?>
<?php } ?>
<table class="table table-width">
<tr>
    <?php if ($_smarty_tpl->tpl_vars['can_delete']->value=="Y"){?>
    <th style="width: 1%">&nbsp;</th>
    <?php }?>
    <th><?php echo $_smarty_tpl->__("title");?>
</th>
    <th><?php echo $_smarty_tpl->__("start_date");?>
</th>
    <th><?php echo $_smarty_tpl->__("end_date");?>
</th>
    <th><?php echo $_smarty_tpl->__("status");?>
</th>
    <th><?php echo $_smarty_tpl->__("event_type");?>
</th>
    <th><?php echo $_smarty_tpl->__("action");?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
<tr <?php echo smarty_function_cycle(array('values'=>",class=\"table-row\""),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['can_delete']->value=="Y"){?>
    <td class="center"><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_id']==$_smarty_tpl->tpl_vars['event']->value['user_id']){?><input class="checkbox" type="checkbox" name="event_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['event_id'], ENT_QUOTES, 'UTF-8');?>
" /><?php }else{ ?>&nbsp;<?php }?></td>
    <?php }?>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_id']==$_smarty_tpl->tpl_vars['event']->value['user_id']){?>
            <?php $_smarty_tpl->tpl_vars['event_mode'] = new Smarty_variable("update", null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['event_mode'] = new Smarty_variable("view", null, 0);?>
        <?php }?>
        <a href="<?php echo htmlspecialchars(fn_url("events.".((string)$_smarty_tpl->tpl_vars['event_mode']->value)."?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
    </td>
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
    <td><a href="<?php echo htmlspecialchars(fn_url("events.".((string)$_smarty_tpl->tpl_vars['event_mode']->value)."?event_id=".((string)$_smarty_tpl->tpl_vars['event']->value['event_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['event_mode']->value=="view"){?><?php echo $_smarty_tpl->__("view");?>
<?php }else{ ?><?php echo $_smarty_tpl->__("edit");?>
<?php }?></a></td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['event']->_loop) {
?>
<tr>
    <td colspan="6"><p class="no-items"><?php echo $_smarty_tpl->__("no_items_found");?>
</p></td>
</tr>
<?php } ?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['can_delete']->value=="Y"){?>
<div class="events-search-action buttons-container">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("delete_selected"),'but_name'=>"dispatch[events.m_delete]"), 0);?>

</div>
<?php }?>
</form>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("search");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php }?><?php }} ?>