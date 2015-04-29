<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/productscategory/css/productscategory.scss" */ ?>
<?php /*%%SmartyHeaderCode:279010795554074aa6b6910-12793572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb50033e951dfd95ddbcbeaabd1c178d6e542a47' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/productscategory/css/productscategory.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279010795554074aa6b6910-12793572',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa6bb691_88386219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa6bb691_88386219')) {function content_554074aa6bb691_88386219($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

#productscategory_list {
		.product-name{
			margin-bottom: 5px;
			a{
				font-size: 15px;
				line-height: 18px;
				color: $product-name-color;
				&:hover{
					color: $product-name-hover-color;
				}
			}
		}
		.exclusive span{
			font-size: 13px;
			line-height: 18px;
			padding: 2px 8px 3px;
			text-decoration: none;
			&:focus,
			&:active{
				text-decoration: none;
			}
		}
}
<?php }} ?>
