<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_reset-filter.scss" */ ?>
<?php /*%%SmartyHeaderCode:47034702554074b0dba869-07574786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d4b166f0ef466819e39b0c3657829a954d3352' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_reset-filter.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47034702554074b0dba869-07574786',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0dbc4c4_36381291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0dbc4c4_36381291')) {function content_554074b0dbc4c4_36381291($_smarty_tpl) {?>// Reset filters for IE
//
// When you need to remove a gradient background, do not forget to use this to reset
// the IE filter for IE9 and below.

@mixin reset-filter() {
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
<?php }} ?>
