<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-vertical-align.scss" */ ?>
<?php /*%%SmartyHeaderCode:1535077382554074b0e1fc80-77328098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda786d602bcb2800da51abfae231a488293296b' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-vertical-align.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1535077382554074b0e1fc80-77328098',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0e38783_40816873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0e38783_40816873')) {function content_554074b0e38783_40816873($_smarty_tpl) {?>// Navbar vertical align
//
// Vertically center elements in the navbar.
// Example: an element has a height of 30px, so write out `.navbar-vertical-align(30px);` to calculate the appropriate top margin.

@mixin navbar-vertical-align($element-height) {
  margin-top: (($navbar-height - $element-height) / 2);
  margin-bottom: (($navbar-height - $element-height) / 2);
}
<?php }} ?>
