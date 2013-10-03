<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 23:53:20
         compiled from "/var/www/4profit4good/design/themes/4p4g/templates/views/categories/components/categories_tree_simple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:385019992523d1830aef768-92114732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa6340a65a67b846dd07db43310b223880b88d6' => 
    array (
      0 => '/var/www/4profit4good/design/themes/4p4g/templates/views/categories/components/categories_tree_simple.tpl',
      1 => 1378674277,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '385019992523d1830aef768-92114732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'parent_id' => 0,
    'level' => 0,
    'categories_tree' => 0,
    'cur_cat' => 0,
    'random' => 0,
    'header' => 0,
    'display' => 0,
    'show_all' => 0,
    'images_dir' => 0,
    'expand_all' => 0,
    'checkbox_name' => 0,
    'shift' => 0,
    '_shift' => 0,
    'comb_id' => 0,
    'cat_id' => 0,
    'path' => 0,
    'title_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523d1830e0fc85_07783915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523d1830e0fc85_07783915')) {function content_523d1830e0fc85_07783915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('check_uncheck_all','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','categories','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','disabled','check_uncheck_all','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','categories','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value){?>
<div class="hidden" id="cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"level"),$_smarty_tpl);?>

<?php }?>
<?php  $_smarty_tpl->tpl_vars['cur_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cur_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cur_cat']->key => $_smarty_tpl->tpl_vars['cur_cat']->value){
$_smarty_tpl->tpl_vars['cur_cat']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["cat_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("cat_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["title_id"] = new Smarty_variable("category_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['company_categories']){?>
    <?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("comp_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['company_id'])."_".((string)$_smarty_tpl->tpl_vars['random']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["title_id"] = new Smarty_variable("c_company_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['company_id']), null, 0);?>
<?php }?>

<table class="table categories-picker table-width">
<?php if ($_smarty_tpl->tpl_vars['header']->value&&!$_smarty_tpl->tpl_vars['parent_id']->value){?>
<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_variable('', null, 0);?>
<tr>
    <th class="center" style="width: 20px;">
    <?php if ($_smarty_tpl->tpl_vars['display']->value!="radio"){?>
        <input type="checkbox" name="check_all" value="Y" title="<?php echo $_smarty_tpl->__("check_uncheck_all");?>
" class="checkbox cm-check-items" />
    <?php }?>
    </th>
    <th style="width: 97%">
        <?php if ($_smarty_tpl->tpl_vars['show_all']->value){?>
        <div class="float-left">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/plus_minus.gif" width="13" height="12" id="on_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations <?php if ($_smarty_tpl->tpl_vars['expand_all']->value){?>hidden<?php }?>"  />
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/minus_plus.gif" width="13" height="12" id="off_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value){?>hidden<?php }?>" />
        </div>
        <?php }?>
        &nbsp;<?php echo $_smarty_tpl->__("categories");?>

    </th>
</tr>
<?php }?>
<tr <?php if ($_smarty_tpl->tpl_vars['level']->value=="0"){?>class="table-row"<?php }?>>
       <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>

    <td class="center" style="width: 20px;">
        <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio"){?>
        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio cm-item" />
        <?php }else{ ?>
        <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
        <?php }?>
    </td>
    <td style="width: 97%;">
        <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
            <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php }else{ ?>
            <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php }?>
        <table class="table-width">
        <tr>
            <td class="nowrap" style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
                <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
                    <?php if ($_smarty_tpl->tpl_vars['show_all']->value){?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/plus.gif" width="14" height="9" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if (isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])||$_smarty_tpl->tpl_vars['expand_all']->value){?>hidden<?php }?>" />
                    <?php }else{ ?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/plus.gif" width="14" height="9" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if ((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value]))){?>hidden<?php }?>" onclick="if (!Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo htmlspecialchars(fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)" />
                    <?php }?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/minus.gif" width="14" height="9" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if (!isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])&&(!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value)){?>hidden<?php }?>" />
                <?php }else{ ?>
                    <span class="tree-space"></span>
                <?php }?></td>
            <td style="width: 100%;">
                <span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>class="strong"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['status']=="N"){?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?>
            </td>
        </tr>
        </table>
    </td>
</tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
    <div <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value){?>class="hidden"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
        <?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"level"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('categories_tree'=>$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories'],'parent_id'=>false), 0);?>

        <?php echo smarty_function_math(array('equation'=>"x-1",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"level"),$_smarty_tpl);?>

    <?php }?>
    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value){?><!--cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="views/categories/components/categories_tree_simple.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/components/categories_tree_simple.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value){?>
<div class="hidden" id="cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"level"),$_smarty_tpl);?>

<?php }?>
<?php  $_smarty_tpl->tpl_vars['cur_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cur_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cur_cat']->key => $_smarty_tpl->tpl_vars['cur_cat']->value){
$_smarty_tpl->tpl_vars['cur_cat']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["cat_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("cat_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["title_id"] = new Smarty_variable("category_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['company_categories']){?>
    <?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("comp_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['company_id'])."_".((string)$_smarty_tpl->tpl_vars['random']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["title_id"] = new Smarty_variable("c_company_".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['company_id']), null, 0);?>
<?php }?>

<table class="table categories-picker table-width">
<?php if ($_smarty_tpl->tpl_vars['header']->value&&!$_smarty_tpl->tpl_vars['parent_id']->value){?>
<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_variable('', null, 0);?>
<tr>
    <th class="center" style="width: 20px;">
    <?php if ($_smarty_tpl->tpl_vars['display']->value!="radio"){?>
        <input type="checkbox" name="check_all" value="Y" title="<?php echo $_smarty_tpl->__("check_uncheck_all");?>
" class="checkbox cm-check-items" />
    <?php }?>
    </th>
    <th style="width: 97%">
        <?php if ($_smarty_tpl->tpl_vars['show_all']->value){?>
        <div class="float-left">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/plus_minus.gif" width="13" height="12" id="on_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations <?php if ($_smarty_tpl->tpl_vars['expand_all']->value){?>hidden<?php }?>"  />
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/minus_plus.gif" width="13" height="12" id="off_cat" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value){?>hidden<?php }?>" />
        </div>
        <?php }?>
        &nbsp;<?php echo $_smarty_tpl->__("categories");?>

    </th>
</tr>
<?php }?>
<tr <?php if ($_smarty_tpl->tpl_vars['level']->value=="0"){?>class="table-row"<?php }?>>
       <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"shift"),$_smarty_tpl);?>

    <td class="center" style="width: 20px;">
        <?php if ($_smarty_tpl->tpl_vars['display']->value=="radio"){?>
        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio cm-item" />
        <?php }else{ ?>
        <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
        <?php }?>
    </td>
    <td style="width: 97%;">
        <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
            <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php }else{ ?>
            <?php echo smarty_function_math(array('equation'=>"x+10",'x'=>$_smarty_tpl->tpl_vars['shift']->value,'assign'=>"_shift"),$_smarty_tpl);?>

        <?php }?>
        <table class="table-width">
        <tr>
            <td class="nowrap" style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_shift']->value, ENT_QUOTES, 'UTF-8');?>
px;">
                <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
                    <?php if ($_smarty_tpl->tpl_vars['show_all']->value){?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/plus.gif" width="14" height="9" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if (isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])||$_smarty_tpl->tpl_vars['expand_all']->value){?>hidden<?php }?>" />
                    <?php }else{ ?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/plus.gif" width="14" height="9" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if ((isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value]))){?>hidden<?php }?>" onclick="if (!Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo htmlspecialchars(fn_url("categories.picker?category_id=".((string)$_smarty_tpl->tpl_vars['cur_cat']->value['category_id'])."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)" />
                    <?php }?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/icons/minus.gif" width="14" height="9" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if (!isset($_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['cat_id']->value])&&(!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value)){?>hidden<?php }?>" />
                <?php }else{ ?>
                    <span class="tree-space"></span>
                <?php }?></td>
            <td style="width: 100%;">
                <span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>class="strong"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['status']=="N"){?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?>
            </td>
        </tr>
        </table>
    </td>
</tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['has_children']||$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
    <div <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value){?>class="hidden"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cur_cat']->value['subcategories']){?>
        <?php echo smarty_function_math(array('equation'=>"x+1",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"level"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('categories_tree'=>$_smarty_tpl->tpl_vars['cur_cat']->value['subcategories'],'parent_id'=>false), 0);?>

        <?php echo smarty_function_math(array('equation'=>"x-1",'x'=>$_smarty_tpl->tpl_vars['level']->value,'assign'=>"level"),$_smarty_tpl);?>

    <?php }?>
    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value){?><!--cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>

<?php }?><?php }} ?>