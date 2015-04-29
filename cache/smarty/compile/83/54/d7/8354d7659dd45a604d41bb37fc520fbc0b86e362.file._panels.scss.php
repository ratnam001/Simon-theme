<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_panels.scss" */ ?>
<?php /*%%SmartyHeaderCode:1792006895554074b0c2fb68-65298742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8354d7659dd45a604d41bb37fc520fbc0b86e362' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_panels.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1792006895554074b0c2fb68-65298742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0c34166_56730708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0c34166_56730708')) {function content_554074b0c34166_56730708($_smarty_tpl) {?>// Panels

@mixin panel-variant($border, $heading-text-color, $heading-bg-color, $heading-border) {
  border-color: $border;

  & > .panel-heading {
    color: $heading-text-color;
    background-color: $heading-bg-color;
    border-color: $heading-border;

    + .panel-collapse > .panel-body {
      border-top-color: $border;
    }
  }
  & > .panel-footer {
    + .panel-collapse > .panel-body {
      border-bottom-color: $border;
    }
  }
}
<?php }} ?>
