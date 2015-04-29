<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_kpi.sass" */ ?>
<?php /*%%SmartyHeaderCode:1751075000554074abd1f218-51024856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6fa520c6772d1dec01d764e73167e29d7f70445' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_kpi.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751075000554074abd1f218-51024856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abd20c90_38225111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abd20c90_38225111')) {function content_554074abd20c90_38225111($_smarty_tpl) {?>.kpi-container
	padding-bottom: 10px !important

.box-stats
	display: block
	height: 64px
	margin-bottom: 10px
	.boxchart-overlay
		@include padding(10px, 10px, 5px, 10px)
		@include margin-right(10px)
		@include float(left)
		@include border-radius(3px)
	.kpi-content
		width: 100%
		position: relative
		@include padding-left(72px)
		@include float(left)
		i
			position: absolute
			top: 0
			font-size: 56px
			text-align: center
			color: white
			width: 66px
			height: 66px
			line-height: 66px
			@include left(0)
			@include border-radius(3px)

		.title
			display: block
			color: #666
		.subtitle
			display: block
			text-transform: uppercase
			color: #aaa
		.value
			display: block
			clear: both
			font-size: 1.8em
			white-space: nowrap
			text-overflow: ellipsis
			overflow: hidden
	&:hover
		text-decoration: none
.color1
	i, .boxchart-overlay
		background-color: #2BA8E3
		@include box-shadow(rgba(black,.2) 0 -3px 0 inset)
	.value
		color: #2BA8E3
.color2
	i, .boxchart-overlay
		background-color: #FF5450
		@include box-shadow(rgba(black,.2) 0 -3px 0 inset)
	.value
		color: #FF5450
.color3
	i, .boxchart-overlay
		background-color: #9E5BA1
		@include box-shadow(rgba(black,.2) 0 -3px 0 inset)
	.value
		color: #9E5BA1
.color4
	i, .boxchart-overlay
		background-color: #95CC6B
		@include box-shadow(rgba(black,.2) 0 -3px 0 inset)
	.value
		color: #95CC6B

.data_chart
	rect
		fill: white
	path
		stroke: white
		stroke-width: 2
		fill: none
	line
		stroke: black
	.area
		fill: rgba(white,0.30)
		stroke-width: 0<?php }} ?>
