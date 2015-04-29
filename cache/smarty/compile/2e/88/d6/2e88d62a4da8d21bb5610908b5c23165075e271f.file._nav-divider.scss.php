<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-divider.scss" */ ?>
<?php /*%%SmartyHeaderCode:1585635769554074b0ddf346-41221222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e88d62a4da8d21bb5610908b5c23165075e271f' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-divider.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1585635769554074b0ddf346-41221222',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0de0d10_11421701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0de0d10_11421701')) {function content_554074b0de0d10_11421701($_smarty_tpl) {?>// Horizontal dividers
//
// Dividers (basically an hr) within dropdowns and nav lists

@mixin nav-divider($color: #e5e5e5) {
  height: 1px;
  margin: (($line-height-computed / 2) - 1) 0;
  overflow: hidden;
  background-color: $color;
}
<?php }} ?>
