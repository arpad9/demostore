<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 00:38:58
         compiled from "/var/www/4profit4good/design/backend/templates/common/daterange_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054626562522ce0627154e5-74029037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2922945e3d15c7566e5c00ca2edc98f005da5a95' => 
    array (
      0 => '/var/www/4profit4good/design/backend/templates/common/daterange_picker.tpl',
      1 => 1372247425,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1054626562522ce0627154e5-74029037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start_date' => 0,
    'end_date' => 0,
    'id' => 0,
    'extra_class' => 0,
    'data_url' => 0,
    'result_ids' => 0,
    'time_from' => 0,
    'time_to' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ce062769d39_80485550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ce062769d39_80485550')) {function content_522ce062769d39_80485550($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_style')) include '/var/www/4profit4good/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/4profit4good/app/lib/other/smarty/plugins/modifier.date_format.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/daterangepicker/moment.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/daterangepicker/daterangepicker.js"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"lib/daterangepicker/daterangepicker.css"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['start_date'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['start_date']->value)===null||$tmp==='' ? (strtotime("-30 day")) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['end_date'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['end_date']->value)===null||$tmp==='' ? (strtotime("now")) : $tmp), null, 0);?>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="reportrange <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['data_url']->value){?>data-ca-target-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['result_ids']->value){?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <a class="btn-text">
        <span>
            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_date']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>

        </span>
        <b class="caret"></b>
    </a>
</div>

<script type="text/javascript">
//<![CDATA[
Tygh.$(document).ready(function() {
	fn_init_daterange_picker('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');
});
//]]>

function fn_init_daterange_picker(id)
{
	Tygh.$('#' + id).daterangepicker({
	    ranges: {
	        'Today': [moment().startOf('day'), moment().endOf('day')],
	        'Yesterday': [moment().subtract('days', 1).startOf('day'), moment().subtract('days', 1).endOf('day')],
	        'Last 7 Days': [moment().startOf('day').subtract('days', 6), moment().endOf('day')],
	        'Last 30 Days': [moment().startOf('day').subtract('days', 29), moment().endOf('day')],
	        'This Month': [moment().startOf('month'), moment().endOf('month')],
	        'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
	    },
	    startDate: moment(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time_from']->value, ENT_QUOTES, 'UTF-8');?>
*1000).startOf('day'),
        endDate: moment(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time_to']->value, ENT_QUOTES, 'UTF-8');?>
*1000).startOf('day')
	}, 
	function(start, end) {
		var self = Tygh.$(this.element);
		var $ = Tygh.$;

		start = !start ? moment(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time_from']->value, ENT_QUOTES, 'UTF-8');?>
*1000).startOf('day') : start;
		end = !end ? moment(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time_to']->value, ENT_QUOTES, 'UTF-8');?>
*1000).startOf('day') : end;

	    $('span', self).html(start.format('MMM D, YYYY') + ' — ' + end.format('MMM D, YYYY'));
	    if (self.data('ca-target-url') && self.data('ca-target-id')) {
	    	$.ceAjax('request', $.attachToUrl(self.data('ca-target-url'), 'time_from=' + (start.utc() / 1000) + '&time_to=' + (parseInt(end.utc() / 1000) + 86400)), { // Seconds in day
	    			result_ids: self.data('ca-target-id'),
	    			caching: false,
	    			force_exec: true,
	    			callback: function(id) {
	    				Tygh.$('.reportrange').each(function(){
	    					fn_init_daterange_picker(Tygh.$(this).prop('id'));
	    				});
	    				
	    			}
	    		});
	    }
	});
}
</script><?php }} ?>