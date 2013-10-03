<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 03:41:03
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/blocks/static_templates/profile_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190789472522d0b0f5e7155-78640218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65e7c32e78e8f496aa2152aa428dafe6e5f90136' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/blocks/static_templates/profile_info.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190789472522d0b0f5e7155-78640218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d0b0f641be3_75614545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d0b0f641be3_75614545')) {function content_522d0b0f641be3_75614545($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_profile_benefits','text_profile_details','text_profile_benefits','text_profile_details'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='profiles'){?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='add'){?>
    <div class="account-benefits">
        <?php echo $_smarty_tpl->__("text_profile_benefits");?>

    </div>

    <?php }elseif($_smarty_tpl->tpl_vars['runtime']->value['mode']=='update'){?>
        <div class="account-detail ">
            <?php echo $_smarty_tpl->__("text_profile_details");?>

        </div>
    <?php }?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/static_templates/profile_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/profile_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='profiles'){?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='add'){?>
    <div class="account-benefits">
        <?php echo $_smarty_tpl->__("text_profile_benefits");?>

    </div>

    <?php }elseif($_smarty_tpl->tpl_vars['runtime']->value['mode']=='update'){?>
        <div class="account-detail ">
            <?php echo $_smarty_tpl->__("text_profile_details");?>

        </div>
    <?php }?>
<?php }?><?php }?><?php }} ?>