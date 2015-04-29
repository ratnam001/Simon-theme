<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_tooltip.scss" */ ?>
<?php /*%%SmartyHeaderCode:788801305554074b10fc216-02720396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc850cf52520c72cfbaf406b349bd762cf7b13f' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_tooltip.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '788801305554074b10fc216-02720396',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1108d96_25970281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1108d96_25970281')) {function content_554074b1108d96_25970281($_smarty_tpl) {?>//
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

  &.in     { @include opacity($tooltip-opacity); }
  &.top    { margin-top:  -3px; padding: $tooltip-arrow-width 0; }
  &.right  { margin-left:  3px; padding: 0 $tooltip-arrow-width; }
  &.bottom { margin-top:   3px; padding: $tooltip-arrow-width 0; }
  &.left   { margin-left: -3px; padding: 0 $tooltip-arrow-width; }
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
    left: $tooltip-arrow-width;
    border-width: $tooltip-arrow-width $tooltip-arrow-width 0;
    border-top-color: $tooltip-arrow-color;
  }
  &.top-right .tooltip-arrow {
    bottom: 0;
    right: $tooltip-arrow-width;
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
    left: $tooltip-arrow-width;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
  &.bottom-right .tooltip-arrow {
    top: 0;
    right: $tooltip-arrow-width;
    border-width: 0 $tooltip-arrow-width $tooltip-arrow-width;
    border-bottom-color: $tooltip-arrow-color;
  }
}
<?php }} ?>
