<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 03:41:03
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/news_and_emails/hooks/profiles/account_update.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:644777670522d0b0f4977e7-29867590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0475da84fdabbba838d632d44825d4f6ad03734f' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/news_and_emails/hooks/profiles/account_update.pre.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '644777670522d0b0f4977e7-29867590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_mailing_lists' => 0,
    'list' => 0,
    'user_mailing_lists' => 0,
    'show_newsletters_content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d0b0f558cb1_30288075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d0b0f558cb1_30288075')) {function content_522d0b0f558cb1_30288075($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_signup_for_subscriptions','mailing_lists','text_signup_for_subscriptions','mailing_lists'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['page_mailing_lists']->value){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mailing_lists", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(false, null, 0);?>

        <p><?php echo $_smarty_tpl->__("text_signup_for_subscriptions");?>
</p>

        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_registration']){?>
                <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(true, null, 0);?>
            <?php }?>

            <div class="select-field <?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_registration']){?>hidden<?php }?>">
                <input id="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]){?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
            </div>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("mailing_lists")), 0);?>


        <?php echo Smarty::$_smarty_vars['capture']['mailing_lists'];?>
    
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/news_and_emails/hooks/profiles/account_update.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/news_and_emails/hooks/profiles/account_update.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page_mailing_lists']->value){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mailing_lists", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(false, null, 0);?>

        <p><?php echo $_smarty_tpl->__("text_signup_for_subscriptions");?>
</p>

        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['list']->value['show_on_registration']){?>
                <?php $_smarty_tpl->tpl_vars["show_newsletters_content"] = new Smarty_variable(true, null, 0);?>
            <?php }?>

            <div class="select-field <?php if (!$_smarty_tpl->tpl_vars['list']->value['show_on_registration']){?>hidden<?php }?>">
                <input id="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="mailing_lists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['user_mailing_lists']->value[$_smarty_tpl->tpl_vars['list']->value['list_id']]){?>checked="checked"<?php }?> class="checkbox" /><label for="profile_mailing_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</label>
            </div>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['show_newsletters_content']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__("mailing_lists")), 0);?>


        <?php echo Smarty::$_smarty_vars['capture']['mailing_lists'];?>
    
    <?php }?>
<?php }?>
<?php }?><?php }} ?>