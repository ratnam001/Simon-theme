<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/sitemap.scss" */ ?>
<?php /*%%SmartyHeaderCode:1632437899554074aa850602-44252868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41be413260021554809573f2050322d0bb1997c7' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/sitemap.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1632437899554074aa850602-44252868',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa88a063_54961004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa88a063_54961004')) {function content_554074aa88a063_54961004($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/******************************************************************
					Sitemap Page Styles
*******************************************************************/
#sitemap {
	.sitemap_block {
		.page-subheading {
			margin-bottom: 16px;
		}
		li {
			line-height: 16px;
			padding-bottom: 11px;
			a {
				&:before {
					content: "\f105";
					display: inline-block;
					font-family: $font-icon;
					padding-right: 10px;
				}
				&:hover {
					font-weight: bold;
				}
			}
		}
	}
}

#listpage_content div.tree_top {
	padding: 5px 0 0 27px;
	a {
		&:before {
			content: "\f015";
			display: inline-block;
			font-family: $font-icon;
			font-size: 20px;
			color: $base-text-color;
		}
		&:hover {
			&:before {
				color: $link-hover-color;
			}
		}
	}
}

ul.tree {
	padding-left: 24px;
	li {
		margin: 0 0 0 21px;
		padding: 5px 0 0 33px;
		border-left: 1px solid $base-border-color;
		background: url(../img/sitemap-horizontal.png) no-repeat left 15px transparent;
		a:hover {
			font-weight: bold;
		}
	}
	> li {
		margin: 0 0 0 11px;
	}
	li.last {
		border: medium none;
		background: url(../img/sitemap-last.png) no-repeat 0px -4px transparent;
	}
}<?php }} ?>
