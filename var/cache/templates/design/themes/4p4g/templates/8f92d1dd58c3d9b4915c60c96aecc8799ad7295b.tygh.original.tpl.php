<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 02:46:04
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/addons/banners/blocks/original.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2065210211522cfe2c222311-83336826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f92d1dd58c3d9b4915c60c96aecc8799ad7295b' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/addons/banners/blocks/original.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2065210211522cfe2c222311-83336826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'banner' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522cfe2c2ecd42_17495820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522cfe2c2ecd42_17495820')) {function content_522cfe2c2ecd42_17495820($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value){
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G"&&$_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']){?>
    <div class="ad-container center">
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!=''){?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B"){?>target="_blank"<?php }?>><?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair']), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!=''){?></a><?php }?>
    </div>
    <?php }else{ ?>
        <div class="wysiwyg-content">
            <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

        </div>
    <?php }?>
<?php } ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/banners/blocks/original.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/original.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value){
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G"&&$_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']){?>
    <div class="ad-container center">
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!=''){?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B"){?>target="_blank"<?php }?>><?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair']), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!=''){?></a><?php }?>
    </div>
    <?php }else{ ?>
        <div class="wysiwyg-content">
            <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

        </div>
    <?php }?>
<?php } ?><?php }?><?php }} ?>