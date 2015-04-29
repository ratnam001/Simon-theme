<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_header.sass" */ ?>
<?php /*%%SmartyHeaderCode:529668354554074abe18412-89974800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac94d4cf437173abb591defadba229b9e7d123bc' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_header.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529668354554074abe18412-89974800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abe1a998_60515053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abe1a998_60515053')) {function content_554074abe1a998_60515053($_smarty_tpl) {?>#header
	z-index: 20
#header_infos
	@extend .navbar
	@extend .navbar-inverse
	@extend .navbar-fixed-top
	height: 36px !important
	.navbar-header
		width: 100%
#header_shopname
	@extend .navbar-brand
	font-size: 1.3em !important
	position: relative
	height: 36px
	padding-left: 45px !important
	@include margin(0, 5px, 0, 0)
	@media (max-width: $screen-xs)
		display: none
	img
		position: absolute
		top: 0
		width: 35px
		height: 35px
		@include left(0)
#header_notifs_icon_wrapper
	@extend .nav
	@extend .navbar-nav
	@extend .hidden-xs
	min-width: 170px
	> li > a
		height: 36px
		display: block
		&:hover i
			color: white
	> li > a > i
		font-size: $icon-size-base
		color: darken(white,30%)
		vertical-align: middle
	.notifs
		width: 40px
		position: relative
	.notifs_badge
		@extend .badge
		position: absolute
		font-size: 10px !important
		top: 2px
		padding: 0 5px !important
		display: none
		z-index: 10
		@include right(-3px)
	.notifs_dropdown
		background-color: white
		border: none
		@include box-shadow(rgba(black,0.7) 0 0 10px)
		.notifs_panel
			width: 300px
			.notifs_panel_header
				h3
					padding: 10px
					font-size: 1.3em
					margin: 0
					border-bottom: solid 1px #CCCCCC
			.notifs_panel_footer
				padding: 10px
				text-align: center
			.list_notif
				a
					display: block
					text-decoration: none
					padding: 5px
					border-bottom: solid 1px #CCCCCC
				.no_notifs
					@extend .text-muted
					display: block
					padding: 15px
					border-bottom: solid 1px #CCCCCC
#header_nav_toggle
	background-color: black
	border: none
	color: white
	display: none
#header_employee_box
	@extend .nav
	@extend .navbar-nav
	margin: 0 !important
	@include ltr
		@extend .navbar-right
	@include rtl
		@extend .navbar-left
	@media (max-width: $screen-sm)
		@include float(right)
		> li
			display: inline-block
			@include float(left)
	span.string-long
		@media (max-width: $screen-md)
			display: none
	span.string-short
		display: none
		@media (max-width: $screen-md)
			display: inline-block
	a img
		@include margin-right(5px)
	#header_foaccess i
		font-size: 1.2em
#employee_infos
	.employee_name
		position: relative
		@include ltr
			padding-left: 34px !important
		@include rtl
			padding-right: 34px !important
	.employee_avatar_small
		position: absolute
		top: 2px
		@include left(0)
	img
		border: none
		padding: 0
#employee_links
	i
		font-size: $icon-size-base
	@media (max-width: $screen-sm)
		position: fixed !important
		top: 36px !important
		width: 100% !important
		height: 100% !important
		background-color: #383F50 !important
		@include ltr
			left: 0 !important
		@include rtl
			right: 0 !important
		li
			color: white
			font-size: 1.2em
			text-transform: uppercase
			i
				font-size: 1.3em
				color: $brand-primary

#header_quick
	@extend .nav
	@extend .navbar-nav
	@extend .hidden-xs
	@include ltr
		@extend .navbar-left
	@include rtl
		@extend .navbar-right
	
#ajax_running
	position: absolute
	height: 35px
	width: 35px
	top: 0
	background-color: rgba(black,.4)
	text-align: center
	@include left(0)
	i
		font-size: 20px
		color: rgba(white,.6)
		line-height: 35px
<?php }} ?>
