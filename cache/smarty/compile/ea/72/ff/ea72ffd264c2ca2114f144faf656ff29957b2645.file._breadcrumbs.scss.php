<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_breadcrumbs.scss" */ ?>
<?php /*%%SmartyHeaderCode:655876650554074a88a8946-59672332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea72ffd264c2ca2114f144faf656ff29957b2645' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_breadcrumbs.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '655876650554074a88a8946-59672332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a88ac516_89186218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a88ac516_89186218')) {function content_554074a88ac516_89186218($_smarty_tpl) {?>//
// Breadcrumbs
// --------------------------------------------------


.breadcrumb {
  padding: 8px 15px;
  margin-bottom: $line-height-computed;
  list-style: none;
  background-color: $breadcrumb-bg;
  border-radius: $border-radius-base;
  > li {
    display: inline-block;
    &+li:before {
      content: "/\00a0"; // Unicode space added since inline-block means non-collapsing white-space
      padding: 0 5px;
      color: $breadcrumb-color;
    }
  }
  > .active {
    color: $breadcrumb-active-color;
  }
}
<?php }} ?>
