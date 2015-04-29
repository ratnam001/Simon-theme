<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_labels.scss" */ ?>
<?php /*%%SmartyHeaderCode:1396576589554074a978acb9-30530937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc328949d1bcd58b1c724bb4b029101fb0e4d794' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_labels.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396576589554074a978acb9-30530937',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9793428_22668749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9793428_22668749')) {function content_554074a9793428_22668749($_smarty_tpl) {?>//
// Labels
// --------------------------------------------------

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 100%;
  font-weight: bold;
  line-height: 1;
  color: $label-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0;

  // Add hover effects, but only for links
  &[href] {
    &:hover,
    &:focus {
      color: $label-link-hover-color;
      text-decoration: none;
      cursor: pointer;
    }
  }

  // Empty labels collapse automatically (not available in IE8)
  &:empty {
    display: none;
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
  border:1px solid $label-success-border;
}

.label-info {
  @include label-variant($label-info-bg);
   border:1px solid $label-info-border;
}

.label-warning {
  @include label-variant($label-warning-bg);
  border:1px solid $label-warning-border;
}

.label-danger {
  @include label-variant($label-danger-bg);
  border:1px solid $label-danger-border;
}
<?php }} ?>
