<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_popovers.scss" */ ?>
<?php /*%%SmartyHeaderCode:1438067951554074b0f320c8-93055913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b18d04067fd85b996634dee2d708e955079db2' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_popovers.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1438067951554074b0f320c8-93055913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b10372a5_22883430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b10372a5_22883430')) {function content_554074b10372a5_22883430($_smarty_tpl) {?>//
// Popovers
// --------------------------------------------------


.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: $zindex-popover;
  display: none;
  max-width: $popover-max-width;
  padding: 1px;
  text-align: left; // Reset given new insertion method
  background-color: $popover-bg;
  background-clip: padding-box;
  border: 1px solid $popover-fallback-border-color;
  border: 1px solid $popover-border-color;
  border-radius: $border-radius-large;
  @include box-shadow(0 5px 10px rgba(0,0,0,.2));

  // Overrides for proper insertion
  white-space: normal;

  // Offset the popover to account for the popover arrow
  &.top     { margin-top: -$popover-arrow-width; }
  &.right   { margin-left: $popover-arrow-width; }
  &.bottom  { margin-top: $popover-arrow-width; }
  &.left    { margin-left: -$popover-arrow-width; }
}

.popover-title {
  margin: 0; // reset heading margin
  padding: 8px 14px;
  font-size: $font-size-base;
  font-weight: normal;
  line-height: 18px;
  background-color: $popover-title-bg;
  border-bottom: 1px solid darken($popover-title-bg, 5%);
  border-radius: ($border-radius-large - 1) ($border-radius-large - 1) 0 0;
}

.popover-content {
  padding: 9px 14px;
}

// Arrows
//
// .arrow is outer, .arrow:after is inner

.popover > .arrow {
  &,
  &:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
  }
}
.popover > .arrow {
  border-width: $popover-arrow-outer-width;
}
.popover > .arrow:after {
  border-width: $popover-arrow-width;
  content: "";
}

.popover {
  &.top > .arrow {
    left: 50%;
    margin-left: -$popover-arrow-outer-width;
    border-bottom-width: 0;
    border-top-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-top-color: $popover-arrow-outer-color;
    bottom: -$popover-arrow-outer-width;
    &:after {
      content: " ";
      bottom: 1px;
      margin-left: -$popover-arrow-width;
      border-bottom-width: 0;
      border-top-color: $popover-arrow-color;
    }
  }
  &.right > .arrow {
    top: 50%;
    left: -$popover-arrow-outer-width;
    margin-top: -$popover-arrow-outer-width;
    border-left-width: 0;
    border-right-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-right-color: $popover-arrow-outer-color;
    &:after {
      content: " ";
      left: 1px;
      bottom: -$popover-arrow-width;
      border-left-width: 0;
      border-right-color: $popover-arrow-color;
    }
  }
  &.bottom > .arrow {
    left: 50%;
    margin-left: -$popover-arrow-outer-width;
    border-top-width: 0;
    border-bottom-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-bottom-color: $popover-arrow-outer-color;
    top: -$popover-arrow-outer-width;
    &:after {
      content: " ";
      top: 1px;
      margin-left: -$popover-arrow-width;
      border-top-width: 0;
      border-bottom-color: $popover-arrow-color;
    }
  }

  &.left > .arrow {
    top: 50%;
    right: -$popover-arrow-outer-width;
    margin-top: -$popover-arrow-outer-width;
    border-right-width: 0;
    border-left-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-left-color: $popover-arrow-outer-color;
    &:after {
      content: " ";
      right: 1px;
      border-right-width: 0;
      border-left-color: $popover-arrow-color;
      bottom: -$popover-arrow-width;
    }
  }

}
<?php }} ?>
