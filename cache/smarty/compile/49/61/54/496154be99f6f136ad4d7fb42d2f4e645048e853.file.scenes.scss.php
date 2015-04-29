<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/scenes.scss" */ ?>
<?php /*%%SmartyHeaderCode:1468580765554074ab0f05d9-96599555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '496154be99f6f136ad4d7fb42d2f4e645048e853' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/scenes.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1468580765554074ab0f05d9-96599555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ab126d28_22106090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ab126d28_22106090')) {function content_554074ab126d28_22106090($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/********************************************************
			Scenes Styles
********************************************************/

#scenes .popover-button span{
	display: block;
	font-size: 28px;
	text-align: center;
	&:before {
		content: "\f0fe";
		font-family: $font-icon;
		display: block;
		vertical-align: 5px;
		color: grey;
	}
}

.thumbs_banner{
	margin: 10px auto;
	padding: 0;
	height: 62px !important;
	width: 100%;
	border-top: 1px solid $base-border-color;
	border-bottom: 1px solid $base-border-color;
	.space-keeper{
		width: 21px;
		float: left;
		display: block;
		height: 100%;
		a.prev{
			display: none;
			width: 21px;
			background: $base-box-bg;
			text-decoration: none;
			color: $base-text-color;
			&:before {
				font-family: $font-icon;
				content: "\f053";
				vertical-align: middle;
				padding-top: 35px;
				padding-left: 5px;
			}
		}
		a.next {
			float: left;
			display: block;
			width: 21px;
			background: $base-box-bg;
			text-decoration: none;
			color: $base-text-color;
			&:before {
				font-family: $font-icon;
				content: "\f054";
				vertical-align: middle;
				padding-top: 35px;
				padding-left: 5px;
			}
		}
	}
}

#scenes_list{
	overflow: hidden;
	float: left;
	width: 828px;
	ul{
		list-style-type: none;
	}
	li{
		float: left;
	}
	a{
		display: block;
	}
}

#scenes {
	a.popover-button {
		display: block;
		position: absolute;
		text-decoration: none;
	}
	.popover {
		@include border-radius(0);
		border-color: $base-border-color;
	}
	.product-image-container,
	.product-name {
		margin-bottom: 15px;
	}
	div.description {
		margin-bottom: 15px;
	}
	.button-container {
		margin-bottom: 15px;
		a {
			text-decoration: none;
		}
	}
	.price {
		margin-bottom: 10px;
	}
	@media  (max-width: $screen-md-max) { // max 1199px
		display: none;
	}
}
<?php }} ?>
