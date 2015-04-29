<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_labels.scss" */ ?>
<?php /*%%SmartyHeaderCode:1728186029554074b0ca3c90-89164969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce29e54defbfb3253fae3c6d283291090aea9e3' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_labels.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728186029554074b0ca3c90-89164969',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0ca6d16_84200084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0ca6d16_84200084')) {function content_554074b0ca6d16_84200084($_smarty_tpl) {?>// Labels

@mixin label-variant($color) {
  background-color: $color;
  
  &[href] {
    &:hover,
    &:focus {
      background-color: darken($color, 10%);
    }
  }
}
<?php }} ?>
