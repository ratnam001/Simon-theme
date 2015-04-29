<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_pagination.scss" */ ?>
<?php /*%%SmartyHeaderCode:295496218554074a9a914f3-70950318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36bd6146f563d471acf1e40a5a64d8a493cea0d1' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_pagination.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295496218554074a9a914f3-70950318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9ad94c5_13074275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9ad94c5_13074275')) {function content_554074a9ad94c5_13074275($_smarty_tpl) {?>//
// Pagination (multiple pages)
// --------------------------------------------------
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: $line-height-computed 0;
  border-radius: $border-radius-base;

  > li {
    display: inline; // Remove list-style and block-level defaults
    > a,
    > span {
      position: relative;
      float: left; // Collapse white-space
      padding: $padding-base-vertical $padding-base-horizontal;
      line-height: $line-height-base;
      text-decoration: none;
      background-color: $pagination-bg;
      border: 1px solid $pagination-border;
      margin-left: -1px;
    }
    &:first-child {
      > a,
      > span {
        margin-left: 0;
        @include border-left-radius($border-radius-base);
      }
    }
    &:last-child {
      > a,
      > span {
        @include border-right-radius($border-radius-base);
      }
    }
  }

  > li > a,
  > li > span {
    &:hover,
    &:focus {
      background-color: $pagination-hover-bg;
    }
  }

  > .active > a,
  > .active > span {
    &,
    &:hover,
    &:focus {
      z-index: 2;
      color: $pagination-active-color;
      background-color: $pagination-active-bg;
      border-color: $pagination-active-bg;
      cursor: default;
    }
  }

  > .disabled {
    > span,
    > a,
    > a:hover,
    > a:focus {
      color: $pagination-disabled-color;
      background-color: $pagination-bg;
      border-color: $pagination-border;
      cursor: not-allowed;
    }
  }
}

// Sizing
// --------------------------------------------------

// Large
.pagination-lg {
  @include pagination-size($padding-large-vertical, $padding-large-horizontal, $font-size-large, $border-radius-large);
}

// Small
.pagination-sm {
  @include pagination-size($padding-small-vertical, $padding-small-horizontal, $font-size-small, $border-radius-small);
}
<?php }} ?>
