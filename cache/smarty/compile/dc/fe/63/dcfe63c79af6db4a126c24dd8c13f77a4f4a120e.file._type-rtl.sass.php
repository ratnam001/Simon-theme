<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_type-rtl.sass" */ ?>
<?php /*%%SmartyHeaderCode:456054938554074b0653644-07378733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcfe63c79af6db4a126c24dd8c13f77a4f4a120e' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_type-rtl.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '456054938554074b0653644-07378733',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0654de8_18275722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0654de8_18275722')) {function content_554074b0654de8_18275722($_smarty_tpl) {?>// Blockquotes

blockquote
	border-right: 5px solid $blockquote-border-color
	border-left: 0

	// Float left with text-align: left
	&.pull-left
		p,
		small,
		.small
			text-align: left

// Horizontal description lists

@media (min-width: $grid-float-breakpoint)
	.dl-horizontal
		dt
			float: right
			width: ($component-offset-horizontal - 20)
			clear: right
			text-align: left
		dd
			margin-left: 0
			margin-right: $component-offset-horizontal<?php }} ?>
