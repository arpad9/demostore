<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:38:58
         compiled from "/var/www/4profit4good/design/backend/templates/addons/statistics/hooks/index/chart_statistic.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163891319522ce062605de0-06975387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c40ca12e697ad5f16fb18a364686d6f141f59039' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/addons/statistics/hooks/index/chart_statistic.pre.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '163891319522ce062605de0-06975387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce06260d9a5_40711417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce06260d9a5_40711417')) {function content_522ce06260d9a5_40711417($_smarty_tpl) {?><?php if (fn_check_view_permissions("statistics.reports","GET")){?>
	<div id="content_visits_chart">
	    <div id="dashboard_statistics_visits_chart" class="dashboard-statistics-chart spinner">
	    </div>
	</div>
<?php }?><?php }} ?>