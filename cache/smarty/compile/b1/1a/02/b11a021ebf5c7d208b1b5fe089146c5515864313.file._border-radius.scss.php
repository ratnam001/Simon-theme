<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_border-radius.scss" */ ?>
<?php /*%%SmartyHeaderCode:1413267101554074b0ddd477-57158020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11a021ebf5c7d208b1b5fe089146c5515864313' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_border-radius.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1413267101554074b0ddd477-57158020',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0de1233_22710979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0de1233_22710979')) {function content_554074b0de1233_22710979($_smarty_tpl) {?>// Single side border-radius

@mixin border-top-radius($radius) {
  border-top-right-radius: $radius;
   border-top-left-radius: $radius;
}
@mixin border-right-radius($radius) {
  border-bottom-right-radius: $radius;
     border-top-right-radius: $radius;
}
@mixin border-bottom-radius($radius) {
  border-bottom-right-radius: $radius;
   border-bottom-left-radius: $radius;
}
@mixin border-left-radius($radius) {
  border-bottom-left-radius: $radius;
     border-top-left-radius: $radius;
}
<?php }} ?>
