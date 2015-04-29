<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_size.scss" */ ?>
<?php /*%%SmartyHeaderCode:245928347554074b0cf6850-81919045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0cf41d1e2af987e0292b38bdcf1165254eb260' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_size.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245928347554074b0cf6850-81919045',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0d18a99_59830929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0d18a99_59830929')) {function content_554074b0d18a99_59830929($_smarty_tpl) {?>// Sizing shortcuts

@mixin size($width, $height) {
  width: $width;
  height: $height;
}

@mixin square($size) {
  @include size($size, $size);
}
<?php }} ?>
