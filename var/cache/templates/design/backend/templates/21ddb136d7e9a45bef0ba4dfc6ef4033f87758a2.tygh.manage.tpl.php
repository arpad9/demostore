<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:13:07
         compiled from "/var/www/4profit4good/design/backend/templates/views/addons/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1555173861522d58e354a011-21350254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21ddb136d7e9a45bef0ba4dfc6ef4033f87758a2' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/addons/manage.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1555173861522d58e354a011-21350254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'addons_list' => 0,
    'a' => 0,
    'runtime' => 0,
    'hide_for_vendor' => 0,
    'non_editable' => 0,
    'additional_class' => 0,
    'key' => 0,
    'href' => 0,
    'link_text' => 0,
    'act' => 0,
    'href_delete' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d58e37011f1_61941117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d58e37011f1_61941117')) {function content_522d58e37011f1_61941117($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('manage','settings','view','settings','uninstall','install','no_data','addons'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('states'=>fn_get_all_states(1)), 0);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dispatch'=>"addons.manage",'view_type'=>"addons"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dispatch'=>"addons.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<div class="items-container" id="addons_list">
<?php if ($_smarty_tpl->tpl_vars['addons_list']->value){?>
    <table class="table table-addons">
<?php  $_smarty_tpl->tpl_vars["a"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["a"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["a"]->key => $_smarty_tpl->tpl_vars["a"]->value){
$_smarty_tpl->tpl_vars["a"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["a"]->key;
?>

    <?php $_smarty_tpl->tpl_vars["non_editable"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["href_delete"] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['a']->value['addon'])."&return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("text", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']){?>
        <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=="N"){?>
        <?php $_smarty_tpl->tpl_vars["non_editable"] = new Smarty_variable(true, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("popup", null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['has_options']){?>
            <?php $_smarty_tpl->tpl_vars["act"] = new Smarty_variable("edit", null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars["act"] = new Smarty_variable("none", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["non_editable"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value){?> 
            <?php $_smarty_tpl->tpl_vars["href_delete"] = new Smarty_variable(fn_url("addons.uninstall?addon=".((string)$_smarty_tpl->tpl_vars['a']->value['addon'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']&&!$_smarty_tpl->tpl_vars['non_editable']->value){?>
        <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("manage"), null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['a']->value['status']!="N"){?>
        <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("settings"), null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable("&nbsp;", null, 0);?>
    <?php }?>

        <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-row-item" id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
            <td class="addon-icon">
                <div class="bg-icon">
                    
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=="N"){?>
                        <i class="exicon-box"></i>
                    <?php }else{ ?>
                        <i class="exicon-box-blue"></i>
                    <?php }?>
                </div>
            </td>
            <td width="80%">
                <div class="object-group-link-wrap">
                <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value){?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']){?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }else{ ?>
                    <a class="row-status cm-external-click<?php if ($_smarty_tpl->tpl_vars['non_editable']->value){?> no-underline<?php }?> <?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']){?>cm-promo-popup<?php }?>" <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']){?>data-ca-external-click-id="opener_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }?>
                <?php }else{ ?>
                    <span class="unedited-element block"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? $_smarty_tpl->__("view") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                    <br><span class="row-status object-group-details"><?php echo $_smarty_tpl->tpl_vars['a']->value['description'];?>
</span>
                </div>
            </td>
            <td width="10%" class="right nowrap">

                <?php if ($_smarty_tpl->tpl_vars['a']->value['status']!='N'){?>
                <div class="pull-right">
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']){?>
                        <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value){?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value));?>
</li>
                        <?php }else{ ?>
                            <li class="disabled"><a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php }?>
                    <?php }else{ ?>
                        <li><?php ob_start();?><?php echo $_smarty_tpl->__("settings");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['key']->value),'text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['a']->value['name']),'act'=>(($tmp = @$_smarty_tpl->tpl_vars['act']->value)===null||$tmp==='' ? "link" : $tmp),'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'is_promo'=>!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']), 0);?>
</li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['href_delete']->value){?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("uninstall"),'data'=>array('data-ca-target-id'=>'addons_list,header_navbar,header_subnav'),'href'=>$_smarty_tpl->tpl_vars['href_delete']->value));?>
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
                <?php }?>

            </td>
            <td width="15%">
                <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=='N'){?>
                    <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value){?>
                    <div class="pull-right">
                        <a class="btn lowercase <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']){?>cm-ajax cm-ajax-full-render<?php }else{ ?>cm-promo-popup<?php }?>" href="<?php echo htmlspecialchars(fn_url("addons.install?addon=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="addons_list,header_navbar,header_subnav"><?php echo $_smarty_tpl->__("install");?>
</a>
                    </div>
                    <?php }?>
                <?php }else{ ?>
                    <div class="pull-right nowrap">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['key']->value,'status'=>$_smarty_tpl->tpl_vars['a']->value['status'],'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'non_editable'=>!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct'],'display'=>$_smarty_tpl->tpl_vars['display']->value,'update_controller'=>"addons"), 0);?>

                    </div>
                <?php }?>
            </td>
        <!--addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
<?php } ?>
</table>
<?php }else{ ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--addons_list--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("addons"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>