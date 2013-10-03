<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:06:35
         compiled from "/var/www/4profit4good/design/backend/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1716742101522ce6db0a04e6-02418332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5910ccc7fbaa198353893a1b55b32826151ea32' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/block_manager/render/container.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1716742101522ce6db0a04e6-02418332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'dynamic_object' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce6db12a005_76967364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce6db12a005_76967364')) {function content_522ce6db12a005_76967364($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('top_container_not_used','header_container_not_used','footer_container_not_used','insert_grid','insert_grid','container_options','enable_or_disable_container'));
?>
<div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
" class="container container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']!='CONTENT'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value){?>container-lock<?php }?> <?php if ($_smarty_tpl->tpl_vars['container']->value['status']=="D"){?>container-off<?php }?>" <?php if ($_smarty_tpl->tpl_vars['container']->value['status']!="A"){?>data-ca-status="disabled"<?php }else{ ?>data-ca-status="active"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']=='TOP_PANEL'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value){?><p><?php echo $_smarty_tpl->__("top_container_not_used");?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']=='HEADER'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value){?><p><?php echo $_smarty_tpl->__("header_container_not_used");?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']!=1&&$_smarty_tpl->tpl_vars['container']->value['position']=='FOOTER'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value){?><p><?php echo $_smarty_tpl->__("footer_container_not_used");?>
</p><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['container']->value['default']==1||$_smarty_tpl->tpl_vars['container']->value['position']=='CONTENT'||$_smarty_tpl->tpl_vars['dynamic_object']->value){?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>
    
    <div class="clearfix"></div>
    <div class="grid-control-menu bm-control-menu">
        <?php if ($_smarty_tpl->tpl_vars['container']->value['default']==1||$_smarty_tpl->tpl_vars['container']->value['position']=='CONTENT'&&!$_smarty_tpl->tpl_vars['dynamic_object']->value){?>
            <div class="grid-control-menu-actions">
                <div class="btn-group action">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='icon-plus cm-tooltip' title="<?php echo $_smarty_tpl->__("insert_grid");?>
"></span></a>
                    <ul class="dropdown-menu droptop">
                        <li><a href="#" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                    </ul>
                </div>
                <div class="cm-tooltip cm-action exicon-cog bm-action-properties action" title="<?php echo $_smarty_tpl->__("container_options");?>
"></div>
                <div class="cm-action bm-action-switch cm-tooltip exicon-off action" title="<?php echo $_smarty_tpl->__("enable_or_disable_container");?>
"></div>
            </div>
        <?php }?>

        <h4 class="grid-control-title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['container']->value['position']);?>
</h4>
    </div>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<hr /><?php }} ?>