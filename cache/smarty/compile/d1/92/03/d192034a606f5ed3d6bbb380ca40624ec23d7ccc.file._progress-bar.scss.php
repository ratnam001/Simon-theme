<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_progress-bar.scss" */ ?>
<?php /*%%SmartyHeaderCode:1375793151554074b0ae77e6-38406012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd192034a606f5ed3d6bbb380ca40624ec23d7ccc' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_progress-bar.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375793151554074b0ae77e6-38406012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0aeb1e4_95431101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0aeb1e4_95431101')) {function content_554074b0aeb1e4_95431101($_smarty_tpl) {?>// Progress bars

@mixin progress-bar-variant($color) {
  background-color: $color;
  .progress-striped & {
    @include gradient-striped();
  }
}
<?php }} ?>
