<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_breadcrumbs.scss" */ ?>
<?php /*%%SmartyHeaderCode:1498217001554074b096fd78-95057503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d512964a9cc633ae8d39ce63cb6011a46a09ac5' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_breadcrumbs.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1498217001554074b096fd78-95057503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b099eef3_87397538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b099eef3_87397538')) {function content_554074b099eef3_87397538($_smarty_tpl) {?>//
// Breadcrumbs
// --------------------------------------------------


.breadcrumb {
  padding: $breadcrumb-padding-vertical $breadcrumb-padding-horizontal;
  margin-bottom: $line-height-computed;
  list-style: none;
  background-color: $breadcrumb-bg;
  border-radius: $border-radius-base;

  > li {
    display: inline-block;

    + li:before {
      content: "#<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value-'separator';?>
\00a0"; // Unicode space added since inline-block means non-collapsing white-space
      padding: 0 5px;
      color: $breadcrumb-color;
    }
  }

  > .active {
    color: $breadcrumb-active-color;
  }
}
<?php }} ?>
