<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocklanguages/blocklanguages.scss" */ ?>
<?php /*%%SmartyHeaderCode:586665666554074aa41bd50-63285601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6520e22583080a53c2eb9ea79be375673ef117b' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocklanguages/blocklanguages.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '586665666554074aa41bd50-63285601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa45ac80_75498895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa45ac80_75498895')) {function content_554074aa45ac80_75498895($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
#languages-block-top {
	float: right;
	border-left: 1px solid #515151;
	position: relative;
	// max 479px
	@media (max-width: $screen-xs - 1) {
		width: 25%;
	}
	span.firstWord {
		display: none;
	}
	div.current {
		font-weight: bold;
		padding: 8px 10px 10px 10px;
		line-height:18px;
		color: $light-text-color;
		text-shadow: 1px 1px rgba(0,0,0,0.2);
		cursor: pointer;
		@media (max-width: $screen-xs - 1) {
			text-align: center;
			padding: 9px 5px 10px;
			font-size: 11px;
		}
		strong {
			color: #777777;
		}
		&:after {
			content: "\f0d7";
			font-family: $font-icon;
			font-size: 18px;
			line-height: 18px;
			color: #686666;
			vertical-align: -2px;
			padding-left: 12px;
			// max 479px
			@media (max-width: $screen-xs - 1) {
				padding-left: 2px;
				font-size: 13px;
				line-height: 13px;
				vertical-align: 0;
			}
		}
		.cur-label {
			// max 479px
			@media (max-width: $screen-xs - 1) {
				display: none;
			}
		}
	}
	ul {
		display: none;
		position: absolute;
		top: 37px;
		left: 0;
		width: 157px;
		background: $dark-background;
		z-index: 2;
		li {
			color: $light-text-color;
			line-height: 35px;
			font-size: 13px;
			a,
			> span {
				padding: 0 10px 0 12px;
				display: block;
				color: $light-text-color;
			}
			&.selected, &:hover a {
				background: #484848;
			}
		}
	}
}<?php }} ?>
