<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_wells.scss" */ ?>
<?php /*%%SmartyHeaderCode:595953899554074b1954644-92222194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c948c9fcdfcb10dde792692c07e1cb44c99dfbac' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_wells.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '595953899554074b1954644-92222194',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1958246_57505427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1958246_57505427')) {function content_554074b1958246_57505427($_smarty_tpl) {?>//
// Wells
// --------------------------------------------------


// Base class
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: $well-bg;
  border: 1px solid $well-border;
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
