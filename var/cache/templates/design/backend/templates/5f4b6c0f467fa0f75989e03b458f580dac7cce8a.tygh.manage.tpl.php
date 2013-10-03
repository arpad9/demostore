<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:06:34
         compiled from "/var/www/4profit4good/design/backend/templates/views/block_manager/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177119739522ce6daba48b5-67910778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f4b6c0f467fa0f75989e03b458f580dac7cce8a' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/block_manager/manage.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '177119739522ce6daba48b5-67910778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location' => 0,
    'dynamic_object' => 0,
    'dynamic_object_scheme' => 0,
    'layout_data' => 0,
    'navigation' => 0,
    'key' => 0,
    'id_suffix' => 0,
    'tab' => 0,
    'layouts' => 0,
    'config' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce6dad50239_90696296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce6dad50239_90696296')) {function content_522ce6dad50239_90696296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_style')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_render_location')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.render_location.php';
if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('new_layout','add_layout','block_manager','manage_blocks','export_locations','export_locations','import_locations','import_locations','editing_layout','edit_layout','editing_location','add_location','new_location','switch_layout','editing_layout'));
?>

<?php $_smarty_tpl->tpl_vars["m_url"] = new Smarty_variable(rawurlencode($_REQUEST['manage_url']), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/block_manager.js"),$_smarty_tpl);?>


<script type="text/javascript">
    var selected_location = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['location']->value['location_id'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
';

    var dynamic_object_id = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
';
    var dynamic_object_type = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
';

    var BlockManager = new BlockManager_Class();


    if (dynamic_object_id > 0) {
        var items = null;
    } else {
        var items = '.block';
    }

    (function(_, $) {
        $(document).ready(function() {
            $('#content_location_' + selected_location).appear(function(){
                BlockManager.init('.grid', {
                    // UI settings
                    connectWith: '.grid',
                    items: items,
                    revert: true,
                    placeholder: 'ui-hover-block',
                    opacity: 0.5,
                    
                    // BlockManager_Class settings
                    container_class: 'container',
                    grid_class: 'grid',
                    block_class: 'block',
                    hover_element_class: 'hover-element'
                });
            });
        });
    }(Tygh, Tygh.$));

</script>

<?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value['object_id']>0){?>
    <?php echo smarty_function_style(array('src'=>"block_manager_in_tab.css"),$_smarty_tpl);?>

<?php }?>
<?php echo smarty_function_style(array('src'=>"lib/960/960.css"),$_smarty_tpl);?>


<div id="block_window" class="grid-block hidden"></div>
<div id="block_manager_menu" class="grid-menu hidden"></div>
<div id="block_manager_prop" class="grid-prop hidden"></div>

<?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/render/grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('default_class'=>"base-grid hidden",'show_menu'=>true), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('default_class'=>"base-block hidden",'block_data'=>true), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <div id="content_location_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_render_location(array('dispatch'=>$_smarty_tpl->tpl_vars['location']->value['dispatch'],'location_id'=>$_smarty_tpl->tpl_vars['location']->value['location_id'],'area'=>'A','lang_code'=>$_smarty_tpl->tpl_vars['location']->value['lang_code']),$_smarty_tpl);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('layout_data'=>array()), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"add_new_layout",'text'=>__("new_layout"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'act'=>"general",'icon'=>"icon-plus",'title'=>__("add_layout")), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    
    <?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value['object_id']){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"manage_blocks",'text'=>__("block_manager"),'link_text'=>__("manage_blocks"),'link_class'=>"cm-action bm-action-manage-blocks",'act'=>"link",'content'=>'','general_class'=>"action-btn"), 0);?>

            </li>
            <li class="divider"></li>
            <li>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"export_locations_manager",'text'=>__("export_locations"),'link_text'=>__("export_locations"),'act'=>"link",'href'=>"block_manager.export_locations",'opener_ajax_class'=>"cm-ajax",'link_class'=>"cm-ajax-force",'content'=>'','general_class'=>"action-btn"), 0);?>

            </li>
            <li>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"import_locations_manager",'text'=>__("import_locations"),'link_text'=>__("import_locations"),'act'=>"link",'href'=>"block_manager.import_locations",'opener_ajax_class'=>"cm-ajax",'link_class'=>"cm-ajax-force",'content'=>'','general_class'=>"action-btn"), 0);?>

            </li>
            <li class="divider"></li>
            <li>
                <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/update_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('layout_data'=>$_smarty_tpl->tpl_vars['layout_data']->value), 0);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php ob_start();?><?php echo $_smarty_tpl->__("editing_layout");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"upate_layout",'text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['layout_data']->value['name']),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'act'=>"link",'link_text'=>__("edit_layout")), 0);?>

            </li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="cm-j-tabs tabs tabs-with-conf">
    <ul class="nav nav-tabs">
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
                <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['hidden']=="Y"){?>hidden <?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value=="location_".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])){?> cm-active active extra-tab<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['key']->value=="location_".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])){?>
                        <?php ob_start();?><?php echo $_smarty_tpl->__("editing_location");?>
<?php $_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-ajax-force hand icon-cog",'href'=>"block_manager.update_location?location=".((string)$_smarty_tpl->tpl_vars['location']->value['location_id']),'id'=>"tab_location_".((string)$_smarty_tpl->tpl_vars['location']->value['location_id']),'title'=>$_tmp2.": ".((string)$_smarty_tpl->tpl_vars['tab']->value['title'])));?>

                    <?php }?>
                    <a <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']){?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
        <?php } ?>
        <li class="divider"></li>
        <?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value['object_id']){?>
            <li class="cm-no-highlight">
                <?php ob_start();?><?php echo $_smarty_tpl->__("add_location");?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"add_new_location",'text'=>__("new_location"),'link_text'=>$_tmp3."…",'act'=>"link",'href'=>"block_manager.update_location",'opener_ajax_class'=>"cm-ajax",'link_class'=>"cm-ajax-force",'icon'=>"icon-plus",'content'=>''), 0);?>
</li>
        <?php }?>
    </ul>
</div>
<div class="cm-tabs-content">
    <?php echo Smarty::$_smarty_vars['capture']['tabsbox'];?>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div id="block_manager_sidebar">
        <?php if (count($_smarty_tpl->tpl_vars['layouts']->value)>1){?>
        <div class="sidebar-row layouts">
            <h6><?php echo $_smarty_tpl->__("switch_layout");?>
</h6>
            <div class="clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"s_layout="),'items'=>$_smarty_tpl->tpl_vars['layouts']->value,'selected_id'=>$_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'],'key_name'=>"name",'display_icons'=>false), 0);?>

            </div>
        </div>
        <hr>
        <?php }?>
        <div class="sidebar-row">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"layout_manager:sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"layout_manager:sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"layout_manager:sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <!--block_manager_sidebar--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value['object_id']){?>
    <?php echo Smarty::$_smarty_vars['capture']['mainbox'];?>

<?php }else{ ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_layout");?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_tmp4.": ".((string)$_smarty_tpl->tpl_vars['layout_data']->value['name']),'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }?><?php }} ?>