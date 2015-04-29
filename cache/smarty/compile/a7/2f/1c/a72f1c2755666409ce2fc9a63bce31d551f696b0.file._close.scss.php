<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_close.scss" */ ?>
<?php /*%%SmartyHeaderCode:1148438394554074b0f2d2a9-32218358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a72f1c2755666409ce2fc9a63bce31d551f696b0' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_close.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1148438394554074b0f2d2a9-32218358',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0f304a7_21791307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0f304a7_21791307')) {function content_554074b0f304a7_21791307($_smarty_tpl) {?>//
// Close icons
// --------------------------------------------------


.close {
  float: right;
  font-size: ($font-size-base * 1.5);
  font-weight: $close-font-weight;
  line-height: 1;
  color: $close-color;
  text-shadow: $close-text-shadow;
  @include opacity(.2);

  &:hover,
  &:focus {
    color: $close-color;
    text-decoration: none;
    cursor: pointer;
    @include opacity(.5);
  }

  // [converter] extracted button& to button.close
}

// Additional properties for button version
// iOS requires the button element instead of an anchor tag.
// If you want the anchor version, it requires `href="#"`.
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
<?php }} ?>
