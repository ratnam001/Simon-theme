<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_hide-text.scss" */ ?>
<?php /*%%SmartyHeaderCode:1865077809554074b0d47ca2-42684646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a83e5e5686efe9ab5f0a296036460f92a303371' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_hide-text.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865077809554074b0d47ca2-42684646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0d4d701_88670157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0d4d701_88670157')) {function content_554074b0d4d701_88670157($_smarty_tpl) {?>// CSS image replacement
//
// Heads up! v3 launched with with only `.hide-text()`, but per our pattern for
// mixins being reused as classes with the same name, this doesn't hold up. As
// of v3.0.1 we have added `.text-hide()` and deprecated `.hide-text()`.
//
// Source: https://github.com/h5bp/html5-boilerplate/commit/aa0396eae757

// Deprecated as of v3.0.1 (will be removed in v4)
@mixin hide-text() {
  font: #<?php echo 0/0;?>
 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

// New mixin to use as of v3.0.1
@mixin text-hide() {
  @include hide-text();
}
<?php }} ?>
