<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:04:17
         compiled from "/var/www/4profit4good/design/backend/templates/views/themes/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:874688154522ce65107fef2-11867719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd1f30063e2e8d8654c0a3437cf5570e5dea30ed' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/themes/manage.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '874688154522ce65107fef2-11867719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'available_themes' => 0,
    'theme_name' => 0,
    'theme' => 0,
    'settings' => 0,
    'splitted_themes' => 0,
    'repo_themes' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce651279b46_01536353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce651279b46_01536353')) {function content_522ce651279b46_01536353($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.split.php';
?><?php
fn_preload_lang_vars(array('general','directory','name','description','current_theme','customize_theme','clone_theme','clone_theme','options','layouts','template_editor','available_themes','select','remove','no_themes_available','preview','install','no_themes_available','active_preset','customize','default_layout','configure','theme_directory','edit_files','themes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div class="themes" id="themes_list">

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<div id="content_general">
    <?php $_smarty_tpl->tpl_vars['theme'] = new Smarty_variable($_smarty_tpl->tpl_vars['available_themes']->value['current'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['available_themes']->value['current']['theme_name'], null, 0);?>

    <div id="themes_manage" class="themes-current clearfix">
        <div class="row">

            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="clone_theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_form" class="cm-ajax cm-comet cm-form-dialog-closer form-horizontal form-edit ">
                    <input type="hidden" name="theme_data[theme_src]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="result_ids" value="themes_list,elm_sidebar">

                    <div class="add-new-object-group">
                        <div class="tabs cm-j-tabs">
                            <ul class="nav nav-tabs">
                                <li id="tab_clone_theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js cm-active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                            </ul>
                        </div>

                        <div class="cm-tabs-content" id="content_tab_clone_theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label cm-required" for="elm_theme_dir_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("directory");?>
</label>
                                    <div class="controls">
                                        <input type="text" id="elm_theme_dir_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" name="theme_data[theme_dest]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_clone" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="elm_theme_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
</label>
                                    <div class="controls">
                                        <input type="text" id="elm_theme_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" name="theme_data[title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="elm_theme_desc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
                                    <div class="controls">
                                        <textarea name="theme_data[description]" id="elm_theme_desc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="span9"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>

                    <div class="buttons-container">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[themes.clone]",'cancel_action'=>"close",'save'=>true), 0);?>

                    </div>

                </form>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php if ($_smarty_tpl->tpl_vars['theme']->value['screenshot']){?>
            <img class="span4 screenshot" width="250" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <div class="span8">
            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
            <?php if ($_smarty_tpl->tpl_vars['theme_name']->value==$_smarty_tpl->tpl_vars['settings']->value['theme_name']){?>
            <span class="muted"><?php echo $_smarty_tpl->__("current_theme");?>
</span>
            <?php }?>
            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_href'=>"site_layout.enable_theme_editor_mode",'but_text'=>__("customize_theme"),'but_role'=>"action",'but_meta'=>"btn-primary",'but_target'=>"_blank"), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"elm_clone_theme_".((string)$_smarty_tpl->tpl_vars['theme_name']->value),'text'=>__("clone_theme"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'act'=>"general",'link_text'=>__("clone_theme")), 0);?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['theme_name']->value!=$_smarty_tpl->tpl_vars['settings']->value['theme_name']){?>
            <a class="btn cm-confirm" href="<?php echo htmlspecialchars(fn_url("themes.delete?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-remove"></i></a>
            <?php }?>

            <div class="muted pull-left themes-options">
                <span><?php echo $_smarty_tpl->__("options");?>
:</span> <a href="<?php echo htmlspecialchars(fn_url("block_manager.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("layouts");?>
</a> | <a href="<?php echo htmlspecialchars(fn_url("template_editor.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("template_editor");?>
</a>
            </div>
        </div>
        </div>
    </div>

    <div class="themes-available">
    <h4><?php echo $_smarty_tpl->__("available_themes");?>
</h4>

    <?php if ($_smarty_tpl->tpl_vars['available_themes']->value['installed']){?>

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['available_themes']->value['installed'],'size'=>3,'assign'=>"splitted_themes",'simple'=>true),$_smarty_tpl);?>


    <?php  $_smarty_tpl->tpl_vars["repo_themes"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["repo_themes"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["repo_themes"]->key => $_smarty_tpl->tpl_vars["repo_themes"]->value){
$_smarty_tpl->tpl_vars["repo_themes"]->_loop = true;
?>
    <div class="row">
    <?php  $_smarty_tpl->tpl_vars["theme"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['repo_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme"]->key => $_smarty_tpl->tpl_vars["theme"]->value){
$_smarty_tpl->tpl_vars["theme"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_name"]->value = $_smarty_tpl->tpl_vars["theme"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['theme']->value){?>
            <div class="span4">
                <div class="theme">

                    <?php if ($_smarty_tpl->tpl_vars['theme']->value['screenshot']){?>
                    <a id="image_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" alt="" width="250"></a>
                    <?php }?>
                    <div class="theme-actions">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                            <li><a href="<?php echo htmlspecialchars(fn_url("themes.set?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("select");?>
</a></li>
                            <li><a class="cm-confirm" href="<?php echo htmlspecialchars(fn_url("themes.delete?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("remove");?>
</a></li>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                        <div class="theme-title pull-right">
                            <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
                            <p class="muted" title="/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php } ?>
    <!--row--></div>
    <?php } ?>
    <?php }else{ ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->__("no_themes_available");?>

        </div>
    <?php }?>
    </div>
</div>
<div id="content_install_themes">

    <?php if ($_smarty_tpl->tpl_vars['available_themes']->value['repo']){?>

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['available_themes']->value['repo'],'size'=>3,'assign'=>"splitted_themes",'simple'=>true),$_smarty_tpl);?>

    <div class="themes-available">
    <?php  $_smarty_tpl->tpl_vars["repo_themes"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["repo_themes"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["repo_themes"]->key => $_smarty_tpl->tpl_vars["repo_themes"]->value){
$_smarty_tpl->tpl_vars["repo_themes"]->_loop = true;
?>
    <div class="row">
    <?php  $_smarty_tpl->tpl_vars["theme"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['repo_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme"]->key => $_smarty_tpl->tpl_vars["theme"]->value){
$_smarty_tpl->tpl_vars["theme"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_name"]->value = $_smarty_tpl->tpl_vars["theme"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['theme']->value){?>
            <div class="span4">
                <div class="theme">

                    <?php if ($_smarty_tpl->tpl_vars['theme']->value['screenshot']){?>
                    <a id="image_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" alt="" width="250"></a>
                    <?php }?>

                    <div class="theme-actions">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>

                            <?php if ($_smarty_tpl->tpl_vars['theme']->value['screenshot']){?>
                            <li><a id="image_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><?php echo $_smarty_tpl->__("preview");?>
</a></li>
                            <?php }?>

                            
                            <li><a class="cm-comet cm-ajax" data-ca-target-id="themes_list" href="<?php echo htmlspecialchars(fn_url("themes.install?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("install");?>
</a></li>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                        <div class="theme-title pull-right">
                            <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
                            <p class="muted" title="/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php } ?>
    </div>
    <?php } ?>
    <?php }else{ ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->__("no_themes_available");?>

        </div>
    <?php }?>
    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>

<!--themes_list--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="container themes-side">
        <div class="sidebar-row clearfix">
            <h6><?php echo $_smarty_tpl->__("active_preset");?>
</h6>
            <div class="row-fluid">
                <div class="span7 muted" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['preset_name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['preset_name'], ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="span5 right"><a href="<?php echo htmlspecialchars(fn_url("site_layout.enable_theme_editor_mode"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("customize");?>
</a></div>
            </div>
        </div>
        <hr>
        <div class="sidebar-row clearfix">
            <h6><?php echo $_smarty_tpl->__("default_layout");?>
</h6>
            <div class="row-fluid">
                <div class="span7 muted" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="span5 right"><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("block_manager.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("configure");?>
</a></div>
            </div>
        </div>
        <hr>
        <div class="sidebar-row clearfix">
            <h6><?php echo $_smarty_tpl->__("theme_directory");?>
</h6>
            <div class="row-fluid">
                <div class="span7 muted" title="/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['theme_name'], ENT_QUOTES, 'UTF-8');?>
">/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['theme_name'], ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="span5 right"><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("template_editor.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_files");?>
</a></div>
            </div>
        </div>
    </div>
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
<?php ob_start();?><?php echo $_smarty_tpl->__("themes");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_tmp1,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>