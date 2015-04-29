<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_list-group.scss" */ ?>
<?php /*%%SmartyHeaderCode:97802274554074a97ac321-28766916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '101f0f666463bfe7f5ad9194e242928110a9d56f' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_list-group.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97802274554074a97ac321-28766916',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a97ea6b0_58742516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a97ea6b0_58742516')) {function content_554074a97ea6b0_58742516($_smarty_tpl) {?>//
// List groups
// --------------------------------------------------

// Base class
//
// Easily usable on <ul>, <ol>, or <div>.
.list-group {
  // No need to set list-style: none; since .list-group-item is block level
  margin-bottom: 20px;
  padding-left: 0; // reset padding because ul and ol
}

// Individual list items
// -------------------------

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  // Place the border on the list items and negative margin up for better styling
  margin-bottom: -1px;
  background-color: $list-group-bg;
  border: 1px solid $list-group-border;

  // Round the first and last items
  &:first-child {
    @include border-top-radius($list-group-border-radius);
  }
  &:last-child {
    margin-bottom: 0;
    @include border-bottom-radius($list-group-border-radius);
  }

  // Align badges within list items
  > .badge {
    float: right;
  }
  > .badge + .badge {
    margin-right: 5px;
  }

  // Active class on item itself, not parent
  &.active,
  &.active:hover,
  &.active:focus {
    z-index: 2; // Place active items above their siblings for proper border styling
    color: $list-group-active-color;
    background-color: $list-group-active-bg;
    border-color: $list-group-active-border;

    // Force color to inherit for custom content
    .list-group-item-heading {
      color: inherit;
    }
    .list-group-item-text {
      color: lighten($list-group-active-bg, 40%);
    }
  }
}

// Linked list items
a.list-group-item {
  color: $list-group-link-color;

  .list-group-item-heading {
    color: $list-group-link-heading-color;
  }

  // Hover state
  &:hover,
  &:focus {
    text-decoration: none;
    background-color: $list-group-hover-bg;
  }
}

// Custom content options
// -------------------------

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
<?php }} ?>
