<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/homeslider/homeslider.scss" */ ?>
<?php /*%%SmartyHeaderCode:1496022306554074aa6728c3-34672158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99fcacdac1bf15a0fc4f91bb78aa6d239315028f' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/homeslider/homeslider.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496022306554074aa6728c3-34672158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa6c0f53_71792232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa6c0f53_71792232')) {function content_554074aa6c0f53_71792232($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
/******************************************************************************
						Home Page Slider
*******************************************************************************/
#homepage-slider {
	padding-left: 0;
	padding-right: 0;
	margin-bottom: 14px;
	max-width: 100%;
	max-height: 100%;
	overflow: hidden;
	position: relative;
	z-index: 1;
	float: left;
	@media (max-width: $screen-xs-max) { // max 767px
		width: 100%;
		max-width: 100%;
		padding-top: 20px;
	}
	#homeslider {
		margin: 0 auto;
		padding: 0;
	}
	.homeslider-container {
		position: relative;
	}
	.homeslider-image {
		position: absolute;
		left: 0;
		top: 0;
	}
	.homeslider-description {
		position: absolute;
		left: 0;
		top: 0;
		padding: 50px 50px;
		cursor: pointer;
		h2 {
			font-size: 2.7em;
			color: white;
			margin: 0;
			padding: 0;
		}
		p {
			width: 50%;
			font-size: 1.15em;
			line-height: 1.3em;
			padding: 0.5em 0;
			color: white;
		}
		button {
			font-size: 1.2em;
			text-transform: uppercase;
		}
		@media (max-width: $screen-lg){
			padding: 20px;
			font-size: 0.8em;
		}
		@media (max-width: $screen-sm){
			padding: 30px;
			font-size: 0.7em;
			p {
				font-size: 1.5em;
			}
		}
		@media (max-width: $screen-xs){
			padding: 30px;
			font-size: 0.5em;
			p {
				font-size: 1.7em;
			}
		}
	}
/*****************************************************************************
						BXSlider Styles
********************************************************************************/
	.bx-wrapper {
		a {
			display: block;
		}
		img {
			height: auto;
		}
		.bx-viewport {
			width: 100%;
			direction: ltr!important;
		}
		.bx-pager.bx-default-pager a {
			background: #666;
		}
		.bx-controls-direction a {
			top: auto;
			margin-top: 0px;
			font-size: 1em;
			bottom: 10px;
			outline: 0;
			width: 52px;
			height: 52px;
			text-indent: -9999px;
			z-index: 9999;
			border: 2px solid $light-border-color;
			line-height: 18px;
			&:before {
				height: 48px;
				width: 48px;
				display: block;
				background: $light-background;
				content: ".";
				opacity: 0.14;
				text-indent: -9999px;
				position: absolute;
				left: 0;
				top: 0;
				z-index: 1;
			}
			&:after {
				display: block;
				width: 48px;
				height: 48px;
				color: $light-text-color;
				text-indent: 0;
				text-align: center;
				font-size: 21px;
				font-family: $font-icon;
				position: absolute;
				top: 0;
				left: 0;
				z-index: 2;
				padding: 16px 0 0 0;
			}
			&:hover {
				&:before {
					background: $dark-background;
					opacity: 0.83;
				}
			}
		}
		.bx-prev {
			right: 60px;
			left: auto;
			&:after {
				content: "\f053";
			}
		}
		.bx-next {
			&:after {
				content: "\f054";
			}
		}
	}
}
.ie8 {
	#homepage-slider{
		.bx-wrapper .bx-controls-direction a {
			&:before {
				background: $dark-background;
			}
		}
	}
}
<?php }} ?>
