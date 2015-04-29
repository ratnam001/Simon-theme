<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_badges.scss" */ ?>
<?php /*%%SmartyHeaderCode:1838127854554074a88493a6-44426835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38df852ce2c5cd270f09b0c7f2e6fc2bf5287db6' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_badges.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1838127854554074a88493a6-44426835',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a884f1f9_31034280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a884f1f9_31034280')) {function content_554074a884f1f9_31034280($_smarty_tpl) {?>//
// Badges
// --------------------------------------------------


// Base classes
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

// Quick fix for labels/badges in buttons
.btn .badge {
  position: relative;
  top: -1px;
}

// Account for counters in navs
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: $badge-active-color;
  background-color: $badge-active-bg;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
<?php }} ?>
