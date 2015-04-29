<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_pagination.scss" */ ?>
<?php /*%%SmartyHeaderCode:1646359003554074b0e33292-03497405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e5cc66b7642538dfb89f2984181baad497db56' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_pagination.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1646359003554074b0e33292-03497405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0e39c74_66461199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0e39c74_66461199')) {function content_554074b0e39c74_66461199($_smarty_tpl) {?>// Pagination

@mixin pagination-size($padding-vertical, $padding-horizontal, $font-size, $border-radius) {
  > li {
    > a,
    > span {
      padding: $padding-vertical $padding-horizontal;
      font-size: $font-size;
    }
    &:first-child {
      > a,
      > span {
        @include border-left-radius($border-radius);
      }
    }
    &:last-child {
      > a,
      > span {
        @include border-right-radius($border-radius);
      }
    }
  }
}
<?php }} ?>
