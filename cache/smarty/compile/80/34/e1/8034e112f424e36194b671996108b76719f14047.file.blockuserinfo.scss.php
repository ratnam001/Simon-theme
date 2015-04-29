<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockuserinfo/blockuserinfo.scss" */ ?>
<?php /*%%SmartyHeaderCode:498704479554074aa412e65-33697262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8034e112f424e36194b671996108b76719f14047' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockuserinfo/blockuserinfo.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498704479554074aa412e65-33697262',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa416707_37204473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa416707_37204473')) {function content_554074aa416707_37204473($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
.header_user_info {
	float: right;
	border-left: 1px solid #515151;
	border-right: 1px solid #515151;
	a {
		color: $light-text-color;
		font-weight: bold;
		display: block;
		padding: 8px 9px 11px 8px;
		cursor: pointer;
		line-height:18px;
		@media (max-width: $screen-xs - 1) {
			font-size: 11px;
		}
		&:hover, &.active {
			background: #2b2b2b;
		}
	}
}<?php }} ?>
