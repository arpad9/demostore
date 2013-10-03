<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:09:44
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/common/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1312530832522cf5a883cee5-65156639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2f7db55a7d7d02e7700786b5e5d94e0071f265' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/common/pagination.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1312530832522cf5a883cee5-65156639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'search' => 0,
    'save_current_page' => 0,
    'save_current_url' => 0,
    'config' => 0,
    'pagination' => 0,
    'settings' => 0,
    'force_ajax' => 0,
    'c_url' => 0,
    'extra_url' => 0,
    'ajax_class' => 0,
    'pg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf5a8969889_94974439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf5a8969889_94974439')) {function content_522cf5a8969889_94974439($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('prev_page','next'));
?>
<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["pagination"] = new Smarty_variable(fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value), null, 0);?>

<?php if (Smarty::$_smarty_vars['capture']['pagination_open']!="Y"){?>
    <div class="pagination-container" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['save_current_page']->value){?>
    <input type="hidden" name="page" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['page'])===null||$tmp==='' ? $_REQUEST['page'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['save_current_url']->value){?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_pages']>1){?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['top_pagination']=="Y"&&Smarty::$_smarty_vars['capture']['pagination_open']!="Y"||Smarty::$_smarty_vars['capture']['pagination_open']=="Y"){?>
    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"page","result_ids","is_ajax"), null, 0);?>

    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']||$_smarty_tpl->tpl_vars['force_ajax']->value){?>
        <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
    <?php }?>

    <?php if (Smarty::$_smarty_vars['capture']['pagination_open']=="Y"){?>
    <div class="pagination-bottom">
    <?php }?>
    <div class="pagination cm-pagination-wraper">
        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_range']){?>
            <a data-ca-event="ce.ajax_pagination" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['prev_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history prev <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['prev_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['prev_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        <a data-ca-event="ce.ajax_pagination" class="prev <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']){?>cm-history <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']){?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_page'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['prev_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="text-arrow">&larr;</i>&nbsp;<?php echo $_smarty_tpl->__("prev_page");?>
</a>

        <?php  $_smarty_tpl->tpl_vars["pg"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pg"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['navi_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["pg"]->key => $_smarty_tpl->tpl_vars["pg"]->value){
$_smarty_tpl->tpl_vars["pg"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['pg']->value!=$_smarty_tpl->tpl_vars['pagination']->value['current_page']){?>
                <a data-ca-event="ce.ajax_pagination" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pg']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-history <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }else{ ?>
                <span class="pagination-selected-page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
        <?php } ?>
        <span><a data-ca-event="ce.ajax_pagination" class="next <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']){?>cm-history <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']){?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['next_page'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->__("next");?>
&nbsp;<i class="text-arrow">&rarr;</i></a></span>

        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_range']){?>
            <a data-ca-event="ce.ajax_pagination" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_range']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['next_range'], ENT_QUOTES, 'UTF-8');?>
" class="cm-history next <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['next_range_from'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['next_range_to'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
    </div>
    <?php if (Smarty::$_smarty_vars['capture']['pagination_open']=="Y"){?>
    </div>
    <?php }?>
    <?php }else{ ?>
    <div class="cm-pagination-wraper"><a data-ca-event="ce.ajax_pagination" href="" data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pg']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden"></a></div>
    <?php }?>
<?php }?>

<?php if (Smarty::$_smarty_vars['capture']['pagination_open']=="Y"){?>
    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_smarty_tpl->_capture_stack[0][] = array("pagination_open", null, null); ob_start(); ?>N<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }elseif(Smarty::$_smarty_vars['capture']['pagination_open']!="Y"){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("pagination_open", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }} ?>