<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_labels.scss" */ ?>
<?php /*%%SmartyHeaderCode:1654718585554074b185ad71-27497374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd825c99ad53f305ddc227b6109970516abbb3e4' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_labels.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1654718585554074b185ad71-27497374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1863093_49475208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1863093_49475208')) {function content_554074b1863093_49475208($_smarty_tpl) {?>//
// Labels
// --------------------------------------------------

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: $label-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;

  // [converter] extracted a& to a.label

  // Empty labels collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for labels in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
}

// Add hover effects, but only for links
a.label {
  &:hover,
  &:focus {
    color: $label-link-hover-color;
    text-decoration: none;
    cursor: pointer;
  }
}

// Colors
// Contextual variations (linked labels get darker on :hover)

.label-default {
  @include label-variant($label-default-bg);
}

.label-primary {
  @include label-variant($label-primary-bg);
}

.label-success {
  @include label-variant($label-success-bg);
}

.label-info {
  @include label-variant($label-info-bg);
}

.label-warning {
  @include label-variant($label-warning-bg);
}

.label-danger {
  @include label-variant($label-danger-bg);
}
<?php }} ?>
