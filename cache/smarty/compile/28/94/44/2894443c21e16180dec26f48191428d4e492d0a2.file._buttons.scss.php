<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_buttons.scss" */ ?>
<?php /*%%SmartyHeaderCode:394168884554074b1917789-83986094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2894443c21e16180dec26f48191428d4e492d0a2' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_buttons.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '394168884554074b1917789-83986094',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1951ee2_37287512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1951ee2_37287512')) {function content_554074b1951ee2_37287512($_smarty_tpl) {?>//
// Buttons
// --------------------------------------------------


// Base styles
// --------------------------------------------------

.btn {
  display: inline-block;
  margin-bottom: 0; // For input.btn
  font-weight: $btn-font-weight;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid transparent;
  white-space: nowrap;
  @include button-size($padding-base-vertical, $padding-base-horizontal, $font-size-base, $line-height-base, $border-radius-base);
  @include user-select(none);

  &,
  &:active,
  &.active {
    &:focus {
      @include tab-focus();
    }
  }

  &:hover,
  &:focus {
    color: $btn-default-color;
    text-decoration: none;
  }

  &:active,
  &.active {
    outline: 0;
    background-image: none;
    @include box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }

  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
    pointer-events: none; // Future-proof disabling of clicks
    @include opacity(.65);
    @include box-shadow(none);
  }
}


// Alternate buttons
// --------------------------------------------------

.btn-default {
  @include button-variant($btn-default-color, $btn-default-bg, $btn-default-border);
}
.btn-primary {
  @include button-variant($btn-primary-color, $btn-primary-bg, $btn-primary-border);
}
// Success appears as green
.btn-success {
  @include button-variant($btn-success-color, $btn-success-bg, $btn-success-border);
}
// Info appears as blue-green
.btn-info {
  @include button-variant($btn-info-color, $btn-info-bg, $btn-info-border);
}
// Warning appears as orange
.btn-warning {
  @include button-variant($btn-warning-color, $btn-warning-bg, $btn-warning-border);
}
// Danger and error appear as red
.btn-danger {
  @include button-variant($btn-danger-color, $btn-danger-bg, $btn-danger-border);
}


// Link buttons
// -------------------------

// Make a button look and behave like a link
.btn-link {
  color: $link-color;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0;

  &,
  &:active,
  &[disabled],
  fieldset[disabled] & {
    background-color: transparent;
    @include box-shadow(none);
  }
  &,
  &:hover,
  &:focus,
  &:active {
    border-color: transparent;
  }
  &:hover,
  &:focus {
    color: $link-hover-color;
    text-decoration: underline;
    background-color: transparent;
  }
  &[disabled],
  fieldset[disabled] & {
    &:hover,
    &:focus {
      color: $btn-link-disabled-color;
      text-decoration: none;
    }
  }
}


// Button Sizes
// --------------------------------------------------

.btn-lg {
  // line-height: ensure even-numbered height of button next to large input
  @include button-size($padding-large-vertical, $padding-large-horizontal, $font-size-large, $line-height-large, $border-radius-large);
}
.btn-sm {
  // line-height: ensure proper height of button next to small input
  @include button-size($padding-small-vertical, $padding-small-horizontal, $font-size-small, $line-height-small, $border-radius-small);
}
.btn-xs {
  @include button-size($padding-xs-vertical, $padding-xs-horizontal, $font-size-small, $line-height-small, $border-radius-small);
}


// Block button
// --------------------------------------------------

.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

// Vertically space out multiple block buttons
.btn-block + .btn-block {
  margin-top: 5px;
}

// Specificity overrides
input[type="submit"],
input[type="reset"],
input[type="button"] {
  &.btn-block {
    width: 100%;
  }
}
<?php }} ?>
