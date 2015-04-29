<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_tree.sass" */ ?>
<?php /*%%SmartyHeaderCode:1488571389554074abe151a2-75341359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850d3b6deedc0496fdc291fa6554696861feb1da' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_tree.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488571389554074abe151a2-75341359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abe16a47_18522138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abe16a47_18522138')) {function content_554074abe16a47_18522138($_smarty_tpl) {?>.tree-panel-heading-controls
	line-height: 2.2em
	font-size: 1.1em
	//text-transform: uppercase
	color: $brand-primary
	i
		font-size: $icon-size-base
.tree
	list-style: none
	@include padding(0, 0, 0, 20px)
	input
		vertical-align: baseline
		margin-right: 4px
		line-height: normal
	i
		font-size: $icon-size-base
	.tree-item-name, .tree-folder-name
		padding: 2px 5px
		@include border-radius(4px)
		label
			font-weight: 400
		&:hover
			background-color: #eee
			cursor: pointer
	.tree-selected
		color: white
		background-color: $brand-primary
		&:hover
			background-color: darken($brand-primary,5%)
		i.tree-dot
			background-color: white
	i.tree-dot
		display: inline-block
		position: relative
		width: 6px
		height: 6px
		margin: 0 4px
		background-color: #ccc
		@include border-radius(6px)
	.tree-item-disable, .tree-folder-name-disable
		color: #ccc
		&:hover
			color: #ccc
			background-color: none
.tree-actions
	display: inline-block

.tree-panel-heading-controls
	margin: -20px -20px 20px
	padding: 5px
	border-bottom: solid 1px #DFDFDF

.tree-actions
	.twitter-typeahead
		@include padding(0,0,0,4px)
		position: relative
		top: 1px
	.tt-hint
		left: 4px !important
		color: #ccc

.tree-panel-label-title
	font-weight: 400
	margin: 0
	@include padding(0, 0, 0, 8px)<?php }} ?>
