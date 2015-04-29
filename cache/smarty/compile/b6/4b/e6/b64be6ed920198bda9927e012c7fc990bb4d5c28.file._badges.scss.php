<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_badges.scss" */ ?>
<?php /*%%SmartyHeaderCode:879269354554074b08967c8-85632848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b64be6ed920198bda9927e012c7fc990bb4d5c28' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_badges.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879269354554074b08967c8-85632848',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b089cec3_27148324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b089cec3_27148324')) {function content_554074b089cec3_27148324($_smarty_tpl) {?>//
// Badges
// --------------------------------------------------


// Base class
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: $font-size-small;
  font-weight: $badge-font-weight;
  color: $badge-color;
  line-height: $badge-line-height;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: $badge-bg;
  border-radius: $badge-border-radius;

  // Empty badges collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for badges in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
  .btn-xs & {
    top: 0;
    padding: 1px 5px;
  }

  // [converter] extracted a& to a.badge

  // Account for badges in navs
  a.list-group-item.active > &,
  .nav-pills > .active > a > & {
    color: $badge-active-color;
    background-color: $badge-active-bg;
  }
  .nav-pills > li > a > & {
    margin-left: 3px;
  }
}

// Hover state, but only for links
a.badge {
  &:hover,
  &:focus {
    color: $badge-link-hover-color;
    text-decoration: none;
    cursor: pointer;
  }
}
<?php }} ?>
