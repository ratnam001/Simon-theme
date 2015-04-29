<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_pagination-rtl.sass" */ ?>
<?php /*%%SmartyHeaderCode:117599441554074b06ae8a4-91003582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3873743f2507d879403094cb7371dcafa99b2206' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_pagination-rtl.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117599441554074b06ae8a4-91003582',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b06afe00_20428424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b06afe00_20428424')) {function content_554074b06afe00_20428424($_smarty_tpl) {?>//
// RTL Pagination (multiple pages)
// --------------------------------------------------
.pagination
	padding-right: 0
	> li
		> a,
		> span
			float: right // Collapse white-space
			margin-right: -1px
			margin-left: 0px
		&:first-child
			> a,
			> span
				margin-left: 0
				@include border-right-radius($border-radius-base)
				@include border-left-radius(0)
		&:last-child
			> a,
			> span
				margin-right: -1px
				@include border-left-radius($border-radius-base)
				@include border-right-radius(0)<?php }} ?>
