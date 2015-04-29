<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/my-account.scss" */ ?>
<?php /*%%SmartyHeaderCode:1704160296554074ab157757-87207652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09bafd9075cf5cf72e33861cb4814694df01b179' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/my-account.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1704160296554074ab157757-87207652',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ab15e237_35322319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ab15e237_35322319')) {function content_554074ab15e237_35322319($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
#my-account {
	.addresses-lists {
		margin-bottom: 30px;
	}
	ul.myaccount-link-list {
		li {
			overflow: hidden;
			padding-bottom: 10px;
			a {
				display: block;
				overflow: hidden;
				font: 600 16px/20px $font-custom;
				color: #555454;
				text-shadow: 0px 1px rgba(255,255,255,1);
				text-transform: uppercase;
				text-decoration: none;
				position: relative;
				border: 1px solid;
				border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
				@include background-image(linear-gradient(rgb(247,247,247), rgb(237,237,237)));
				@include border-radius(4px);
				i {
					font-size: 25px;
					color: #fd7e01;
					position: absolute;
					left: 0;
					top: 0;
					width: 52px;
					height: 100%;
					padding: 10px 0 0 0;
					text-align: center;
					border: 1px solid $light-border-color;
					@include border-top-left-radius(4px);
					@include border-bottom-left-radius(4px);
				}
				span {
					display: block;
					padding: 13px 15px 15px 17px;
					overflow: hidden;
					border: 1px solid;
					margin-left: 52px;
					border-color: $light-border-color $light-border-color $light-border-color #c8c8c8;
					@include border-top-right-radius(5px);
					@include border-bottom-right-radius(5px);
				}
				&:hover {
					filter: none;
					background: #e7e7e7;
					border-color: #9e9e9e #c2c2c2 #c8c8c8 #c2c2c2;
				}
			}
		}
	}
}<?php }} ?>
