<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_footer.sass" */ ?>
<?php /*%%SmartyHeaderCode:324188843554074abccb040-03817641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395243d32a1b14fc24dd1a1d2967e80ab8249c78' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_footer.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324188843554074abccb040-03817641',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abccd384_42263706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abccd384_42263706')) {function content_554074abccd384_42263706($_smarty_tpl) {?>#footer
	display: block
	width: 100%
	height: 50px
	position: fixed
	bottom: 0
	z-index: 600
	background-color: rgba(black,0.8)
	color: #aaa
	line-height: 50px
	@include animate(fadeInUp, 0.3s)
	a
		color: #ccc
	&.hide
		display: none!important
	#go-top
		display: block
		height: 30px
		width: 30px
		position: fixed
		right: 10px
		bottom: 10px
		z-index: 9003
		padding: 0px 6px
		margin: -2px 0px 0px
		text-align: center
		line-height: 30px
		text-decoration: none
		color: #fff
		cursor: pointer
		font-size: 16px
		background-color: $main-color
		@include right(10px)
		&:hover
			background-color: $brand-primary
	.social-networks
		margin: 4px 0 0 0
	a.footer_link
		color: $brand-primary
		&:hover
			color: white
			text-decoration: none
		i
			font-size: $icon-size-base
			color: white
	.footer-contact
		padding: 7px 0 0 0
		line-height: 1.5em
		white-space: nowrap
		overflow: hidden
		text-overflow: ellipsis
		@include margin(0,0,6px,6px)
		strong
			font-weight: 400
			color: white

a.link-social
	i
		font-size: 28px
		width: 34px
		height: 34px
		display: inline-block
		line-height: 34px!important
		text-align: center
		@include margin(0, 4px, 0, 0)
		@include border-radius(30px)
	&:hover
		text-decoration: none

.link-twitter i
	color: white
	background-color: #7CCEEF
	&:hover
		color: #7CCEEF
		background-color: white
.link-facebook i
	color: white
	background-color: #557DBB
	&:hover
		color: #557DBB
		background-color: white
.link-github i
	color: black
	background-color: white
	&:hover
		color: white
		background-color: black
.link-google i
	color: white
	background-color: #E6644E
	&:hover
		color: #E6644E
		background-color: white
<?php }} ?>
