<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 01:04:08
         compiled from "/var/www/4profit4good/design/backend/templates/common/fileuploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:932962686522ce648d9da27-28004010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fbdababacccede43a255bc6a6f48048a6aa91e2' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/common/fileuploader.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '932962686522ce648d9da27-28004010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'var_name' => 0,
    'label_id' => 0,
    'images' => 0,
    'id_var_name' => 0,
    'image' => 0,
    'runtime' => 0,
    'id' => 0,
    'po' => 0,
    'image_id' => 0,
    'delete_link' => 0,
    'multiupload' => 0,
    'download_link' => 0,
    'image_name' => 0,
    'upload_another_file_text' => 0,
    'upload_file_text' => 0,
    'hide_server' => 0,
    'hidden_name' => 0,
    'hidden_value' => 0,
    'allowed_ext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce648f07499_11413675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce648f07499_11413675')) {function content_522ce648f07499_11413675($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/4profit4good/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('remove_this_item','remove_this_item','remove_this_item','remove_this_item','text_select_file','upload_another_file','local','server','url','text_allowed_to_upload_file_extension'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();?><?php echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_var_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp1, null, 0);?>

<div class="fileuploader cm-field-container">
<input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['images']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" />

<?php  $_smarty_tpl->tpl_vars["image"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image"]->_loop = false;
 $_smarty_tpl->tpl_vars["image_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image"]->key => $_smarty_tpl->tpl_vars["image"]->value){
$_smarty_tpl->tpl_vars["image"]->_loop = true;
 $_smarty_tpl->tpl_vars["image_id"]->value = $_smarty_tpl->tpl_vars["image"]->key;
?>
    <div class="upload-file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['image']->value['location']=="cart"){?>
                    <?php $_smarty_tpl->tpl_vars["delete_link"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".delete_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value)."&redirect_mode=cart", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["download_link"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".get_custom_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value), null, 0);?>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if ($_smarty_tpl->tpl_vars['image']->value['is_image']){?>
                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['detailed']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['thumbnail']), ENT_QUOTES, 'UTF-8');?>
" border="0" /></a><br />
            <?php }?>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:uploaded_files")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['delete_link']->value){?><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['delete_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php if (!($_smarty_tpl->tpl_vars['po']->value['required']=="Y"&&count($_smarty_tpl->tpl_vars['images']->value)==1)){?><i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"){?>Tygh.fileuploader.toggle_links('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="icon-remove-sign cm-tooltip hand"></i>&nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['delete_link']->value){?></a><?php }?><span><?php if ($_smarty_tpl->tpl_vars['download_link']->value){?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['download_link']->value){?></a><?php }?></span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </p>
    </div>
<?php } ?>

<div id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="upload-file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden"><i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("remove_this_item");?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"){?>Tygh.fileuploader.toggle_links(this.id, 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="icon-remove-sign cm-tooltip hand"></i>&nbsp;<span></span></p>
        <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"){?><p class="cm-fu-no-file <?php if ($_smarty_tpl->tpl_vars['images']->value){?>hidden<?php }?>"><?php echo $_smarty_tpl->__("text_select_file");?>
</p><?php }?>
    </div>
    
    <input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value){?>class="cm-image-field"<?php }?> /><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value){?>local<?php }?>" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value){?>class="cm-image-field"<?php }?> /><div class="btn-group <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"&&$_smarty_tpl->tpl_vars['images']->value){?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="upload-file-local"><a class="btn"><span data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value){?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_another_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><span data-ca-multi="N" <?php if ($_smarty_tpl->tpl_vars['images']->value){?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("local") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><div class="image-selector"><label for=""><input type="file" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y"){?>Tygh.fileuploader.check_image(this.id);<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="file<?php if ($_smarty_tpl->tpl_vars['image']->value){?> cm-image-field<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"></label></div></div><?php if (!($_smarty_tpl->tpl_vars['hide_server']->value||$_smarty_tpl->tpl_vars['runtime']->value['company_id']||defined("RESTRICTED_ADMIN"))){?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="server_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("server");?>
</a><?php }?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("url");?>
</a><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value){?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?></div><?php if ($_smarty_tpl->tpl_vars['allowed_ext']->value){?><p class="mute micro-note"><?php echo $_smarty_tpl->__("text_allowed_to_upload_file_extension",array("[ext]"=>$_smarty_tpl->tpl_vars['allowed_ext']->value));?>
</p><?php }?>
</div>

</div><!--fileuploader--><?php }} ?>