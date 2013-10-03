<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:39:18
         compiled from "/var/www/4profit4good/design/backend/templates/views/settings_wizard/components/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:391109336522ce0761fbad5-61599133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd863eb13f81291871712195fc898ca5cd66facb9' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/views/settings_wizard/components/password.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '391109336522ce0761fbad5-61599133',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce07620ca52_53419774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce07620ca52_53419774')) {function content_522ce07620ca52_53419774($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('new_administrator_password','show','generate'));
?>
<div class="control-group setting-wide">
    <label for="password_field" class="control-label"><?php echo $_smarty_tpl->__("new_administrator_password");?>
:</label>
    <div class="controls">
        <input type="password" value="" id="password_field" name="new_password"><br>
        <a class="cm-show-password a-pseudo" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("show");?>
</a> <a class="cm-generate-password a-pseudo" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("generate");?>
</a>
    </div>
</div>


<script type="text/javascript">
//<![CDATA[
    (function($, _){
        $('.cm-show-password').on('click', function(e){
            $('#' + $(this).data('caResultId')).prop('type', 'text');
        });

        $('.cm-generate-password').on('click', function(e){
            $('#' + $(this).data('caResultId')).val(Math.random().toString(36).slice(-10)).prop('type', 'text');
        });
    })(Tygh.$, Tygh);
//]]>
</script>
<?php }} ?>