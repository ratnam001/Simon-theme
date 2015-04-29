<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_wells.scss" */ ?>
<?php /*%%SmartyHeaderCode:469769340554074a9882036-72316746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eeebc3972e84ee9edc80fbd789838c7a646b265' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_wells.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469769340554074a9882036-72316746',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a98b5096_59784953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a98b5096_59784953')) {function content_554074a98b5096_59784953($_smarty_tpl) {?>//
// Wells
// --------------------------------------------------


// Base class
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: $well-bg;
  border: 1px solid darken($well-bg, 7%);
  border-radius: $border-radius-base;
  @include box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
  blockquote {
    border-color: #ddd;
    border-color: rgba(0,0,0,.15);
  }
}

// Sizes
.well-lg {
  padding: 24px;
  border-radius: $border-radius-large;
}
.well-sm {
  padding: 9px;
  border-radius: $border-radius-small;
}
<?php }} ?>
