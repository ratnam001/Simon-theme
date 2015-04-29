<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/print.scss" */ ?>
<?php /*%%SmartyHeaderCode:250896603554074a9add181-20999524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab8ec54eb26fdc3d950fac569afe0c3ddd0b9833' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/print.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250896603554074a9add181-20999524',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9b5d363_00989177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9b5d363_00989177')) {function content_554074a9b5d363_00989177($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

@media only print {
	#header {
		.nav, .banner, .row > div {
			display:none;
		}
		.row div#header_logo {
			display:block;
		}
	}
	#center_column {
		width:100% !important;
	}
	#left_column, #right_column {
		display:none;
	}
	.no-print, #quantity_wanted_p > a, a.quick-view {
		display:none !important;
	}
	div.selector, div.selector span, div.selector select {
		background:none;
	}
	#thumbs_list li a:hover, #thumbs_list li a.shown {
		border-color:#fff;
	}
	.product_attributes, .box-cart-bottom {
		@include box-shadow(none);
	}
	.pb-left-column #views_block {
		margin-top:10px;
		width:278px !important;
	}
	#thumbs_list_frame, #thumbs_list {
		width:100% !important;
		height:100% !important;
	}
	#thumbs_list {
		li, li:first-child {
			margin:4px ;
			width:82px;
			height:82px;
		}
	}
	#view_scroll_left, #view_scroll_right, .view_scroll_spacer {
		display:none !important;
	}
	.bx-wrapper {
		width:100% !important;
		max-width:100% !important;
	}
	.bx-viewport {
		height:auto !important;
	}
	#bxslider, #bxslider1, #crossselling_list_car {
		width:100% !important;
		height:auto !important;
		overflow:visible !important;
	}
	#bxslider1 {
		.product-box {
			min-height:200px;
		}
	}
	.bx-controls-direction {
		display:none;
	}
	#footer {
		.row {
			>div, >section {
				display:none;
				&#block_contact_infos {
					display:block;
					width:100%;
					border-left:none;
					border-top:1px solid #515151;
					padding-top:20px;
				}
			}
		}
	}
	.footer-container #footer h4:after {
		display:none;
	}
}<?php }} ?>
