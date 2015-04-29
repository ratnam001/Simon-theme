<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_alerts.scss" */ ?>
<?php /*%%SmartyHeaderCode:165708158554074b1170a40-77276221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48772b748223dff22ea8034ab0a3002afdb659db' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_alerts.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165708158554074b1170a40-77276221',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1178e16_31634605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1178e16_31634605')) {function content_554074b1178e16_31634605($_smarty_tpl) {?>//
// Alerts
// --------------------------------------------------


// Base styles
// -------------------------

.alert {
  padding: $alert-padding;
  margin-bottom: $line-height-computed;
  border: 1px solid transparent;
  border-radius: $alert-border-radius;

  // Headings for larger alerts
  h4 {
    margin-top: 0;
    // Specified for the h4 to prevent conflicts of changing $headings-color
    color: inherit;
  }
  // Provide class for links that match alerts
  .alert-link {
    font-weight: $alert-link-font-weight;
  }

  // Improve alignment and spacing of inner content
  > p,
  > ul {
    margin-bottom: 0;
  }
  > p + p {
    margin-top: 5px;
  }
}

// Dismissable alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissable {
 padding-right: ($alert-padding + 20);

  // Adjust close link position
  .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
}

// Alternate styles
//
// Generate contextual modifier classes for colorizing the alert.

.alert-success {
  @include alert-variant($alert-success-bg, $alert-success-border, $alert-success-text);
}
.alert-info {
  @include alert-variant($alert-info-bg, $alert-info-border, $alert-info-text);
}
.alert-warning {
  @include alert-variant($alert-warning-bg, $alert-warning-border, $alert-warning-text);
}
.alert-danger {
  @include alert-variant($alert-danger-bg, $alert-danger-border, $alert-danger-text);
}
<?php }} ?>
