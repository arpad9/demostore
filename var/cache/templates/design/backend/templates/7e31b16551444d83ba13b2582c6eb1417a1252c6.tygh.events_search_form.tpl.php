<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:29:24
         compiled from "/var/www/4profit4good/design/backend/templates/addons/gift_registry/views/events/components/events_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111243650252333d64b4f2f8-30824450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e31b16551444d83ba13b2582c6eb1417a1252c6' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/gift_registry/views/events/components/events_search_form.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '111243650252333d64b4f2f8-30824450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'event_fields' => 0,
    'field' => 0,
    'var' => 0,
    'f_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333d64c896d3_38374673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333d64c896d3_38374673')) {function content_52333d64c896d3_38374673($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','title','owner','subscriber','period','status','awaiting','in_progress','finished','type','public','private','disabled','yes','no'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="events_search">

<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <div class="sidebar-field">
            <label for="title"><?php echo $_smarty_tpl->__("title");?>
:</label>
            <input name="title" id="title" size="25" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
        </div>

        <div class="sidebar-field">
            <label for="owner"><?php echo $_smarty_tpl->__("owner");?>
:</label>
            <input name="owner" id="owner" size="25" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['owner'], ENT_QUOTES, 'UTF-8');?>
">
        </div>

        <div class="sidebar-field">
            <label for="subscriber"><?php echo $_smarty_tpl->__("subscriber");?>
:</label>
            <input name="subscriber" id="subscriber" size="25" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['subscriber'], ENT_QUOTES, 'UTF-8');?>
">
        </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>

<div class="group form-horizontal">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"events_search"), 0);?>

        </div>
    </div>
</div>

<div class="group form-horizontal">
    <div class="control-group">
        <label for="status" class="control-label"><?php echo $_smarty_tpl->__("status");?>
:</label>
        <div class="controls">
            <select name="status" id="status">
                <option value="">--</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="A"){?>selected="selected"<?php }?> value="A"><?php echo $_smarty_tpl->__("awaiting");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="P"){?>selected="selected"<?php }?> value="P"><?php echo $_smarty_tpl->__("in_progress");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="F"){?>selected="selected"<?php }?> value="F"><?php echo $_smarty_tpl->__("finished");?>
</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label for="type" class="control-label"><?php echo $_smarty_tpl->__("type");?>
:</label>
        <div class="controls">
           <select name="type" id="type">
                <option value="">--</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="P"){?>selected="selected"<?php }?> value="P"><?php echo $_smarty_tpl->__("public");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="U"){?>selected="selected"<?php }?> value="U"><?php echo $_smarty_tpl->__("private");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="D"){?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
    </div>
</div>

<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["f_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
<div class="control-group">
    <label for="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</label>
    <div class="controls">
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
" <?php if ($_smarty_tpl->tpl_vars['search']->value['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]==$_smarty_tpl->tpl_vars['var']->value['variant_id']){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="C"){?>
        <select name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <option value=""> -- </option>
            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="Y"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
            <option value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value]=="N"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
        </select>
    <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="I"||$_smarty_tpl->tpl_vars['field']->value['field_type']=="T"){?>
        <input class="input-text" size="50" type="text" name="search_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value], ENT_QUOTES, 'UTF-8');?>
" id="search_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']=="V"){?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('date_id'=>"search_date_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>"search_fields[".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['search_fields'][$_smarty_tpl->tpl_vars['f_id']->value],'start_year'=>"1970",'end_year'=>"5"), 0);?>

    <?php }?>
    </div>
</div>
<?php } ?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>"events.search",'view_type'=>"events"), 0);?>


</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>
<?php }} ?>