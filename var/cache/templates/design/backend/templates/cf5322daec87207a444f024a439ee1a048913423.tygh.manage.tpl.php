<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:43:30
         compiled from "/var/www/4profit4good/design/backend/templates/views/settings/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1470147299522ce172c2e410-40779559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf5322daec87207a444f024a439ee1a048913423' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/settings/manage.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1470147299522ce172c2e410-40779559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section_id' => 0,
    'selected_section' => 0,
    'options' => 0,
    'ukey' => 0,
    'section' => 0,
    'subsections' => 0,
    'subsection' => 0,
    'item' => 0,
    'has_fieldset' => 0,
    'settings_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce172cf43e5_47726462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce172cf43e5_47726462')) {function content_522ce172cf43e5_47726462($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('settings'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('states'=>fn_get_all_states(1)), 0);?>


<?php if ($_REQUEST['highlight']){?>
<?php $_smarty_tpl->tpl_vars["highlight"] = new Smarty_variable(explode(",",$_REQUEST['highlight']), null, 0);?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="settings_form" class=" form-horizontal form-edit form-setting">
    <input name="section_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

        <?php $_smarty_tpl->tpl_vars["has_fieldset"] = new Smarty_variable("false", null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['subsection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsection']->_loop = false;
 $_smarty_tpl->tpl_vars["ukey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsection']->key => $_smarty_tpl->tpl_vars['subsection']->value){
$_smarty_tpl->tpl_vars['subsection']->_loop = true;
 $_smarty_tpl->tpl_vars["ukey"]->value = $_smarty_tpl->tpl_vars['subsection']->key;
?>
            <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB"){?>class="cm-hide-save-button"<?php }?>>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subsection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["section"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["section"]['iteration']++;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'section'=>$_smarty_tpl->tpl_vars['section_id']->value,'html_id'=>"field_".((string)$_smarty_tpl->tpl_vars['section']->value)."_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['item']->value['object_id']),'html_name'=>"update[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]",'index'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['section']['iteration']), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="H"){?>
                        <?php $_smarty_tpl->tpl_vars["has_fieldset"] = new Smarty_variable("true", null, 0);?>
                    <?php }?>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['has_fieldset']->value){?></fieldset><?php }?>
            </div>
        <?php } ?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[settings.update]",'but_role'=>"submit-link",'but_target_form'=>"settings_form"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>


    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->__("settings");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['settings_title']->value),'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content'=>Smarty::$_smarty_vars['capture']['mainbox']), 0);?>


<?php }} ?>