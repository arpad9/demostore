<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 11:02:27
         compiled from "/var/www/4profit4good/design/backend/templates/exception.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195020635252371d8343fa98-68149721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '492b9c73581e74c8749e6c34e0cc74ac14c8d1fa' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/exception.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195020635252371d8343fa98-68149721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'exception_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52371d834bab85_37143204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52371d834bab85_37143204')) {function content_52371d834bab85_37143204($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('administration_panel','access_denied','page_not_found','access_denied_text','page_not_found_text','go_back','go_to_the_admin_homepage'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']){?>
    <span class="right"><span>&nbsp;</span></span>

    <h1 class="clear exception-header">
        <span><?php echo $_smarty_tpl->__("administration_panel");?>
</span>
    </h1>
<?php }?>

<div class="exception-body login-content">

<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['exception_status']->value, ENT_QUOTES, 'UTF-8');?>
</h2>

<h3>
    <?php if ($_smarty_tpl->tpl_vars['exception_status']->value=="403"){?>
        <?php echo $_smarty_tpl->__("access_denied");?>

    <?php }elseif($_smarty_tpl->tpl_vars['exception_status']->value=="404"){?>
        <?php echo $_smarty_tpl->__("page_not_found");?>

    <?php }?>
</h3>

<div class="exception-content">
    <?php if ($_smarty_tpl->tpl_vars['exception_status']->value=="403"){?>
        <h4><?php echo $_smarty_tpl->__("access_denied_text");?>
</h4>
    <?php }elseif($_smarty_tpl->tpl_vars['exception_status']->value=="404"){?>
        <h4><?php echo $_smarty_tpl->__("page_not_found_text");?>
</h4>
    <?php }?>
    
    <ul class="exception-menu">
        <li id="go_back"><a class="cm-back-link"><?php echo $_smarty_tpl->__("go_back");?>
</a></li>
        <li><a href="<?php echo htmlspecialchars(fn_url(fn_get_index_script($_smarty_tpl->tpl_vars['auth']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("go_to_the_admin_homepage");?>
</a></li>
    </ul>

    <script type="text/javascript">
    //<![CDATA[
    
    Tygh.$(document).ready(function() {
        var $ = Tygh.$;
        $.each($.browser, function(i, val) {
            if ((i == 'opera') && (val == true)) {
                if (history.length == 0) {
                    $('#go_back').hide();
                }
            } else {
                if (history.length == 1) {
                    $('#go_back').hide();
                }
            }
        });
    });
    
    //]]>
    </script>
</div>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['mainbox']), 0);?>

<?php }} ?>