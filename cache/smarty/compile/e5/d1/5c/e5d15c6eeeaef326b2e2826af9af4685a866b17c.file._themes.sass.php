<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_themes.sass" */ ?>
<?php /*%%SmartyHeaderCode:127238802554074b1bc4755-08629937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d15c6eeeaef326b2e2826af9af4685a866b17c' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_themes.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127238802554074b1bc4755-08629937',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1bc5c65_05942241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1bc5c65_05942241')) {function content_554074b1bc5c65_05942241($_smarty_tpl) {?>.theme-container
	width: 100%
	height: 300px
	overflow: hidden
	border: solid 1px #ccc
	position: relative
	background-color: rgba(#4D576E,.3)
	@include border-radius(3px)
	.theme-title
		text-align: center
		height: 40px
		line-height: 40px
		font-size: 16px
		background-color: #4D576E
		color: white
		margin: 0 0 10px 0
		padding: 0
		border-bottom: solid 1px white

	.thumbnail-wrapper
		.action-wrapper
			display: none
			position: absolute
			top: 40px
			left: 0
			.action-overlay
				width: 100%
				height: 260px
				@include background-image(linear-gradient(rgba(#4D576E,.5),#4D576E))
			.action-buttons
				position: absolute
				width: 100%
				top: 130px
				text-align: center

.addons-see-all-themes
	padding-top: 41px
	&:before
		content: "or"
		margin-right: 10px

.addons-style-search-bar
	padding-top: 20px
<?php }} ?>
