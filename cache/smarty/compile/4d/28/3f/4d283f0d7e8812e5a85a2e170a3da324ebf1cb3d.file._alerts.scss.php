<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_alerts.scss" */ ?>
<?php /*%%SmartyHeaderCode:883525954554074b0c1a250-71058319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d283f0d7e8812e5a85a2e170a3da324ebf1cb3d' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_alerts.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883525954554074b0c1a250-71058319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0c2d638_94849701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0c2d638_94849701')) {function content_554074b0c2d638_94849701($_smarty_tpl) {?>// Alerts

@mixin alert-variant($background, $border, $text-color) {
  background-color: $background;
  border-color: $border;
  color: $text-color;

  hr {
    border-top-color: darken($border, 5%);
  }
  .alert-link {
    color: darken($text-color, 10%);
  }
}
<?php }} ?>
