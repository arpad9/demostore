<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:38:57
         compiled from "/var/www/4profit4good/design/backend/templates/addons/twigmo/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319675052522ce061c52fd2-50654621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '178954333eeed65accb391a8b8a6233e658970c9' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/twigmo/hooks/index/scripts.post.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '319675052522ce061c52fd2-50654621',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce061c5b215_64873655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce061c5b215_64873655')) {function content_522ce061c5b215_64873655($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('checkout_terms_n_conditions_alert'));
?>
<script>
    //<![CDATA[
    
    Tygh.$(function (_, $) {
        _.tr("checkout_terms_n_conditions_alert", "<?php echo $_smarty_tpl->__("checkout_terms_n_conditions_alert");?>
");
        
        $.ceFormValidator('registerValidator', {
            class: 'cm-check-agreement',
            message: _.tr("checkout_terms_n_conditions_alert"),
            func: function(id) {
                return $('#' + id).prop('checked');
            }
        });
        
        function fn_tw_copy_email() {
            var tw_email = $('#elm_tw_email').val();
            $('#elm_reset_tw_password').attr(
                'href', 
                'http://twigmo.com/svc/reset_password.php?email=' + tw_email
            );
        }
        
        
        function fn_tw_check_agreement() {
            if (!$('#id_accept_terms').attr('checked')) {
                return false;
            }
            return true;
        }
        
    }(Tygh, Tygh.$));
    
    //]]>
</script><?php }} ?>