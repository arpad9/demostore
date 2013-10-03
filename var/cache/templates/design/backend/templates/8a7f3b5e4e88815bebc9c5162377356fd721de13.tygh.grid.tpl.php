<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:06:34
         compiled from "/var/www/4profit4good/design/backend/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2059297702522ce6dad59bd0-58501772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7f3b5e4e88815bebc9c5162377356fd721de13' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/block_manager/render/grid.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2059297702522ce6dad59bd0-58501772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid' => 0,
    'default_class' => 0,
    'content' => 0,
    'container' => 0,
    'dynamic_object' => 0,
    'show_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce6dae07094_19535242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce6dae07094_19535242')) {function content_522ce6dae07094_19535242($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_grid_block','insert_grid','insert_block','grid_options','enable_or_disable_grid','delete_grid','grid','add_grid_block','insert_grid','insert_block','grid_options','grid_options','on_off'));
?>
<div id="grid_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['default_class']->value)===null||$tmp==='' ? "grid" : $tmp), ENT_QUOTES, 'UTF-8');?>
 grid_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']){?> prefix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']){?> alpha<?php }?><?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']){?> omega<?php }?><?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']=="RIGHT"){?> bm-right-align<?php }elseif($_smarty_tpl->tpl_vars['grid']->value['content_align']=="LEFT"){?> bm-left-align<?php }else{ ?> bm-full-width<?php }?> <?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="D"){?>grid-off<?php }?>" <?php if ($_smarty_tpl->tpl_vars['grid']->value['status']!="A"){?>data-ca-status="disabled"<?php }else{ ?>data-ca-status="active"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <div class="bm-full-menu grid-control-menu bm-control-menu <?php if ($_smarty_tpl->tpl_vars['grid']->value['width']<=2){?>hidden<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['container']->value['default']==1||$_smarty_tpl->tpl_vars['container']->value['position']=='CONTENT'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value||$_smarty_tpl->tpl_vars['show_menu']->value){?>
                
                <div class="grid-control-menu-actions">
                    <div class="btn-group action">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='icon-plus cm-tooltip' title="<?php echo $_smarty_tpl->__("add_grid_block");?>
"></span></a>
                        <ul class="dropdown-menu droptop">
                            <li><a href="" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                            <li><a href="" class="cm-action bm-action-add-block"><?php echo $_smarty_tpl->__("insert_block");?>
</a></li>
                        </ul>
                    </div>
                    <div class="cm-action bm-action-properties cm-tooltip exicon-cog action" title="<?php echo $_smarty_tpl->__("grid_options");?>
"></div>
                    <div class="cm-action bm-action-switch cm-tooltip exicon-off action" title="<?php echo $_smarty_tpl->__("enable_or_disable_grid");?>
"></div>
                    <div class="cm-action bm-action-delete cm-tooltip pull-right exicon-trash extra action" title="<?php echo $_smarty_tpl->__("delete_grid");?>
"></div>
                </div>
            <?php }?>
            <h4 class="grid-control-title <?php if ($_smarty_tpl->tpl_vars['grid']->value['width']<=2){?>hidden<?php }?>"><?php echo $_smarty_tpl->__("grid");?>
&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['grid']->value['width'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
</h4>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['container']->value['default']==1||$_smarty_tpl->tpl_vars['container']->value['position']=='CONTENT'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value||$_smarty_tpl->tpl_vars['show_menu']->value){?>
        <div class="bm-compact-menu <?php if ($_smarty_tpl->tpl_vars['grid']->value['width']>2){?>hidden<?php }?> grid-control-menu bm-control-menu">
            <div class="action-showmenu">
                <div class="btn-group action">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='icon-align-justify cm-tooltip' title="<?php echo $_smarty_tpl->__("add_grid_block");?>
"></span></a>
                        <ul class="dropdown-menu droptop">
                            <li><a class="cm-action bm-action-add-grid hand"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                            <li><a class="cm-action bm-action-add-block hand"><?php echo $_smarty_tpl->__("insert_block");?>
</a></li>
                            <li><a class="cm-action bm-action-properties hand"><?php echo $_smarty_tpl->__("grid_options");?>
</a></li>
                            <li><a class="cm-action bm-action-properties hand"><?php echo $_smarty_tpl->__("grid_options");?>
</a></li>
                            <li><a class="cm-action bm-action-switch hand"><?php echo $_smarty_tpl->__("on_off");?>
</a></li>
                        </ul>
                </div>

            </div>
        </div>
        <?php }?>
<!--grid_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['clear']){?>
    <div class="clearfix"></div>
<?php }?>
<?php }} ?>