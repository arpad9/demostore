<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:04:17
         compiled from "/var/www/4profit4good/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:455772787522ce651284274-28390516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf689f50e18372cf42d0cc1010a0955d15c17993' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/common/previewer.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '455772787522ce651284274-28390516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce65128b343_48379525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce65128b343_48379525')) {function content_522ce65128b343_48379525($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>