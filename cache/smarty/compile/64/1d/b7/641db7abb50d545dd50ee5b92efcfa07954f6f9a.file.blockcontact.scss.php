<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockcontact/blockcontact.scss" */ ?>
<?php /*%%SmartyHeaderCode:854021982554074aa2818d3-49619557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '641db7abb50d545dd50ee5b92efcfa07954f6f9a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockcontact/blockcontact.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '854021982554074aa2818d3-49619557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa28d039_32144049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa28d039_32144049')) {function content_554074aa28d039_32144049($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
.shop-phone {
	float: left;
	padding: 5px 0 10px;
	line-height:18px;
	@media (max-width: $screen-xs-max) {
		display: none;
	}
	i {
		font-size: 21px;
		line-height: 21px;
		color: $light-text-color;
		padding-right: 7px;
	}
	strong {
		color: $light-text-color;
	}
}
#contact-link {
	float: right;
	border-left: 1px solid #515151;
	@media (max-width: $screen-xs - 1) {
		width: 25%;
		text-align: center;
	}
	a {
		display: block;
		color: $light-text-color;
		font-weight: bold;
		padding: 8px 10px 11px 10px;
		text-shadow: 1px 1px rgba(0,0,0,0.2);
		cursor: pointer;
		line-height:18px;
		@media (max-width: $screen-xs - 1) {
			font-size: 11px;
			padding-left: 5px;
			padding-right: 5px;
		}
		&:hover, &.active {
			background: #2b2b2b;
		}
	}
}
#contact_block {
	@media (max-width: $screen-xs-max) { // max 767px
		margin-bottom: 20px;
	}
	.label {
		display: none
	}
	.block_content {
		color: #888888;
	}
	p {
		margin-bottom: 4px;
	}
	p.tel {
		font: 400 17px/21px $font-family;
		color: $base-text-color;
		margin-bottom: 6px;
		i {
			font-size: 25px;
			vertical-align: -2px;
			padding-right: 10px;
		}
	}
}
<?php }} ?>
