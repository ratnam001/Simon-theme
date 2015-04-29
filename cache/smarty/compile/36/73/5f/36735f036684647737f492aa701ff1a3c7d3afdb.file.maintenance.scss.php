<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/maintenance.scss" */ ?>
<?php /*%%SmartyHeaderCode:1416050119554074aada7fc8-22573655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36735f036684647737f492aa701ff1a3c7d3afdb' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/maintenance.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1416050119554074aada7fc8-22573655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aadb2066_71663622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aadb2066_71663622')) {function content_554074aadb2066_71663622($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
/*********************************************************************
					Maintenance Page Styles
**********************************************************************/
#maintenance {
	margin: 50px 0 0 0;
	@media (min-width: $screen-lg) { // > 1200
		margin: 126px 0 0 0;
		padding: 91px 48px 365px 297px;
		background: url(../img/bg_maintenance.png) no-repeat;
	}
	.logo {
		margin: 0 0 31px 0;
	}
	h1 {
		font: 600 28px/34px $font-custom;
		color: $base-text-color;
		text-transform: uppercase;
		border-bottom: 1px solid $base-border-color;
		padding: 0 0 14px 0;
		margin: 0 0 19px 0;
	}
	#message {
		font: 600 16px/31px $font-custom;
		padding: 0 0 0 18px;
		color: #555454;
		text-transform: uppercase;
	}
}
.container {
	padding-right: 15px;
	padding-left: 15px;
	margin-right: auto;
	margin-left: auto;
}
@media (min-width: 768px) {
	.container {
		width: 750px;
	}
}
@media (min-width: 992px) {
	.container {
		width: 970px;
	}
}
@media (min-width: 1200px) {
	.container {
		width: 1170px;
	}
}
@media only screen and (min-width: 1200px) {
	.container {
		padding-left: 0;
		padding-right: 0;
	}
}<?php }} ?>
