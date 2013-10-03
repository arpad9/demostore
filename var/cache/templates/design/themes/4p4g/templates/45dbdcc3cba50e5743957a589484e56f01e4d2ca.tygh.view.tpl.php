<?php /* Smarty version Smarty-3.1.13, created on 2013-09-10 00:45:52
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/views/companies/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1052278153522e338043f6f7-23611590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45dbdcc3cba50e5743957a589484e56f01e4d2ca' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/views/companies/view.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1052278153522e338043f6f7-23611590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_data' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'capture_name' => 0,
    'selected_section' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522e3380620f30_70950848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e3380620f30_70950848')) {function content_522e3380620f30_70950848($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_vendor_products','items','contact_information','email','phone','fax','website','shipping_address','view_vendor_products','items','contact_information','email','phone','fax','website','shipping_address'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['company_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('company'=>$_smarty_tpl->tpl_vars['company_data']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'hide_links'=>true), 0);?>


<div class="company-page clearfix">

    <div id="block_company_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
        <h1 class="mainbox-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</span></h1>
        <div class="company-page-top-links clearfix">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:top_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:top_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div id="company_products">
                <a href="<?php echo htmlspecialchars(fn_url("products.search?company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])."&search_performed=Y"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['total_products'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
)</a>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:top_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="company-page-info">
            <div class="company-logo">
                <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

            </div>
            <div class="info-list">
                <h5><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['email']){?>
                <div id="company_phone">
                    <label><?php echo $_smarty_tpl->__("email");?>
:</label>
                    <span><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['phone']){?>
                <div id="company_phone">
                    <label><?php echo $_smarty_tpl->__("phone");?>
:</label>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['fax']){?>
                <div id="company_phone">
                    <label><?php echo $_smarty_tpl->__("fax");?>
:</label>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['url']){?>
                <div id="company_website">
                    <label><?php echo $_smarty_tpl->__("website");?>
:</label>
                    <span><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                </div>
                <?php }?>
            </div>
            <div class="info-list">
                <h5><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>
                <div>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars(fn_get_state_name($_smarty_tpl->tpl_vars['company_data']->value['state'],$_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div>
                    <span><?php echo htmlspecialchars(fn_get_country_name($_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            </div>
        </div>

    </div>

</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div id="content_description" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="description"){?>hidden<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_description']){?>
            <div class="wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_description'];?>

            </div>
        <?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="views/companies/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['company_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('company'=>$_smarty_tpl->tpl_vars['company_data']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'hide_links'=>true), 0);?>


<div class="company-page clearfix">

    <div id="block_company_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
        <h1 class="mainbox-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</span></h1>
        <div class="company-page-top-links clearfix">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:top_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:top_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div id="company_products">
                <a href="<?php echo htmlspecialchars(fn_url("products.search?company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])."&search_performed=Y"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['total_products'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
)</a>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:top_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="company-page-info">
            <div class="company-logo">
                <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

            </div>
            <div class="info-list">
                <h5><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['email']){?>
                <div id="company_phone">
                    <label><?php echo $_smarty_tpl->__("email");?>
:</label>
                    <span><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['phone']){?>
                <div id="company_phone">
                    <label><?php echo $_smarty_tpl->__("phone");?>
:</label>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['fax']){?>
                <div id="company_phone">
                    <label><?php echo $_smarty_tpl->__("fax");?>
:</label>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['url']){?>
                <div id="company_website">
                    <label><?php echo $_smarty_tpl->__("website");?>
:</label>
                    <span><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                </div>
                <?php }?>
            </div>
            <div class="info-list">
                <h5><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>
                <div>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars(fn_get_state_name($_smarty_tpl->tpl_vars['company_data']->value['state'],$_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div>
                    <span><?php echo htmlspecialchars(fn_get_country_name($_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            </div>
        </div>

    </div>

</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div id="content_description" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="description"){?>hidden<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_description']){?>
            <div class="wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_description'];?>

            </div>
        <?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>