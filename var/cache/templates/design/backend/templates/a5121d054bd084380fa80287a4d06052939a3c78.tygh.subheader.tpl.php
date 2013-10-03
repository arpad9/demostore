<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:43:30
         compiled from "/var/www/4profit4good/design/backend/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1970829120522ce172d81107-10402345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5121d054bd084380fa80287a4d06052939a3c78' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/common/subheader.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1970829120522ce172d81107-10402345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce172da4304_07755492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce172da4304_07755492')) {function content_522ce172da4304_07755492($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value){?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value){?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value){?><span class="exicon-collapse"></span><?php }?>
</h4><?php }} ?>