<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 20:24:38
         compiled from "/var/www/4profit4good/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5370697952333c466cce12-85906596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd258af8514f714054e56316bcd0f8510147b3f78' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_search_form.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5370697952333c466cce12-85906596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52333c46733031_47307481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52333c46733031_47307481')) {function content_52333c46733031_47307481($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','gift_cert_from','gift_cert_to','email','gift_certificate_status','gift_cert_code'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>

<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="gift_certificates_search_form" method="get">
    
    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <div class="sidebar-field">
            <label for="sender"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
            <input type="text" name="sender" id="sender" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sender'], ENT_QUOTES, 'UTF-8');?>
" size="20">
        </div>
    
        <div class="sidebar-field">
            <label for="recipient"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
            <input type="text" name="recipient" id="recipient" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
" size="20">
        </div>
    
       <div class="sidebar-field">
            <label for="email"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="25">
       </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
        <div class="group form-horizontal">
            <div class="control-group">
                <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"gift_certificates_search_form"), 0);?>

            </div>
        </div>
        
        <div class="group">
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("gift_certificate_status");?>
:</label>
                <div class="controls checkbox-list">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'status_type'=>@constant('STATUSES_GIFT_CERTIFICATE')), 0);?>

                </div>
            </div>
        </div>
        
        <div class="group form-horizontal">
            <div class="control-group">
                <label  class="control-label" for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
                <div class="controls">
                    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30">
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>"gift_certificates.manage",'view_type'=>"events"), 0);?>


    </form>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>
<?php }} ?>