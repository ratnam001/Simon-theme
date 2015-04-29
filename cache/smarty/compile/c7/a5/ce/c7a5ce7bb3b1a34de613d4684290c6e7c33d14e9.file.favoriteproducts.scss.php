<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/favoriteproducts/favoriteproducts.scss" */ ?>
<?php /*%%SmartyHeaderCode:587225009554074aa801a55-89441704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7a5ce7bb3b1a34de613d4684290c6e7c33d14e9' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/favoriteproducts/favoriteproducts.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '587225009554074aa801a55-89441704',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa836789_85123535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa836789_85123535')) {function content_554074aa836789_85123535($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

#favoriteproducts_block_account{
	.favoriteproduct {
		position:relative;
		margin-bottom: 14px;
		padding: 12px 8px;
		border: 1px solid $base-border-color;
		@include border-radius(3px);
		a.product_img_link {
			border: 1px solid $base-border-color;
			display: block;
			float: left;
			margin-right: 14px;
			overflow: hidden;
			position: relative;
		}
		p.product_desc {
			line-height: 16px;
			overflow: hidden;
			padding: 0;
		}
		.remove {
			position:absolute;
			top:10px;
			right:10px;
			.icon {
				cursor:pointer;
			}
		}
	}
}

/* lnk fiche produit */
#usefull_link_block {
	li{
		&#favoriteproducts_block_extra_add,
		&#favoriteproducts_block_extra_remove,
		&#favoriteproducts_block_extra_added,
		&#favoriteproducts_block_extra_removed{
			padding-left: 30px;
			cursor: pointer;
		}
		&#favoriteproducts_block_extra_added {
			display: none;
		}
		&#favoriteproducts_block_extra_removed {
			display: none;
		}
	}
}<?php }} ?>
