<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:15:09
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/discussion/hooks/events/fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:743730892522d595d03eee5-50641868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb73804df6c7535f76a60529100c8d63aa0e3c7' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/discussion/hooks/events/fields.post.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '743730892522d595d03eee5-50641868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'event_data' => 0,
    'discussion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d595d0adbf5_26042757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d595d0adbf5_26042757')) {function content_522d595d0adbf5_26042757($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('discussion_title_giftreg','disabled','enabled','discussion_title_giftreg','disabled','enabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="control-group">
    <label for="elm_dsc" class="cm-required"><?php echo $_smarty_tpl->__("discussion_title_giftreg");?>
:</label>
    <?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['event_data']->value['event_id'],"G"), null, 0);?>
    <select id="elm_dsc" name="event_data[discussion_type]">
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="D"){?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"){?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("enabled");?>
</option>
    </select>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/discussion/hooks/events/fields.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/events/fields.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><div class="control-group">
    <label for="elm_dsc" class="cm-required"><?php echo $_smarty_tpl->__("discussion_title_giftreg");?>
:</label>
    <?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['event_data']->value['event_id'],"G"), null, 0);?>
    <select id="elm_dsc" name="event_data[discussion_type]">
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="D"){?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"){?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("enabled");?>
</option>
    </select>
</div><?php }?><?php }} ?>