<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:06:03
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/views/theme_editor/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583530488522cf4cb433be1-99323463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a00237e32c4941b70e81f9441804b2985a25668' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/views/theme_editor/view.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '583530488522cf4cb433be1-99323463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'current_preset' => 0,
    'selected_section' => 0,
    'props_schema' => 0,
    'layouts' => 0,
    'layout_data' => 0,
    'layout' => 0,
    'theme_url' => 0,
    'presets_list' => 0,
    's_item' => 0,
    'te_sections' => 0,
    'section' => 0,
    's' => 0,
    'cse_logos' => 0,
    'id' => 0,
    'image' => 0,
    'field' => 0,
    'name' => 0,
    'cse_logo_types' => 0,
    'type' => 0,
    'a' => 0,
    'cp_value' => 0,
    'family' => 0,
    'family_name' => 0,
    'font_size' => 0,
    'key' => 0,
    'prop' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cf4cbf07a67_57084091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cf4cbf07a67_57084091')) {function content_522cf4cbf07a67_57084091($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('layout','layout','theme_editor','clone','delete','save','save','alt_text','alt_text','image','image','delete','layout','layout','theme_editor','clone','delete','save','save','alt_text','alt_text','image','image','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="theme_editor">
<?php echo smarty_function_style(array('src'=>"theme_editor.css"),$_smarty_tpl);?>


<script type="text/javascript">
//<![CDATA[
Tygh.tr({
    'theme_editor.preset_name': '<?php echo strtr($_smarty_tpl->__("theme_editor.preset_name"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    'theme_editor.text_close_editor': '<?php echo strtr($_smarty_tpl->__("theme_editor.text_close_editor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    'theme_editor.text_close_editor_unsaved': '<?php echo strtr($_smarty_tpl->__("theme_editor.text_close_editor_unsaved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    'theme_editor.text_reset_changes': '<?php echo strtr($_smarty_tpl->__("theme_editor.text_reset_changes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
//]]>
</script>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax" name="theme_editor_form" enctype="multipart/form-data">
<input type="hidden" name="preset_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-is-default="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['is_default'], ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="preset[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="theme_editor">

<span class="te-nav"><a id="sw_theme_editor_container" class="te-minimize cm-combination cm-combo-on" title="<?php echo $_smarty_tpl->__("theme_editor.hide_show");?>
">
        <i class="icon-left-open"></i><i class="icon-right-open"></i>
    </a>
<a href="<?php echo htmlspecialchars(fn_url("theme_editor.close"), ENT_QUOTES, 'UTF-8');?>
" class="te-close cm-te-close-editor" title="<?php echo $_smarty_tpl->__("theme_editor.close");?>
"><i class="icon-cancel"></i></a>
        </span>
</span>

<div class="theme-editor" id="theme_editor_container">
    <div class="te-header<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value){?> te-header-no-schema<?php }?>" id="te_presets_list">
        <?php if (count($_smarty_tpl->tpl_vars['layouts']->value)==1){?>
            <a class="te-layout-name"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title te-layout-nolink"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
        <?php }else{ ?>
            <a id="sw_te-layouts" class="te-layout-name cm-combination"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <ul id="te-layouts" class="te-layout-dropdown">
                <?php  $_smarty_tpl->tpl_vars['layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layout']->key => $_smarty_tpl->tpl_vars['layout']->value){
$_smarty_tpl->tpl_vars['layout']->_loop = true;
?>
                    <li><a class="cm-te-change-layout" data-ca-layout-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['theme_url']->value,"s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php } ?>
            </ul>
        <?php }?>
        <span class="te-title">
            <?php echo $_smarty_tpl->__("theme_editor");?>

        </span>

        <?php if ($_smarty_tpl->tpl_vars['props_schema']->value){?>
        <span class="te-subtitle"><?php echo $_smarty_tpl->__("theme_editor.presets");?>
</span>
        <div class="te-header-menu-wrap">
            <div class="te-header-menu-wrap-left">
                <div class="te-select-box cm-te-selectbox te-theme" tabindex="0"><span class="cm-preset-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['name'])===null||$tmp==='' ? "--" : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><i class="icon-d-arrow"></i>
                <ul class="te-select-dropdown">
                    <?php  $_smarty_tpl->tpl_vars["s_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s_item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['presets_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s_item"]->key => $_smarty_tpl->tpl_vars["s_item"]->value){
$_smarty_tpl->tpl_vars["s_item"]->_loop = true;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['preset_id']==$_smarty_tpl->tpl_vars['s_item']->value['preset_id']){?>active<?php }?>">
                            <a class="cm-te-load-preset <?php if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['preset_id']==$_smarty_tpl->tpl_vars['s_item']->value['preset_id']){?>active<?php }?>" data-ca-target-id="theme_editor" href="<?php echo htmlspecialchars(fn_url("theme_editor.view?preset_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-preset-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_item']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            
                            <a class="icon-wrap-duplicate cm-te-duplicate-preset" data-ca-preset-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_item']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-docs" title="<?php echo $_smarty_tpl->__("clone");?>
"></i></a>

                            <?php if (!$_smarty_tpl->tpl_vars['s_item']->value['is_default']&&$_smarty_tpl->tpl_vars['runtime']->value['layout']['preset_id']!=$_smarty_tpl->tpl_vars['s_item']->value['preset_id']){?>
                                <a class="icon-wrap-remove cm-ajax cm-confirm" data-ca-target-id="te_presets_list" href="<?php echo htmlspecialchars(fn_url("theme_editor.delete_preset?preset_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-trashcan" title="<?php echo $_smarty_tpl->__("delete");?>
"></i></a>
                            <?php }?>
                        </li>
                    <?php }
if (!$_smarty_tpl->tpl_vars["s_item"]->_loop) {
?>
                        <li class="active">
                            <a class="cm-te-load-preset active">--</a>
                        </li>
                    <?php } ?>
                </ul>
                </div>
            </div>
            <div class="te-header-menu-wrap-right">
                <button class="te-btn-action float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['te_sections']->value){?>
            <span class="te-subtitle"><?php echo $_smarty_tpl->__("theme_editor.customize");?>
</span>
            <div class="te-select-box cm-te-selectbox te-customize" tabindex="0">
                <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['te_sections']->value[$_smarty_tpl->tpl_vars['selected_section']->value]);?>
</span><i class="icon-d-arrow"></i>
                <ul class="te-select-dropdown cm-te-sections">
                    <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['te_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value){
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_section']->value==$_smarty_tpl->tpl_vars['section']->value){?>class="active"<?php }?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['s']->value);?>
</li>
                    <?php } ?>
                </ul>
            </div>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['props_schema']->value){?>
            <div class="te-no-schema">
                <button class="te-btn-action float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
            </div>
        <?php }?>
    <!--te_presets_list--></div>
<div class="te-content<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value){?> te-content-no-schema<?php }?>">
<div class="te-section">



     <div class="te-wrap te-general cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_general"){?>hidden<?php }?>" id="te_general">

        <div class="te-inner-wrap">

            <div class="te-general-group">

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value&&$_smarty_tpl->tpl_vars['cse_logos']->value['favicon']){?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['logo_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['image'], null, 0);?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(array(), null, 0);?>
                <?php }?>


                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <div class="te-image te-favicon-wrap clearfix">
                    <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.favicon");?>
&nbsp;<i class="icon-help-circle cm-tooltip" title="<?php echo $_smarty_tpl->__("theme_editor.favicon_size");?>
"></i></span><?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0);?>

                    <div class="te-favicon cm-te-logo" data-ca-image-area="favicon" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                </div>

            </div>

            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['general']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="checkbox"){?>
            <div class="te-general-group">
                <div class="te-checkbox clearfix">
                    <label for="elm_toggle_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="hidden" name="preset[data][general][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="0" class="cm-te-value-changer" />
                        <input type="checkbox" name="preset[data][general][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['general'][$_smarty_tpl->tpl_vars['name']->value]){?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</span></label>
                </div>
            </div>            
            <?php }?>

            <?php } ?>
        </div>

        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_general");?>
</button></div>
    <!--te_general--></div>




    <div class="te-wrap te-logos cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_logos"){?>hidden<?php }?>" id="te_logos">

        <div class="te-tabs cm-te-tabs">
            <ul class="te-pills">
                <?php  $_smarty_tpl->tpl_vars["logo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["logo"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cse_logo_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["logo"]->key => $_smarty_tpl->tpl_vars["logo"]->value){
$_smarty_tpl->tpl_vars["logo"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["logo"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value=="favicon"){?>
                    <?php continue 1?>
                <?php }?>                
                <li <?php if ($_smarty_tpl->tpl_vars['type']->value=="theme"){?>class="active"<?php }?>><a data-ca-target-id="elm_logo_section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("theme_editor.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
"><span><?php echo $_smarty_tpl->__("theme_editor.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</span></a></li>
                <?php } ?>
            </ul>

            <?php  $_smarty_tpl->tpl_vars["logo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["logo"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cse_logo_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["logo"]->key => $_smarty_tpl->tpl_vars["logo"]->value){
$_smarty_tpl->tpl_vars["logo"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["logo"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value=="favicon"){?>
                    <?php continue 1?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value&&$_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]){?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image'], null, 0);?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(array(), null, 0);?>
                <?php }?>

                <div class="<?php if ($_smarty_tpl->tpl_vars['type']->value!="theme"){?>hidden<?php }?> cm-te-tab-contents" id="elm_logo_section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="attach-images">
                        <div class="upload-box clearfix">
                            <div class="image-wrap pull-left">
                                <div class="te-image">
                                    <div class="te-bg-image cm-te-logo" data-ca-image-area="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                                </div>
                                <div class="logo-alt"><span class="left-add cm-tooltip" title="<?php echo $_smarty_tpl->__("alt_text");?>
"><i class="icon-bubble"></i></span><input type="text" class="cm-image-field" id="alt_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("alt_text");?>
"></div>
                            </div>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"theme_editor:logo_uploader")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="te-logos-upload clearfix">
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("image");?>
&nbsp;</span>                                                        
                                <?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0);?>

                            </div>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        
    <!--te_logos--></div>

    <div class="te-wrap te-colors cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_colors"){?>hidden<?php }?>" id="te_colors">

        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['colors']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
        <div class="te-colors clearfix">
            <label for="elm_te_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
            <?php $_smarty_tpl->tpl_vars['cp_value'] = new Smarty_variable("#ffffff", null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['colors'][$_smarty_tpl->tpl_vars['name']->value]){?>
                <?php $_smarty_tpl->tpl_vars['cp_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['current_preset']->value['data']['colors'][$_smarty_tpl->tpl_vars['name']->value], null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['name']->value=="color_2"){?>
                <?php $_smarty_tpl->tpl_vars['cp_value'] = new Smarty_variable("#000000", null, 0);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cp_name'=>"preset[data][colors][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>$_smarty_tpl->tpl_vars['cp_value']->value,'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0);?>

        </div>
        <?php } ?>

        

        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_colors");?>
</button></div>

    <!--te_colors--></div>

    <div class="te-wrap te-fonts cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_fonts"){?>hidden<?php }?>" id="te_fonts">
        <div class="te-inner-wrap">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
            <div class="control-group te-font-group">
                <label for="elm_te_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
                
                <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families'][$_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>Arial<?php }?></span><i class="icon-d-arrow"></i>
                    <input type="text" class="hidden cm-te-selectbox-storage" name="preset[data][fonts][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][family]" value="<?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family'], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>Arial,Helvetica,sans-serif<?php }?>">
                    <ul class="te-select-dropdown">
                        <?php  $_smarty_tpl->tpl_vars["family_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["family_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["family"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["family_name"]->key => $_smarty_tpl->tpl_vars["family_name"]->value){
$_smarty_tpl->tpl_vars["family_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["family"]->value = $_smarty_tpl->tpl_vars["family_name"]->key;
?>
                        <li data-ca-select-box-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']==$_smarty_tpl->tpl_vars['family']->value){?>class="active"<?php }?> style="font-family: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['family_name']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php } ?>
                    </ul>
                </div>
                
                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['size']){?>
                <div class="te-select-box te-font-size cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['size'], ENT_QUOTES, 'UTF-8');?>
</span><i class="icon-d-arrow"></i>
                    <input type="text" class="hidden cm-te-selectbox-storage" name="preset[data][fonts][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][size]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['size'], ENT_QUOTES, 'UTF-8');?>
">
                    <ul class="te-select-dropdown">
                        <?php  $_smarty_tpl->tpl_vars["font_size"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["font_size"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['properties']['size']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["font_size"]->key => $_smarty_tpl->tpl_vars["font_size"]->value){
$_smarty_tpl->tpl_vars["font_size"]->_loop = true;
?>
                        <li data-ca-select-box-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['size']==$_smarty_tpl->tpl_vars['font_size']->value){?>class="active"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php } ?>
                    </ul>
                </div>
                <?php }?>
        
                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['style']){?>
                <?php  $_smarty_tpl->tpl_vars["prop"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["prop"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['properties']['style']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["prop"]->key => $_smarty_tpl->tpl_vars["prop"]->value){
$_smarty_tpl->tpl_vars["prop"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["prop"]->key;
?>            
                <div class="te-font-style-wrap">
                    <input class="cm-te-value-changer te-font-style-checkbox" type="checkbox" id="font_style_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="preset[data][fonts][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][style][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['style'][$_smarty_tpl->tpl_vars['key']->value]){?>checked="checked"<?php }?> /><label for="font_style_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-font-style <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prop']->value['property'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
                <?php } ?>
                <?php }?>
            </div>
            <?php } ?>
        </div>

    <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_fonts");?>
</button></div>

    <!--te_fonts--></div>

    <div class="te-wrap te-bg cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_backgrounds"){?>hidden<?php }?>" id="te_backgrounds">

        <div class="te-inner-wrap">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['backgrounds']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
            <div class="control-group te-bg-group">
                <label for="elm_te_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
            
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['color']){?>
                        <div class="te-color-picker-container te-colors clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.background_color");?>
&nbsp;</span>

                            <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']||$_smarty_tpl->tpl_vars['field']->value['transparent']||$_smarty_tpl->tpl_vars['field']->value['full_width']){?>
                            <a id="sw_backgrounds_adv_color_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination te-advanced-options"><i class="icon-cog"></i></a>
                            <?php }?>
                            
                            <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cp_name'=>"preset[data][backgrounds][".((string)$_smarty_tpl->tpl_vars['name']->value)."][color]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>(($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['color'])===null||$tmp==='' ? "#ffffff" : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0);?>

                        </div>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']||$_smarty_tpl->tpl_vars['field']->value['transparent']||$_smarty_tpl->tpl_vars['field']->value['full_width']){?>
                    <div id="backgrounds_adv_color_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden clearfix">
                            <div class="te-advanced-connector"></div>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']){?>
                        <div class="te-gradient-color clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.gradient");?>
&nbsp;</span>            
                            <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cp_name'=>"preset[data][backgrounds][".((string)$_smarty_tpl->tpl_vars['name']->value)."][gradient]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value)."_gradient",'cp_value'=>(($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['gradient'])===null||$tmp==='' ? "#ffffff" : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0);?>

                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['full_width']){?>
                        <div class="te-fullwidth te-checkbox clearfix">
                            <label for="elm_toggle_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][full_width]" class="cm-te-value-changer" id="elm_toggle_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['full_width']){?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.full_width");?>
</span></label>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['transparent']){?>
                        <div class="te-transparent te-checkbox clearfix">
                            <label for="elm_toggle_transparent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][transparent]" class="cm-te-value-changer" id="elm_toggle_transparent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['transparent']){?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.transparent");?>
</span></label>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['image']){?>
                    <div class="te-bg-image-group te-colors clearfix" id="te_uploaded_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">

                        <input type="text" class="hidden cm-te-skip-css" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][image_data]" value="<?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_data']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_data'], ENT_QUOTES, 'UTF-8');?>
<?php }?>">
                        <input type="text" class="hidden cm-te-skip-css" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][image_name]" value="<?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_name'], ENT_QUOTES, 'UTF-8');?>
<?php }?>">

                        <span class="te-bg-title"><?php echo $_smarty_tpl->__("image");?>
&nbsp;<i class="icon-help-circle cm-tooltip" title="<?php echo $_smarty_tpl->__("theme_editor.max_image_size");?>
"></i></span>
                        <a id="sw_backgrounds_adv_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination te-advanced-options"><i class="icon-cog"></i></a>

                        <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_data']){?>
                            <div class="te-fileuploader clearfix">
                                <div class="upload-file-section">
                                    <p class="cm-fu-file">
                                    
                                    <a href="<?php echo htmlspecialchars(fn_url("theme_editor.delete_image_data?image_name=".((string)$_smarty_tpl->tpl_vars['name']->value)."&preset_id=".((string)$_smarty_tpl->tpl_vars['current_preset']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.formajaxpost_theme_editor_form" data-ca-target-id="te_uploaded_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-confirm delete-thumb"><i class="icon-trashcan" title="<?php echo $_smarty_tpl->__("delete");?>
">&nbsp;</i></a>
                                    
                                    <span class="filename-link">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_name'], ENT_QUOTES, 'UTF-8');?>
</span></p>

                                </div>
                            </div>

                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"backgrounds[".((string)$_smarty_tpl->tpl_vars['name']->value)."]"), 0);?>

                        <?php }?>
            
                    <!--te_uploaded_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                    <?php }?>
            
                    <div id="backgrounds_adv_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden"><?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['position']){?>
                            <div class="te-advanced-connector"></div>
                            <div class="te-bg-position clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.position");?>
&nbsp;</span>
                                <div class="sse-bg-position-main-wrap clearfix">
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_left" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="top left" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="top left"){?>checked="checked"<?php }?> /><label for="top_left"><i class="icon-arrow-up-left"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_center" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="top center" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="top center"){?>checked="checked"<?php }?> /><label for="top_center"><i class="icon-arrow-up"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_right" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="top right" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="top right"){?>checked="checked"<?php }?> /><label for="top_right"><i class="icon-arrow-up-right"></i></label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_left" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" if="center_left" value="center left" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="center left"){?>checked="checked"<?php }?> /><label for="center_left"><i class="icon-arrow-left"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_center" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="center center" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="center center"){?>checked="checked"<?php }?> /><label for="center_center"><i class="icon-square"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_right" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="center right" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="center right"){?>checked="checked"<?php }?> /><label for="center_right"><i class="icon-arrow-right"></i></label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_left" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="bottom left" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="bottom left"){?>checked="checked"<?php }?> /><label for="bottom_left"><i class="icon-arrow-down-left"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_center" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="bottom center" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="bottom center"){?>checked="checked"<?php }?> /><label for="bottom_center"><i class="icon-arrow-down"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_right" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="bottom right" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="bottom right"){?>checked="checked"<?php }?> /><label for="bottom_right"><i class="icon-arrow-down-right"></i></label></div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['repeat']){?>
                        <div>
                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo $_smarty_tpl->__("theme_editor.repeat");?>
</span><i class="icon-d-arrow"></i>
                                <input type="text" class="hidden" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][repeat]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat'])===null||$tmp==='' ? "repeat" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="repeat" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="repeat"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.repeat");?>
</li>
                                    <li data-ca-select-box-value="repeat-x" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="repeat-x"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.repeat_x");?>
</li>
                                    <li data-ca-select-box-value="repeat-y" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="repeat-y"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.repeat_y");?>
</li>
                                    <li data-ca-select-box-value="no-repeat" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="no-repeat"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.no_repeat");?>
</li>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['attachment']){?>
                        <div>
                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo $_smarty_tpl->__("theme_editor.scroll");?>
</span><i class="icon-d-arrow"></i>
                                <input type="text" class="hidden" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][attachment]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['attachment'])===null||$tmp==='' ? "scroll" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="scroll" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['attachment']=="scroll"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.scroll");?>
</li>
                                    <li data-ca-select-box-value="fixed" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['attachment']=="fixed"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.fixed");?>
</li>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                    </div>
            
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_backgrounds");?>
</button></div>

    <!--te_backgrounds--></div>

</div>
</div>


</div>

</form>
<!--theme_editor--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="views/theme_editor/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/theme_editor/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><div id="theme_editor">
<?php echo smarty_function_style(array('src'=>"theme_editor.css"),$_smarty_tpl);?>


<script type="text/javascript">
//<![CDATA[
Tygh.tr({
    'theme_editor.preset_name': '<?php echo strtr($_smarty_tpl->__("theme_editor.preset_name"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    'theme_editor.text_close_editor': '<?php echo strtr($_smarty_tpl->__("theme_editor.text_close_editor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    'theme_editor.text_close_editor_unsaved': '<?php echo strtr($_smarty_tpl->__("theme_editor.text_close_editor_unsaved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    'theme_editor.text_reset_changes': '<?php echo strtr($_smarty_tpl->__("theme_editor.text_reset_changes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
//]]>
</script>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax" name="theme_editor_form" enctype="multipart/form-data">
<input type="hidden" name="preset_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-is-default="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['is_default'], ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="preset[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="theme_editor">

<span class="te-nav"><a id="sw_theme_editor_container" class="te-minimize cm-combination cm-combo-on" title="<?php echo $_smarty_tpl->__("theme_editor.hide_show");?>
">
        <i class="icon-left-open"></i><i class="icon-right-open"></i>
    </a>
<a href="<?php echo htmlspecialchars(fn_url("theme_editor.close"), ENT_QUOTES, 'UTF-8');?>
" class="te-close cm-te-close-editor" title="<?php echo $_smarty_tpl->__("theme_editor.close");?>
"><i class="icon-cancel"></i></a>
        </span>
</span>

<div class="theme-editor" id="theme_editor_container">
    <div class="te-header<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value){?> te-header-no-schema<?php }?>" id="te_presets_list">
        <?php if (count($_smarty_tpl->tpl_vars['layouts']->value)==1){?>
            <a class="te-layout-name"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title te-layout-nolink"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
        <?php }else{ ?>
            <a id="sw_te-layouts" class="te-layout-name cm-combination"><span class="te-layout-label"><?php echo $_smarty_tpl->__("layout");?>
: </span><span class="te-layout-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <ul id="te-layouts" class="te-layout-dropdown">
                <?php  $_smarty_tpl->tpl_vars['layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layout']->key => $_smarty_tpl->tpl_vars['layout']->value){
$_smarty_tpl->tpl_vars['layout']->_loop = true;
?>
                    <li><a class="cm-te-change-layout" data-ca-layout-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['theme_url']->value,"s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php } ?>
            </ul>
        <?php }?>
        <span class="te-title">
            <?php echo $_smarty_tpl->__("theme_editor");?>

        </span>

        <?php if ($_smarty_tpl->tpl_vars['props_schema']->value){?>
        <span class="te-subtitle"><?php echo $_smarty_tpl->__("theme_editor.presets");?>
</span>
        <div class="te-header-menu-wrap">
            <div class="te-header-menu-wrap-left">
                <div class="te-select-box cm-te-selectbox te-theme" tabindex="0"><span class="cm-preset-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['name'])===null||$tmp==='' ? "--" : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><i class="icon-d-arrow"></i>
                <ul class="te-select-dropdown">
                    <?php  $_smarty_tpl->tpl_vars["s_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s_item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['presets_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s_item"]->key => $_smarty_tpl->tpl_vars["s_item"]->value){
$_smarty_tpl->tpl_vars["s_item"]->_loop = true;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['preset_id']==$_smarty_tpl->tpl_vars['s_item']->value['preset_id']){?>active<?php }?>">
                            <a class="cm-te-load-preset <?php if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['preset_id']==$_smarty_tpl->tpl_vars['s_item']->value['preset_id']){?>active<?php }?>" data-ca-target-id="theme_editor" href="<?php echo htmlspecialchars(fn_url("theme_editor.view?preset_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-preset-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_item']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            
                            <a class="icon-wrap-duplicate cm-te-duplicate-preset" data-ca-preset-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_item']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-docs" title="<?php echo $_smarty_tpl->__("clone");?>
"></i></a>

                            <?php if (!$_smarty_tpl->tpl_vars['s_item']->value['is_default']&&$_smarty_tpl->tpl_vars['runtime']->value['layout']['preset_id']!=$_smarty_tpl->tpl_vars['s_item']->value['preset_id']){?>
                                <a class="icon-wrap-remove cm-ajax cm-confirm" data-ca-target-id="te_presets_list" href="<?php echo htmlspecialchars(fn_url("theme_editor.delete_preset?preset_id=".((string)$_smarty_tpl->tpl_vars['s_item']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-trashcan" title="<?php echo $_smarty_tpl->__("delete");?>
"></i></a>
                            <?php }?>
                        </li>
                    <?php }
if (!$_smarty_tpl->tpl_vars["s_item"]->_loop) {
?>
                        <li class="active">
                            <a class="cm-te-load-preset active">--</a>
                        </li>
                    <?php } ?>
                </ul>
                </div>
            </div>
            <div class="te-header-menu-wrap-right">
                <button class="te-btn-action float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['te_sections']->value){?>
            <span class="te-subtitle"><?php echo $_smarty_tpl->__("theme_editor.customize");?>
</span>
            <div class="te-select-box cm-te-selectbox te-customize" tabindex="0">
                <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['te_sections']->value[$_smarty_tpl->tpl_vars['selected_section']->value]);?>
</span><i class="icon-d-arrow"></i>
                <ul class="te-select-dropdown cm-te-sections">
                    <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['te_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value){
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_section']->value==$_smarty_tpl->tpl_vars['section']->value){?>class="active"<?php }?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['s']->value);?>
</li>
                    <?php } ?>
                </ul>
            </div>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['props_schema']->value){?>
            <div class="te-no-schema">
                <button class="te-btn-action float-right" type="submit" name="dispatch[theme_editor.save]"><?php echo $_smarty_tpl->__("save");?>
</button>
            </div>
        <?php }?>
    <!--te_presets_list--></div>
<div class="te-content<?php if (!$_smarty_tpl->tpl_vars['props_schema']->value){?> te-content-no-schema<?php }?>">
<div class="te-section">



     <div class="te-wrap te-general cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_general"){?>hidden<?php }?>" id="te_general">

        <div class="te-inner-wrap">

            <div class="te-general-group">

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value&&$_smarty_tpl->tpl_vars['cse_logos']->value['favicon']){?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['logo_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value['favicon']['image'], null, 0);?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(array(), null, 0);?>
                <?php }?>


                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <div class="te-image te-favicon-wrap clearfix">
                    <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.favicon");?>
&nbsp;<i class="icon-help-circle cm-tooltip" title="<?php echo $_smarty_tpl->__("theme_editor.favicon_size");?>
"></i></span><?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0);?>

                    <div class="te-favicon cm-te-logo" data-ca-image-area="favicon" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                </div>

            </div>

            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['general']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="checkbox"){?>
            <div class="te-general-group">
                <div class="te-checkbox clearfix">
                    <label for="elm_toggle_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="hidden" name="preset[data][general][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="0" class="cm-te-value-changer" />
                        <input type="checkbox" name="preset[data][general][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-te-value-changer" id="elm_toggle_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['general'][$_smarty_tpl->tpl_vars['name']->value]){?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</span></label>
                </div>
            </div>            
            <?php }?>

            <?php } ?>
        </div>

        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_general");?>
</button></div>
    <!--te_general--></div>




    <div class="te-wrap te-logos cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_logos"){?>hidden<?php }?>" id="te_logos">

        <div class="te-tabs cm-te-tabs">
            <ul class="te-pills">
                <?php  $_smarty_tpl->tpl_vars["logo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["logo"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cse_logo_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["logo"]->key => $_smarty_tpl->tpl_vars["logo"]->value){
$_smarty_tpl->tpl_vars["logo"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["logo"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value=="favicon"){?>
                    <?php continue 1?>
                <?php }?>                
                <li <?php if ($_smarty_tpl->tpl_vars['type']->value=="theme"){?>class="active"<?php }?>><a data-ca-target-id="elm_logo_section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("theme_editor.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
"><span><?php echo $_smarty_tpl->__("theme_editor.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</span></a></li>
                <?php } ?>
            </ul>

            <?php  $_smarty_tpl->tpl_vars["logo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["logo"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cse_logo_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["logo"]->key => $_smarty_tpl->tpl_vars["logo"]->value){
$_smarty_tpl->tpl_vars["logo"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["logo"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value=="favicon"){?>
                    <?php continue 1?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value&&$_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]){?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image'], null, 0);?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(array(), null, 0);?>
                <?php }?>

                <div class="<?php if ($_smarty_tpl->tpl_vars['type']->value!="theme"){?>hidden<?php }?> cm-te-tab-contents" id="elm_logo_section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                    <input type="text" class="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="attach-images">
                        <div class="upload-box clearfix">
                            <div class="image-wrap pull-left">
                                <div class="te-image">
                                    <div class="te-bg-image cm-te-logo" data-ca-image-area="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;"></div>
                                </div>
                                <div class="logo-alt"><span class="left-add cm-tooltip" title="<?php echo $_smarty_tpl->__("alt_text");?>
"><i class="icon-bubble"></i></span><input type="text" class="cm-image-field" id="alt_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("alt_text");?>
"></div>
                            </div>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"theme_editor:logo_uploader")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="te-logos-upload clearfix">
                                <span class="te-bg-title"><?php echo $_smarty_tpl->__("image");?>
&nbsp;</span>                                                        
                                <?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0);?>

                            </div>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"theme_editor:logo_uploader"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        
    <!--te_logos--></div>

    <div class="te-wrap te-colors cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_colors"){?>hidden<?php }?>" id="te_colors">

        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['colors']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
        <div class="te-colors clearfix">
            <label for="elm_te_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
            <?php $_smarty_tpl->tpl_vars['cp_value'] = new Smarty_variable("#ffffff", null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['colors'][$_smarty_tpl->tpl_vars['name']->value]){?>
                <?php $_smarty_tpl->tpl_vars['cp_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['current_preset']->value['data']['colors'][$_smarty_tpl->tpl_vars['name']->value], null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['name']->value=="color_2"){?>
                <?php $_smarty_tpl->tpl_vars['cp_value'] = new Smarty_variable("#000000", null, 0);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cp_name'=>"preset[data][colors][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>$_smarty_tpl->tpl_vars['cp_value']->value,'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0);?>

        </div>
        <?php } ?>

        

        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_colors");?>
</button></div>

    <!--te_colors--></div>

    <div class="te-wrap te-fonts cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_fonts"){?>hidden<?php }?>" id="te_fonts">
        <div class="te-inner-wrap">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
            <div class="control-group te-font-group">
                <label for="elm_te_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
                
                <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families'][$_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>Arial<?php }?></span><i class="icon-d-arrow"></i>
                    <input type="text" class="hidden cm-te-selectbox-storage" name="preset[data][fonts][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][family]" value="<?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family'], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>Arial,Helvetica,sans-serif<?php }?>">
                    <ul class="te-select-dropdown">
                        <?php  $_smarty_tpl->tpl_vars["family_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["family_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["family"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['fonts']['families']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["family_name"]->key => $_smarty_tpl->tpl_vars["family_name"]->value){
$_smarty_tpl->tpl_vars["family_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["family"]->value = $_smarty_tpl->tpl_vars["family_name"]->key;
?>
                        <li data-ca-select-box-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['family']==$_smarty_tpl->tpl_vars['family']->value){?>class="active"<?php }?> style="font-family: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['family']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['family_name']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php } ?>
                    </ul>
                </div>
                
                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['size']){?>
                <div class="te-select-box te-font-size cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['size'], ENT_QUOTES, 'UTF-8');?>
</span><i class="icon-d-arrow"></i>
                    <input type="text" class="hidden cm-te-selectbox-storage" name="preset[data][fonts][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][size]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['size'], ENT_QUOTES, 'UTF-8');?>
">
                    <ul class="te-select-dropdown">
                        <?php  $_smarty_tpl->tpl_vars["font_size"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["font_size"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['properties']['size']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["font_size"]->key => $_smarty_tpl->tpl_vars["font_size"]->value){
$_smarty_tpl->tpl_vars["font_size"]->_loop = true;
?>
                        <li data-ca-select-box-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['size']==$_smarty_tpl->tpl_vars['font_size']->value){?>class="active"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font_size']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php } ?>
                    </ul>
                </div>
                <?php }?>
        
                <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['style']){?>
                <?php  $_smarty_tpl->tpl_vars["prop"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["prop"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['properties']['style']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["prop"]->key => $_smarty_tpl->tpl_vars["prop"]->value){
$_smarty_tpl->tpl_vars["prop"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["prop"]->key;
?>            
                <div class="te-font-style-wrap">
                    <input class="cm-te-value-changer te-font-style-checkbox" type="checkbox" id="font_style_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="preset[data][fonts][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][style][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['fonts'][$_smarty_tpl->tpl_vars['name']->value]['style'][$_smarty_tpl->tpl_vars['key']->value]){?>checked="checked"<?php }?> /><label for="font_style_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-font-style <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prop']->value['property'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                </div>
                <?php } ?>
                <?php }?>
            </div>
            <?php } ?>
        </div>

    <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_fonts");?>
</button></div>

    <!--te_fonts--></div>

    <div class="te-wrap te-bg cm-te-section <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="te_backgrounds"){?>hidden<?php }?>" id="te_backgrounds">

        <div class="te-inner-wrap">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['props_schema']->value['backgrounds']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value){
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
            <div class="control-group te-bg-group">
                <label for="elm_te_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</label>
            
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['color']){?>
                        <div class="te-color-picker-container te-colors clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.background_color");?>
&nbsp;</span>

                            <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']||$_smarty_tpl->tpl_vars['field']->value['transparent']||$_smarty_tpl->tpl_vars['field']->value['full_width']){?>
                            <a id="sw_backgrounds_adv_color_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination te-advanced-options"><i class="icon-cog"></i></a>
                            <?php }?>
                            
                            <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cp_name'=>"preset[data][backgrounds][".((string)$_smarty_tpl->tpl_vars['name']->value)."][color]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value),'cp_value'=>(($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['color'])===null||$tmp==='' ? "#ffffff" : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0);?>

                        </div>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']||$_smarty_tpl->tpl_vars['field']->value['transparent']||$_smarty_tpl->tpl_vars['field']->value['full_width']){?>
                    <div id="backgrounds_adv_color_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden clearfix">
                            <div class="te-advanced-connector"></div>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['gradient']){?>
                        <div class="te-gradient-color clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.gradient");?>
&nbsp;</span>            
                            <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cp_name'=>"preset[data][backgrounds][".((string)$_smarty_tpl->tpl_vars['name']->value)."][gradient]",'cp_id'=>"storage_elm_te_".((string)$_smarty_tpl->tpl_vars['name']->value)."_gradient",'cp_value'=>(($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['gradient'])===null||$tmp==='' ? "#ffffff" : $tmp),'cp_class'=>"cm-te-value-changer",'cp_storage'=>"theme_editor"), 0);?>

                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['full_width']){?>
                        <div class="te-fullwidth te-checkbox clearfix">
                            <label for="elm_toggle_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][full_width]" class="cm-te-value-changer" id="elm_toggle_full_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['full_width']){?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.full_width");?>
</span></label>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['transparent']){?>
                        <div class="te-transparent te-checkbox clearfix">
                            <label for="elm_toggle_transparent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][transparent]" class="cm-te-value-changer" id="elm_toggle_transparent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['transparent']){?>checked="checked"<?php }?>><span class="te-toggle"><span class="te-toggle-on"><?php echo $_smarty_tpl->__("theme_editor.on");?>
</span><span class="te-toggle-off"><?php echo $_smarty_tpl->__("theme_editor.off");?>
</span><span class="te-toggle-trigger"></span></span><span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.transparent");?>
</span></label>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['image']){?>
                    <div class="te-bg-image-group te-colors clearfix" id="te_uploaded_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">

                        <input type="text" class="hidden cm-te-skip-css" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][image_data]" value="<?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_data']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_data'], ENT_QUOTES, 'UTF-8');?>
<?php }?>">
                        <input type="text" class="hidden cm-te-skip-css" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][image_name]" value="<?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_name'], ENT_QUOTES, 'UTF-8');?>
<?php }?>">

                        <span class="te-bg-title"><?php echo $_smarty_tpl->__("image");?>
&nbsp;<i class="icon-help-circle cm-tooltip" title="<?php echo $_smarty_tpl->__("theme_editor.max_image_size");?>
"></i></span>
                        <a id="sw_backgrounds_adv_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination te-advanced-options"><i class="icon-cog"></i></a>

                        <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_data']){?>
                            <div class="te-fileuploader clearfix">
                                <div class="upload-file-section">
                                    <p class="cm-fu-file">
                                    
                                    <a href="<?php echo htmlspecialchars(fn_url("theme_editor.delete_image_data?image_name=".((string)$_smarty_tpl->tpl_vars['name']->value)."&preset_id=".((string)$_smarty_tpl->tpl_vars['current_preset']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.formajaxpost_theme_editor_form" data-ca-target-id="te_uploaded_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-confirm delete-thumb"><i class="icon-trashcan" title="<?php echo $_smarty_tpl->__("delete");?>
">&nbsp;</i></a>
                                    
                                    <span class="filename-link">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['image_name'], ENT_QUOTES, 'UTF-8');?>
</span></p>

                                </div>
                            </div>

                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"backgrounds[".((string)$_smarty_tpl->tpl_vars['name']->value)."]"), 0);?>

                        <?php }?>
            
                    <!--te_uploaded_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                    <?php }?>
            
                    <div id="backgrounds_adv_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="te-bg-advanced hidden"><?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['position']){?>
                            <div class="te-advanced-connector"></div>
                            <div class="te-bg-position clearfix">
                            <span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.position");?>
&nbsp;</span>
                                <div class="sse-bg-position-main-wrap clearfix">
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_left" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="top left" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="top left"){?>checked="checked"<?php }?> /><label for="top_left"><i class="icon-arrow-up-left"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_center" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="top center" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="top center"){?>checked="checked"<?php }?> /><label for="top_center"><i class="icon-arrow-up"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="top_right" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="top right" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="top right"){?>checked="checked"<?php }?> /><label for="top_right"><i class="icon-arrow-up-right"></i></label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_left" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" if="center_left" value="center left" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="center left"){?>checked="checked"<?php }?> /><label for="center_left"><i class="icon-arrow-left"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_center" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="center center" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="center center"){?>checked="checked"<?php }?> /><label for="center_center"><i class="icon-square"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="center_right" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="center right" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="center right"){?>checked="checked"<?php }?> /><label for="center_right"><i class="icon-arrow-right"></i></label></div>
                                    </div>
                                    <div class="te-bg-position-wrap clearfix">
                                        <div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_left" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="bottom left" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="bottom left"){?>checked="checked"<?php }?> /><label for="bottom_left"><i class="icon-arrow-down-left"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_center" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="bottom center" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="bottom center"){?>checked="checked"<?php }?> /><label for="bottom_center"><i class="icon-arrow-down"></i></label></div><div class="te-bg-position-item"><input class="cm-te-value-changer" type="radio" id="bottom_right" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="bottom right" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['position']=="bottom right"){?>checked="checked"<?php }?> /><label for="bottom_right"><i class="icon-arrow-down-right"></i></label></div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['repeat']){?>
                        <div>
                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo $_smarty_tpl->__("theme_editor.repeat");?>
</span><i class="icon-d-arrow"></i>
                                <input type="text" class="hidden" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][repeat]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat'])===null||$tmp==='' ? "repeat" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="repeat" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="repeat"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.repeat");?>
</li>
                                    <li data-ca-select-box-value="repeat-x" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="repeat-x"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.repeat_x");?>
</li>
                                    <li data-ca-select-box-value="repeat-y" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="repeat-y"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.repeat_y");?>
</li>
                                    <li data-ca-select-box-value="no-repeat" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['repeat']=="no-repeat"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.no_repeat");?>
</li>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['properties']['attachment']){?>
                        <div>
                            <div class="te-select-box cm-te-selectbox cm-te-value-changer" tabindex="0"><span><?php echo $_smarty_tpl->__("theme_editor.scroll");?>
</span><i class="icon-d-arrow"></i>
                                <input type="text" class="hidden" name="preset[data][backgrounds][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][attachment]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['attachment'])===null||$tmp==='' ? "scroll" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                <ul class="te-select-dropdown">
                                    <li data-ca-select-box-value="scroll" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['attachment']=="scroll"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.scroll");?>
</li>
                                    <li data-ca-select-box-value="fixed" <?php if ($_smarty_tpl->tpl_vars['current_preset']->value['data']['backgrounds'][$_smarty_tpl->tpl_vars['name']->value]['attachment']=="fixed"){?>class="active"<?php }?>><?php echo $_smarty_tpl->__("theme_editor.fixed");?>
</li>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                    </div>
            
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="te-reset-wrap"><button class="te-btn cm-te-reset"><?php echo $_smarty_tpl->__("theme_editor.reset_backgrounds");?>
</button></div>

    <!--te_backgrounds--></div>

</div>
</div>


</div>

</form>
<!--theme_editor--></div><?php }?><?php }} ?>