<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_rtl.sass" */ ?>
<?php /*%%SmartyHeaderCode:1693992907554074abe10271-45555089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9fe21884ca01dd4131f4218e5a8d7a5e1d1dcc9' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_rtl.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1693992907554074abe10271-45555089',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abe2a335_65713087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abe2a335_65713087')) {function content_554074abe2a335_65713087($_smarty_tpl) {?>html
	direction: rtl
	font-family: tahoma, sans-serif


.bootstrap
	/* fix SVG */
	.chart svg
		direction:ltr
		svg text
		font: normal 11px Tahoma,Arial !important

	/* reverse font awesome icon directions */
	.icon-step-forward:before
		content: "\f048"
	.icon-fast-forward:before
		content: "\f049"
	.icon-forward:before
		content: "\f04a"
	.icon-backward:before
		content: "\f04e"
	.icon-fast-backward:before
		content: "\f050"
	.icon-step-backward:before
		content: "\f051"
	.icon-chevron-right:before
		content: "\f053"
	.icon-chevron-left:before
		content: "\f054"
	.icon-arrow-right:before
		content: "\f060"
	.icon-arrow-left:before
		content: "\f061"
	.icon-hand-o-left:before, .icon-hand-right:before
		content: "\f0a4"
	.icon-hand-o-right:before, .icon-hand-left:before
		content: "\f0a5"
	.icon-caret-right:before
		content: "\f0d9"
	.icon-caret-left:before
		content: "\f0da"
	.icon-angle-double-right:before, .icon-double-angle-right:before
		content: "\f100"
	.icon-angle-double-left:before, .icon-double-angle-left:before
		content: "\f101"
	.icon-angle-right:before
		content: "\f104"
	.icon-angle-left:before
		content: "\f105"
	.icon-quote-right:before
		content: "\f10d"
	.icon-quote-left:before
		content: "\f10e"
	.icon-chevron-circle-right:before, .icon-chevron-sign-right:before
		content: "\f137"
	.icon-chevron-circle-left:before, .icon-chevron-sign-left:before
		content: "\f138"
	.icon-toggle-left:before, .icon-caret-square-o-left:before
		content: "\f152"
	.icon-long-arrow-right:before
		content: "\f177"
	.icon-long-arrow-left:before
		content: "\f178"
	.icon-arrow-circle-o-left:before
		content: "\f18e"
	.icon-arrow-circle-o-right:before
		content: "\f190"
	.icon-toggle-right:before, .icon-caret-square-o-right:before
		content: "\f191"

	//fix bootstrap
	dd
		margin-right: 0
		
	.pull-right
		float: left !important
	.pull-left
		float: right !important
	.input-group input[type="text"]
		float: right<?php }} ?>
