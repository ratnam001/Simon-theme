<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/category.scss" */ ?>
<?php /*%%SmartyHeaderCode:1217684161554074aadd8c88-31500128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732beddd079afb0093a987f270052794f47d3e81' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/category.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1217684161554074aadd8c88-31500128',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aae18d03_16576247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aae18d03_16576247')) {function content_554074aae18d03_16576247($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/* ************************************************************************************************
								Categories Page Styles
************************************************************************************************ */
.content_scene_cat {
	border-top: 5px solid $dark-border-color;
	color: #d7d7d7;
	line-height: 19px;
	margin: 0 0 26px 0;
	.content_scene_cat_bg {
		padding: 18px 10px 10px 42px;
		background-color: #464646 !important;
		@media  (max-width: $screen-md-max) { // max 1199px
			padding: 10px 10px 10px 15px;
		}
	}
	span.category-name {
		font: 600 42px/51px $font-custom;
		color: $light-text-color;
		margin-bottom: 12px;
		@media  (max-width: $screen-md-max) { // max 1199px
			font-size: 25px;
			line-height: 30px;
		}
	}
	p {
		margin-bottom: 0;
	}
	a {
		color: $light-text-color;
		&:hover {
			text-decoration: underline;
		}
	}
	.content_scene {
		color: $base-body-color;
		.cat_desc {
			padding-top: 20px;
			a {
				color: $link-color;
				&:hover {
					color: $link-hover-color;
				}
			}
		}
	}
}

/* ************************************************************************************************
									Sub Categories Styles
************************************************************************************************ */

#subcategories {
	border-top: 1px solid $base-border-color;
	padding: 15px 0 0px 0;
	p.subcategory-heading {
		font-weight: bold;
		color: $base-text-color;
		margin: 0 0 15px 0;
	}
	ul {
		margin: 0 0 0 -20px;
		li {
			float: left;
			width: 145px;
			margin: 0 0 13px 33px;
			text-align: center;
			height: 202px;
			.subcategory-image {
				padding: 0 0 8px 0;
				a {
					display: block;
					padding: 9px;
					border: 1px solid $base-border-color;
					img {
						max-width: 100%;
						vertical-align: top;
					}
				}
			}
			.subcategory-name {
				font: 600 18px/22px $font-custom;
				color: $base-heading-color;
				text-transform: uppercase;
				&:hover {
					color: $link-hover-color;
				}
			}
			.cat_desc {
				display: none;
			}
			&:hover {
				.subcategory-image {
					a {
						border: 5px solid $dark-border-color;
						padding: 5px;
					}
				}
			}
		}
	}
}<?php }} ?>
