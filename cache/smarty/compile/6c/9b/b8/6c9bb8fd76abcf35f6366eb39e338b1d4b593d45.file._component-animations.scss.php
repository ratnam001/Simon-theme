<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_component-animations.scss" */ ?>
<?php /*%%SmartyHeaderCode:822810953554074a8850ec9-27817855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9bb8fd76abcf35f6366eb39e338b1d4b593d45' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_component-animations.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '822810953554074a8850ec9-27817855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a8875125_71174889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a8875125_71174889')) {function content_554074a8875125_71174889($_smarty_tpl) {?>//
// Component animations
// --------------------------------------------------

// Heads up!
//
// We don't use the `.opacity()` mixin here since it causes a bug with text
// fields in IE7-8. Source: https://github.com/twitter/bootstrap/pull/3552.

.fade {
  opacity: 0;
  @include transition(opacity .15s linear);
  &.in {
    opacity: 1;
  }
}

.collapse {
  display: none;
  &.in {
    display: block;
  }
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  @include transition(height .35s ease);
}
<?php }} ?>
