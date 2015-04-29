<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_buttons.scss" */ ?>
<?php /*%%SmartyHeaderCode:561663027554074b0cef957-63938114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc0c8e2195ceb605b1eb5e77627013eb138a216e' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_buttons.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '561663027554074b0cef957-63938114',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0cfe0a5_06581297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0cfe0a5_06581297')) {function content_554074b0cfe0a5_06581297($_smarty_tpl) {?>// Button variants
//
// Easily pump out default styles, as well as :hover, :focus, :active,
// and disabled options for all buttons

@mixin button-variant($color, $background, $border) {
  color: $color;
  background-color: $background;
  border-color: $border;

  &:hover,
  &:focus,
  &:active,
  &.active,
  .open > &.dropdown-toggle {
    color: $color;
    background-color: darken($background, 10%);
        border-color: darken($border, 12%);
  }
  &:active,
  &.active,
  .open > &.dropdown-toggle {
    background-image: none;
  }
  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    &,
    &:hover,
    &:focus,
    &:active,
    &.active {
      background-color: $background;
          border-color: $border;
    }
  }

  .badge {
    color: $background;
    background-color: $color;
  }
}

// Button sizes
@mixin button-size($padding-vertical, $padding-horizontal, $font-size, $line-height, $border-radius) {
  padding: $padding-vertical $padding-horizontal;
  font-size: $font-size;
  line-height: $line-height;
  border-radius: $border-radius;
}
<?php }} ?>
