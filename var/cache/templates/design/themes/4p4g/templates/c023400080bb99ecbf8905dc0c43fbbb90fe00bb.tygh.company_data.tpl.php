<?php /* Smarty version Smarty-3.1.13, created on 2013-09-10 00:45:52
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/common/company_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:362255964522e3380646815-64563812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c023400080bb99ecbf8905dc0c43fbbb90fe00bb' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/common/company_data.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '362255964522e3380646815-64563812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'obj_id' => 0,
    'company' => 0,
    'show_name' => 0,
    'hide_links' => 0,
    'show_trunc_name' => 0,
    'no_capture' => 0,
    'capture_name' => 0,
    'show_descr' => 0,
    'show_logo' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522e33808495d2_82527613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e33808495d2_82527613')) {function content_522e33808495d2_82527613($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('more','more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company']->value['company_id'] : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['show_name']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?><strong><?php }else{ ?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php }?><?php echo $_smarty_tpl->tpl_vars['company']->value['company'];?>
<?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?></strong><?php }else{ ?></a><?php }?>
    <?php }elseif($_smarty_tpl->tpl_vars['show_trunc_name']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?><strong><?php }else{ ?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],45,"...",true);?>
<?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?></strong><?php }else{ ?></a><?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:data_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:data_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:data_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['show_descr']->value){?>
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company_description']),1024);?>
<?php if (!$_smarty_tpl->tpl_vars['hide_links']->value&&strlen($_smarty_tpl->tpl_vars['company']->value['company_description'])>1024){?> <a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more");?>
</a><?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['show_logo']->value){?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value){?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
        <span>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('images'=>$_smarty_tpl->tpl_vars['company']->value['logos']['theme']['image'],'image_width'=>"120"), 0);?>

        </span>            
        <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value){?></a><?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:company_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:company_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:company_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="common/company_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/company_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company']->value['company_id'] : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['show_name']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?><strong><?php }else{ ?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php }?><?php echo $_smarty_tpl->tpl_vars['company']->value['company'];?>
<?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?></strong><?php }else{ ?></a><?php }?>
    <?php }elseif($_smarty_tpl->tpl_vars['show_trunc_name']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?><strong><?php }else{ ?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],45,"...",true);?>
<?php if ($_smarty_tpl->tpl_vars['hide_links']->value){?></strong><?php }else{ ?></a><?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:data_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:data_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:data_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['show_descr']->value){?>
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company']->value['company_description']),1024);?>
<?php if (!$_smarty_tpl->tpl_vars['hide_links']->value&&strlen($_smarty_tpl->tpl_vars['company']->value['company_description'])>1024){?> <a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more");?>
</a><?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("company_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['show_logo']->value){?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value){?><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
        <span>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('images'=>$_smarty_tpl->tpl_vars['company']->value['logos']['theme']['image'],'image_width'=>"120"), 0);?>

        </span>            
        <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value){?></a><?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['no_capture']->value){?>
    <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:company_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:company_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:company_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>