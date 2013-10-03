<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:49:50
         compiled from "/var/www/4profit4good/design/backend/templates/views/languages/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:946813549522ce2eeb35d74-93822995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800c7a42a88936d2c1de4a82595d8ec2cd867777' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/languages/manage.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '946813549522ce2eeb35d74-93822995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_data' => 0,
    'var' => 0,
    'key' => 0,
    'runtime' => 0,
    'config' => 0,
    'c_url' => 0,
    'langs' => 0,
    'language' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'disable_change' => 0,
    'lang_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce2eee1c309_52065239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce2eee1c309_52065239')) {function content_522ce2eee1c309_52065239($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('value','language_variable','delete','restore_default','no_data','language_variable','value','language_code','name','country','status','edit','edit','delete','editing_language','new_language','add_language','add_language','new_language_variable','add_language_variable','translate_privileges','translate_privileges','languages'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<div id="content_translations">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="language_variables_form">
<input type="hidden" name="q" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['lang_data']->value){?>
<table class="table" width="100%">
<thead>
    <tr>
        <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</th>
        <th width="60%"><?php echo $_smarty_tpl->__("value");?>
</th>
        <th width="33%"><?php echo $_smarty_tpl->__("language_variable");?>
</th>
        <th>&nbsp;</th>
    </tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lang_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value){
$_smarty_tpl->tpl_vars["var"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["var"]->key;
?>
<tr>
    <td>
        <input type="checkbox" name="names[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item">
    </td>
    <td>
        <textarea name="lang_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][value]" rows="3" class="span7"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
    </td>
    <td>
        <input type="hidden" name="lang_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
        <p class="lang-name"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></p>
    </td>
    <td>
        <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']){?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('display'=>true,'object_id'=>$_smarty_tpl->tpl_vars['key']->value,'name'=>"lang_data[".((string)$_smarty_tpl->tpl_vars['key']->value)."][overwrite]"), 0);?>

        <?php }?>
        <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
        <a class="cm-confirm" href="<?php echo htmlspecialchars(fn_url("languages.delete_variable?name=".((string)$_smarty_tpl->tpl_vars['var']->value['name'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("delete");?>
">
            <?php if (fn_allowed_for("ULTIMATE")){?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']){?>
                    <?php echo $_smarty_tpl->__("restore_default");?>

                <?php }?>
            <?php }else{ ?>
                <i class="icon-trash"></i>
            <?php }?>
        </a>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php echo $_smarty_tpl->getSubTemplate ("common/table_tools_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('prefix'=>$_smarty_tpl->tpl_vars['var']->value['name'],'tools_list'=>Smarty::$_smarty_vars['capture']['tools_items']), 0);?>

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

</form>

<?php if ($_smarty_tpl->tpl_vars['lang_data']->value){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("delete_button", null, null); ob_start(); ?>
        <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['delete_button'], ENT_QUOTES, 'UTF-8');?>

        <li class="cm-tab-tools" id="tools_translations_delete_buttons">
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[languages.m_delete_variables]",'form'=>"language_variables_form"));?>

        </li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("add_button", null, null); ob_start(); ?>
        <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['add_button'], ENT_QUOTES, 'UTF-8');?>

        <span class="cm-tab-tools btn-group" id="tools_translations_save_button">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[languages.m_update_variables]",'but_role'=>"submit-link",'but_target_form'=>"language_variables_form"), 0);?>

        </span>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array("add_langvar", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="lang_add_var">
<input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="q" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

<table class="table">
<thead>
    <tr class="cm-first-sibling">
        <th width="40%"><?php echo $_smarty_tpl->__("language_variable");?>
</th>
        <th width="50%"><?php echo $_smarty_tpl->__("value");?>
</th>
        <th width="10%">&nbsp;</th>
    </tr>
</thead>
<tbody>
    <tr id="box_new_lang_tag" valign="top">
        <td>
            <input type="text" size="30" name="new_lang_data[0][name]"></td>
        <td>
            <textarea name="new_lang_data[0][value]" cols="48" rows="2"></textarea></td>
        <td>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item_id'=>"new_lang_tag"), 0);?>
</td>
    </tr>
</tbody>
</table>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[languages.update_variables]",'cancel_action'=>"close"), 0);?>

</div>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</div>

<div class="hidden" id="content_languages">

<?php $_smarty_tpl->_capture_stack[0][] = array("add_language", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/languages/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('lang_data'=>array()), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="languages_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']){?>cm-hide-inputs<?php }?>">
<input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

<table class="table table-middle">
<thead>
    <tr class="cm-first-sibling">
        <th width="3" class="left">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</th>
        <th><?php echo $_smarty_tpl->__("language_code");?>
</th>
        <th><?php echo $_smarty_tpl->__("name");?>
</th>
        <th><?php echo $_smarty_tpl->__("country");?>
</th>
        <th>&nbsp;</th>
        <th class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
</thead>
<?php if (count($_smarty_tpl->tpl_vars['langs']->value)==1){?>
    <?php $_smarty_tpl->tpl_vars["disable_change"] = new Smarty_variable(true, null, 0);?>
<?php }?>
<tbody>
<?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value){
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <td class="left">
        <input type="checkbox" name="lang_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code']==@constant('DEFAULT_LANGUAGE')){?>disabled="disabled"<?php }?> class="checkbox cm-item"></td>
    <td>
        <input type="hidden" name="update_language[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
][lang_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>$_smarty_tpl->tpl_vars['language']->value['lang_code'],'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id']));?>

    </td>
    <td>
        <?php if (fn_allowed_for("ULTIMATE:FREE")){?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

        <?php }else{ ?>
            <input type="text" class="input-hidden" name="update_language[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
" maxlength="64">
        <?php }?>
    </td>
    <td>
        <select name="update_language[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
][country_code]">
            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value){
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['language']->value['country_code']){?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </td>
    <td class="nowrap right">
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php if (fn_allowed_for("ULTIMATE:FREE")){?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>__("edit"),'class'=>"cm-promo-popup"));?>
</li>
                <?php }else{ ?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>__("edit"),'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'id'=>"opener_group_".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id']));?>
</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code']!=@constant('DEFAULT_LANGUAGE')){?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"languages.delete_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])));?>
</li>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>

    </td>
    <?php $_smarty_tpl->_capture_stack[0][] = array("popups", null, null); ob_start(); ?>
        <?php echo Smarty::$_smarty_vars['capture']['popups'];?>

        <div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php ob_start();?><?php echo $_smarty_tpl->__("editing_language");?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['language']->value['name']), ENT_QUOTES, 'UTF-8');?>
"></div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <td class="right">
        <?php if ($_smarty_tpl->tpl_vars['disable_change']->value||$_smarty_tpl->tpl_vars['runtime']->value['company_id']||fn_allowed_for("ULTIMATE:FREE")){?>
            <?php $_smarty_tpl->tpl_vars["lang_id"] = new Smarty_variable('', null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['lang_id']->value,'prefix'=>"lng",'status'=>$_smarty_tpl->tpl_vars['language']->value['status'],'hidden'=>"Y",'object_id_name'=>"lang_id",'table'=>"languages",'update_controller'=>"languages",'non_editable'=>true), 0);?>

        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars["lang_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['lang_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['lang_id']->value,'prefix'=>"lng",'status'=>$_smarty_tpl->tpl_vars['language']->value['status'],'hidden'=>"Y",'object_id_name'=>"lang_id",'table'=>"languages",'update_controller'=>"languages"), 0);?>

        <?php }?>
    </td>

</tr>
<?php } ?>
</tbody>
</table>

</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("delete_button", null, null); ob_start(); ?>
    <?php echo Smarty::$_smarty_vars['capture']['delete_button'];?>

    <li class="cm-tab-tools" id="tools_languages_delete_buttons">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[languages.m_delete]",'form'=>"languages_form"));?>

    </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("add_button", null, null); ob_start(); ?>
    <?php echo Smarty::$_smarty_vars['capture']['add_button'];?>

    <span class="cm-tab-tools btn-group" id="tools_languages_save_button">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[languages.m_update]",'but_role'=>"submit-link",'but_target_form'=>"languages_form"), 0);?>

    </span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</div>

<?php echo Smarty::$_smarty_vars['capture']['popups'];?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/languages/components/langvars_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if (!fn_allowed_for("ULTIMATE:FREE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']){?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"add_language",'text'=>__("new_language"),'link_text'=>__("add_language"),'content'=>Smarty::$_smarty_vars['capture']['add_language'],'act'=>"link"), 0);?>
</li>
        <?php }elseif(fn_allowed_for("ULTIMATE:FREE")){?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_role'=>"icon",'but_meta'=>"cm-promo-popup",'allow_href'=>false,'but_text'=>__("add_language")), 0);?>
</li>
        <?php }?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"add_langvar",'text'=>__("new_language_variable"),'link_text'=>__("add_language_variable"),'content'=>Smarty::$_smarty_vars['capture']['add_langvar'],'act'=>"link"), 0);?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'icon'=>"icon-plus",'no_caret'=>true));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if (fn_allowed_for("ULTIMATE:FREE")){?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("translate_privileges"),'class'=>"cm-promo-popup"));?>
</li>
        <?php }else{ ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"usergroups.privileges",'text'=>__("translate_privileges")));?>
</li>
        <?php }?>
        <?php echo Smarty::$_smarty_vars['capture']['delete_button'];?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php echo Smarty::$_smarty_vars['capture']['add_button'];?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("languages"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true), 0);?>

<?php }} ?>