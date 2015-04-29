<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocknewsletter/blocknewsletter.scss" */ ?>
<?php /*%%SmartyHeaderCode:270500513554074aa2929a7-54774343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c3b90665f466774cd42e4fe382e4276466689d3' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocknewsletter/blocknewsletter.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270500513554074aa2929a7-54774343',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa2d4795_89259672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa2d4795_89259672')) {function content_554074aa2d4795_89259672($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/* Block newsletter */
#columns #newsletter_block_left {
	.form-group {
		margin-bottom: 0;
		.form-control {
			max-width: 222px;
			display: inline-block;
			margin-right: 6px;
			@media (min-width: $screen-sm) and (max-width: $screen-md-max) { // min 768px max 1199px
				margin-bottom: 10px;
				margin-right: 0;
			}
		}
	}
	.success_inline, .warning_inline {
		text-align: left;
		padding: 1px 0 0 0;
		margin-bottom: -19px;
	}
	.success_inline	{
		color: #418B19;
	}
	.warning_inline {
		color: #f13340;
	}
}
/* Block newsletter footer */
#footer {
	#newsletter_block_left {
		overflow: hidden;
		width: 50%;
		float: left;
		padding: 13px 15px 7px 15px;
		margin-bottom: 0;
		@media (max-width: $screen-xs-max) { // max 767px
			width: 100%;
		}
		h4 {
			background: none;
			float: left;
			padding: 7px 16px 5px 0;
			text-transform: none;
			font-size: 21px;
			line-height: 25px;
			border: none;
			&:after {
				display: none;
			}
		}
		.block_content {
			overflow: hidden;
		}
		.form-group {
			margin-bottom: 0;
			.form-control {
				height: 45px;
				max-width: 267px;
				background: #3c3c3c;
				border-color: #515151;
				color: $light-text-color;
				padding: 10px 43px 10px 12px;
				display: inline-block;
				float: left;
				&:focus {
					@include box-shadow(black 0px 0px 0px);
				}
			}
			.button-small {
				margin-left: -43px;
				border: none;
				background: none;
				text-align: center;
				color: #908f8f;
				padding: 8px;
				&:before {
					content: "\f138";
					font-family: $font-icon;
					font-size: 28px;
					line-height: 28px;
				}
				&:hover {
					color: $light-text-color !important;
				}
				span{
					display: none;
				}
			}
		}
		.warning_inline {
			display: block;
			color: #f13340;
			font-size: 13px;
			line-height :26px;
			clear: both;
			@media (min-width: $screen-lg) { // min 1200px
				display: inline-block;
				position: relative;
				top: -35px;
				margin-bottom: -35px;
				left: 15px;
				clear: none;
			}
		}
		.newsletter-input {
  			max-width: 300px !important;
  		}
	}
}<?php }} ?>
