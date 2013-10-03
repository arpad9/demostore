<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 15:34:48
         compiled from "/var/lib/jenkins/jobs/cscart-build-staging/workspace/design/backend/templates/views/exim/components/export_csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57749682251cad1d8c12be1-73593465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7834727b46411f79fb4d3f7c4cbc284c435e4c' => 
    array (
      0 => '/var/lib/jenkins/jobs/cscart-build-staging/workspace/design/backend/templates/views/exim/components/export_csv.tpl',
      1 => 1362648202,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57749682251cad1d8c12be1-73593465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'delimiter' => 0,
    'eol' => 0,
    'export_data' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cad1d8cd86d3_39708573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cad1d8cd86d3_39708573')) {function content_51cad1d8cd86d3_39708573($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fields']->value){?><?php echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><?php echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');?>
<?php } ?><?php }} ?>