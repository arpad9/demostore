<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 06:33:03
         compiled from "/var/www/4profit4good/design/themes/basic/templates/blocks/menu/text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61287321522d335fe8a6f1-76904484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2cdf5f72bc6cf684ddb439556d190f6fb5bf8a9' => 
    array (
      0 => '/var/www/4profit4good/design/themes/basic/templates/blocks/menu/text_links.tpl',
      1 => 1378672733,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '61287321522d335fe8a6f1-76904484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'inline' => 0,
    'menu' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d335ff34b25_48621009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d335ff34b25_48621009')) {function content_522d335ff34b25_48621009($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line']=='Y'){?>
    <?php $_smarty_tpl->tpl_vars["inline"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
    <ul class="text-links <?php if ($_smarty_tpl->tpl_vars['inline']->value){?>text-links-inline<?php }?>">
        <?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value){
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
            <li class="level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['menu']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['menu']->value['active']){?> cm-active<?php }?>">
                <a <?php if ($_smarty_tpl->tpl_vars['menu']->value['href']){?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a> 
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']){?>
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems']), 0);?>

                <?php }?>
            </li>
        <?php } ?>
    </ul>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/menu/text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line']=='Y'){?>
    <?php $_smarty_tpl->tpl_vars["inline"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
    <ul class="text-links <?php if ($_smarty_tpl->tpl_vars['inline']->value){?>text-links-inline<?php }?>">
        <?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value){
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
            <li class="level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['menu']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['menu']->value['active']){?> cm-active<?php }?>">
                <a <?php if ($_smarty_tpl->tpl_vars['menu']->value['href']){?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a> 
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']){?>
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems']), 0);?>

                <?php }?>
            </li>
        <?php } ?>
    </ul>
<?php }?><?php }?><?php }} ?>