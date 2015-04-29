<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_tooltip.scss" */ ?>
<?php /*%%SmartyHeaderCode:1652148840554074a8ade1f4-34006836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '533022fdb09be0919f6f0ef7ae41ae3cac34238f' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_tooltip.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652148840554074a8ade1f4-34006836',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a8aed974_11380747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a8aed974_11380747')) {function content_554074a8aed974_11380747($_smarty_tpl) {?>//
// Tooltips
// --------------------------------------------------


// Base class
.tooltip {
  position: absolute;
  z-index: $zindex-tooltip;
  display: block;
  visibility: visible;
  font-size: $font-size-small;
  line-height: 1.4;
  @include opacity(0);

  &.in     { @include opacity(.9); }
  &.top    { margin-top:  -3px; padding: 5px 0; }
  &.right  { margin-left:  3px; padding: 0 5px; }
  &.bottom { margin-top:   3px; padding: 5px 0; }
  &.left   { margin-left: -3px; padding: 0 5px; }
}

// Wrapper for the tooltip content
.tooltip-inner {
  max-width: $tooltip-max-width;
  padding: 3px 8px;
  color: $tooltip-color;
  text-align: center;
  text-decoration: none;
  background-color: $tooltip-bg;
  border-radius: $border-radius-base;
}

// Arrows
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip {
  &.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -$tooltip-arrow-width;
    border-width: $tooltip-arrow-width $tooltip-arrow-width 0;
    border-top-color: $tooltip-arrow-color;
  }
  &.top-left .tooltip-arrow {
    bottom: 0;
    left: 5px;
    border-width: $tooltip-arrow-width $tooltip-arrow-width 0;
    border-top-color: $tooltip-arrow-color;
  }
  &.top-right .tooltip-arrow {
    bottom: 0;
    right: 5px;
    border-width: $tooltip-arrow-width $tooltip-arrow-width 0;
    border-top-color: $tooltip-arrow-color;
  }
  &.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -$tooltip-arrow-width;
    border-width: $tooltip-arrow-width $tooltip-arrow-width $tooltip-arrow-width 0;
    border-right-color: $tooltip-arrow-color;
  }
  &.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -$tooltip-arrow-width;
    border-width: $tooltip-arrow-width 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-left-color: $tooltip-arrow-color;
  }
  &.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -$tooltip-arrow-width;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
  &.bottom-left .tooltip-arrow {
    top: 0;
    left: 5px;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
  &.bottom-right .tooltip-arrow {
    top: 0;
    right: 5px;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
}
<?php }} ?>
