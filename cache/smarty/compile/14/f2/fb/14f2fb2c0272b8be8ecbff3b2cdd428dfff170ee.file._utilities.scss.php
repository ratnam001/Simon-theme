<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_utilities.scss" */ ?>
<?php /*%%SmartyHeaderCode:1654070756554074b1aa5467-62623353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14f2fb2c0272b8be8ecbff3b2cdd428dfff170ee' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_utilities.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1654070756554074b1aa5467-62623353',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1abcf01_68703949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1abcf01_68703949')) {function content_554074b1abcf01_68703949($_smarty_tpl) {?>//
// Utility classes
// --------------------------------------------------


// Floats
// -------------------------

.clearfix {
  @include clearfix();
}
.center-block {
  @include center-block();
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}


// Toggling content
// -------------------------

// Note: Deprecated .hide in favor of .hidden or .sr-only (as appropriate) in v3.0.1
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  @include text-hide();
}


// Hide from screenreaders and browsers
//
// Credit: HTML5 Boilerplate

.hidden {
  display: none !important;
  visibility: hidden !important;
}


// For Affix plugin
// -------------------------

.affix {
  position: fixed;
}
<?php }} ?>
