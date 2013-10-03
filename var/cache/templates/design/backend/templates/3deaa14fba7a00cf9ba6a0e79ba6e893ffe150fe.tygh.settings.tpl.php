<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 13:28:41
         compiled from "/var/www/4profit4good/design/backend/templates/addons/twigmo/settings/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:634135254523c85c98de781-65592313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3deaa14fba7a00cf9ba6a0e79ba6e893ffe150fe' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/twigmo/settings/settings.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '634135254523c85c98de781-65592313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'runtime' => 0,
    'select_id' => 0,
    'cat' => 0,
    'locations_info' => 0,
    'default_logo' => 0,
    'favicon' => 0,
    'prevImgHeight' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_523c85c9a69e03_83723560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523c85c9a69e03_83723560')) {function content_523c85c9a69e03_83723560($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('twgadmin_connect_to_first','twgadmin_connect_to_first_ult','text_select_vendor','select','twgadmin_use_mobile_frontend','twgadmin_never','twgadmin_phone','twgadmin_tablet','twgadmin_both_tablet_and_phone','twgadmin_home_page_content','tt_addons_twigmo_settings_settings_twgadmin_home_page_content','twgadmin_home_page_blocks','twgadmin_tw_home_page_blocks','twgadmin_edit_these_blocks','twgadmin_edit_these_blocks','twgadmin_enable_geolocation','tt_addons_twigmo_settings_settings_twgadmin_enable_geolocation','twgadmin_mobile_logo','twgadmin_mobile_favicon','twgadmin_select_skin','twg_admin_basic_skin','twgadmin_only_req_profile_fields','twgadmin_url_for_facebook','twgadmin_url_for_twitter','twgadmin_url_on_appstore','twgadmin_url_on_googleplay'));
?>
<div id="storefront_settings">

<?php echo $_smarty_tpl->getSubTemplate ("addons/twigmo/settings/contact_twigmo_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>__('twgadmin_manage_storefront_settings')), 0);?>


<?php if (!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['access_id']){?>
	<?php if (!(fn_allowed_for("ULTIMATE"))||!$_smarty_tpl->tpl_vars['runtime']->value['company_id']){?>
		<?php echo $_smarty_tpl->__("twgadmin_connect_to_first");?>

	<?php }else{ ?>
		<?php echo $_smarty_tpl->__("twgadmin_connect_to_first_ult");?>

	<?php }?>
<?php }elseif(fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']){?>
	<?php echo $_smarty_tpl->__("text_select_vendor");?>
 - <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('data_url'=>"companies.get_companies_list?show_all=Y&action=href",'text'=>__("select"),'id'=>(($tmp = @$_smarty_tpl->tpl_vars['select_id']->value)===null||$tmp==='' ? "twg_top_company_id" : $tmp)), 0);?>

<?php }else{ ?>

<input type="hidden" name="result_ids" value="connect_settings,storefront_settings,addon_upgrade" />

<fieldset>
	
	<div class="control-group form-field">
		<label class="control-label" for="elm_tw_use_mobile_frontend"><?php echo $_smarty_tpl->__("twgadmin_use_mobile_frontend");?>
:</label>
		<div  class="controls">
			<select id="elm_tw_use_mobile_frontend" name="tw_settings[use_mobile_frontend]">
				<option	value="never" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['use_mobile_frontend']=="never"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("twgadmin_never");?>
</option>
				<option	value="phone" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['use_mobile_frontend']=="phone"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("twgadmin_phone");?>
</option>
				<option	value="tablet" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['use_mobile_frontend']=="tablet"){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("twgadmin_tablet");?>
</option>
				<option	value="both_tablet_and_phone" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['use_mobile_frontend']=="both_tablet_and_phone"||!$_smarty_tpl->tpl_vars['addons']->value['twigmo']['use_mobile_frontend']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("twgadmin_both_tablet_and_phone");?>
</option>
			</select>
		</div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_home_page_content"><?php echo $_smarty_tpl->__("twgadmin_home_page_content");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tooltip'=>__("tt_addons_twigmo_settings_settings_twgadmin_home_page_content")), 0);?>
:</label>
		<div  class="controls">
				<select id="elm_tw_home_page_content" name="tw_settings[home_page_content]">
						<option	value="home_page_blocks" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['home_page_content']=="home_page_blocks"){?>selected="selected"<?php }?>>- <?php echo $_smarty_tpl->__("twgadmin_home_page_blocks");?>
 -</option>
						<option	value="tw_home_page_blocks" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['home_page_content']=="tw_home_page_blocks"){?>selected="selected"<?php }?>>- <?php echo $_smarty_tpl->__("twgadmin_tw_home_page_blocks");?>
 -</option>
						<?php  $_smarty_tpl->tpl_vars["cat"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cat"]->_loop = false;
 $_from = fn_get_plain_categories_tree(0,false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cat"]->key => $_smarty_tpl->tpl_vars["cat"]->value){
$_smarty_tpl->tpl_vars["cat"]->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['cat']->value['status']=="A"){?>
										<option	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['home_page_content']==$_smarty_tpl->tpl_vars['cat']->value['category_id']){?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['cat']->value['level']),htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8', true));?>
</option>
								<?php }?>
						<?php } ?>
				</select>
				<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("twgadmin_edit_these_blocks"),'but_href'=>"block_manager.manage&selected_location=".((string)$_smarty_tpl->tpl_vars['locations_info']->value['index']),'but_id'=>"elm_edit_home_page_blocks",'but_role'=>"link",'but_meta'=>"hidden",'but_target'=>"_blank"), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("twgadmin_edit_these_blocks"),'but_href'=>"block_manager.manage&selected_location=".((string)$_smarty_tpl->tpl_vars['locations_info']->value['twigmo']),'but_id'=>"elm_edit_tw_home_page_blocks",'but_role'=>"link",'but_meta'=>"hidden",'but_target'=>"_blank"), 0);?>

		</div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_geolocation"><?php echo $_smarty_tpl->__("twgadmin_enable_geolocation");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tooltip'=>__("tt_addons_twigmo_settings_settings_twgadmin_enable_geolocation")), 0);?>
:</label>
		<div  class="controls">
                <input type="hidden" name="tw_settings[geolocation]" value="N" />
				<input type="checkbox" class="checkbox" id="elm_tw_geolocation" name="tw_settings[geolocation]" value="Y" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['geolocation']!="N"){?>checked="checked"<?php }?> />

		</div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label"><?php echo $_smarty_tpl->__("twgadmin_mobile_logo");?>
:</label>
		<div class="controls">
			<div class="float-left">
				<?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"tw_settings[logo]",'image'=>true), 0);?>

			</div>
			<div class="float-left attach-images-alt logo-image">
				<img class="solid-border" src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['twigmo']['logoURL'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_logo']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
			</div>
		</div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label"><?php echo $_smarty_tpl->__("twgadmin_mobile_favicon");?>
:</label>
		<div class="controls">
			<div class="float-left">
				<?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('var_name'=>"tw_settings[favicon]",'image'=>true), 0);?>

			</div>
			<div class="float-left attach-images-alt logo-image">
				<img class="solid-border" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['favicon']->value, ENT_QUOTES, 'UTF-8');?>
" />
			</div>
		</div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_select_skin"><?php echo $_smarty_tpl->__("twgadmin_select_skin");?>
:</label>
		<div  class="controls">
            <select id="elm_tw_select_skin" name="tw_settings[selected_skin]">
                <option	value="default" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['selected_skin']=="default"){?>selected="selected"<?php }?>>- <?php echo $_smarty_tpl->__("twg_admin_basic_skin");?>
 -</option>
            </select>
		<?php $_smarty_tpl->tpl_vars["prevImgHeight"] = new Smarty_variable("200px", null, 0);?>
		<div id="skinPrevWrapper" style="margin: 15px 0 0 0" class=""></div>
		<div id="skinsPrevContainer" class="hidden">
				<img style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prevImgHeight']->value, ENT_QUOTES, 'UTF-8');?>
" id="skinPrev_default" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/twigmo/images/skins/default.jpg">
		</div>
		</div>
	</div>


	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_only_req_profile_fields"><?php echo $_smarty_tpl->__("twgadmin_only_req_profile_fields");?>
:</label>
		<div  class="controls">
                <input type="hidden" name="tw_settings[only_req_profile_fields]" value="N" />
				<input type="checkbox" class="checkbox" id="elm_tw_only_req_profile_fields" name="tw_settings[only_req_profile_fields]" value="Y" <?php if ($_smarty_tpl->tpl_vars['addons']->value['twigmo']['only_req_profile_fields']=="Y"){?>checked="checked"<?php }?> />
		</div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_url_for_facebook"><?php echo $_smarty_tpl->__("twgadmin_url_for_facebook");?>
:</label>
        <div  class="controls">
            <input id="elm_tw_url_for_facebook" type="text" name="tw_settings[url_for_facebook]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['url_for_facebook'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
        </div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_url_for_twitter"><?php echo $_smarty_tpl->__("twgadmin_url_for_twitter");?>
:</label>
        <div  class="controls">
            <input id="elm_tw_url_for_twitter" type="text" name="tw_settings[url_for_twitter]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['url_for_twitter'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
        </div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_url_for_appstore"><?php echo $_smarty_tpl->__("twgadmin_url_on_appstore");?>
:</label>
        <div  class="controls">
            <input id="elm_tw_url_on_appstore" type="text" name="tw_settings[url_on_appstore]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['url_on_appstore'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
        </div>
	</div>

	
	<div class="form-field control-group">
		<label class="control-label" for="elm_tw_url_on_googleplay"><?php echo $_smarty_tpl->__("twgadmin_url_on_googleplay");?>
:</label>
        <div  class="controls">
            <input id="elm_tw_url_on_googleplay" type="text" name="tw_settings[url_on_googleplay]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['url_on_googleplay'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
        </div>
	</div>

	<script>
	//<![CDATA[
	
	Tygh.$((function (_) {
		var imgHeight = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prevImgHeight']->value, ENT_QUOTES, 'UTF-8');?>
';

		_('.form-field a.text-button-link').css({'margin': '0 0 0 10px'});

		_("#elm_tw_home_page_content").bind('change', function () {fn_tw_show_block_link();}).change();

		_('#elm_tw_select_skin').bind('change', function () {fn_tw_show_skin_preview();}).change();

		_.getScript("<?php echo htmlspecialchars(@constant('TWIGMO_SKINS_CONFIG_URL'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars(@constant('TWIGMO_VERSION'), ENT_QUOTES, 'UTF-8');?>
/skins.js", function () {
            var selectedSkin = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['twigmo']['selected_skin'], ENT_QUOTES, 'UTF-8');?>
',
							i;
            _('#elm_tw_select_skin, #skinsPrevContainer').empty();
            if ('TWGGlobal' in window){
                for (i in TWGGlobal.skins){
                    _('#elm_tw_select_skin').append('<option value="' + i + '">- ' + TWGGlobal.skins[i].name + ' -</option>');
                    _('#skinsPrevContainer').append('<img style="max-height:' + imgHeight + '" id="skinPrev_' + i + '" src="<?php echo htmlspecialchars(@constant('TWIGMO_SKINS_CONFIG_URL'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars(@constant('TWIGMO_VERSION'), ENT_QUOTES, 'UTF-8');?>
/' + i + '.jpg">');
                }
            } else {
                _('#elm_tw_select_skin').append('<option value="default">- Default -</option>');
                _('#skinsPrevContainer').append('<img height="' + imgHeight + '" id="skinPrev_default" src="skins/basic/admin/addons/twigmo/images/skins/default.jpg">');
            }
            _('#elm_tw_select_skin').val(selectedSkin).change();
        });

		function fn_tw_show_block_link(){
			var value = _('#elm_tw_home_page_content option:selected').val();
			if ((value === 'home_page_blocks') || (value === 'tw_home_page_blocks')) {
				if (value === 'home_page_blocks') {
					_('#elm_edit_home_page_blocks').show();
					_('#elm_edit_tw_home_page_blocks').hide();
				} else {
					_('#elm_edit_tw_home_page_blocks').show();
					_('#elm_edit_home_page_blocks').hide();
				}
			} else {
				_('#elm_edit_home_page_blocks').hide();
				_('#elm_edit_tw_home_page_blocks').hide();
			}

			return true;
		}

		function fn_tw_show_skin_preview() {
			var value = _('#elm_tw_select_skin option:selected').val();
			_('#skinsPrevContainer').append(_('#skinPrevWrapper').html());
			_('#skinPrevWrapper').empty().append(_('#skinPrev_' + value));
			return false;
		}
	})(Tygh.$));
	
	//]]>
	</script>

</fieldset>

<?php }?>

<!--storefront_settings--></div>
<?php }} ?>