<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_responsive-utilities.scss" */ ?>
<?php /*%%SmartyHeaderCode:1458153376554074b19ab445-87475374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cfbd935b405d0aefef777b179206215807f12df' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_responsive-utilities.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458153376554074b19ab445-87475374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1a6b773_87499997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1a6b773_87499997')) {function content_554074b1a6b773_87499997($_smarty_tpl) {?>//
// Responsive: Utility classes
// --------------------------------------------------


// IE10 in Windows (Phone) 8
//
// Support for responsive views via media queries is kind of borked in IE10, for
// Surface/desktop in split view and for Windows Phone 8. This particular fix
// must be accompanied by a snippet of JavaScript to sniff the user agent and
// apply some conditional CSS to *only* the Surface/desktop Windows 8. Look at
// our Getting Started page for more information on this bug.
//
// For more information, see the following:
//
// Issue: https://github.com/twbs/bootstrap/issues/10497
// Docs: http://getbootstrap.com/getting-started/#browsers
// Source: http://timkadlec.com/2012/10/ie10-snap-mode-and-responsive-design/

@-ms-viewport {
  width: device-width;
}


// Visibility utilities
// Note: Deprecated .visible-xs, .visible-sm, .visible-md, and .visible-lg as of v3.2.0

@include responsive-invisibility('.visible-xs, .visible-sm, .visible-md, .visible-lg');

.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}

@media (max-width: $screen-xs-max) {
  @include responsive-visibility('.visible-xs');
}
.visible-xs-block {
  @media (max-width: $screen-xs-max) {
    display: block !important;
  }
}
.visible-xs-inline {
  @media (max-width: $screen-xs-max) {
    display: inline !important;
  }
}
.visible-xs-inline-block {
  @media (max-width: $screen-xs-max) {
    display: inline-block !important;
  }
}

@media (min-width: $screen-sm-min) and (max-width: $screen-sm-max) {
  @include responsive-visibility('.visible-sm');
}
.visible-sm-block {
  @media (min-width: $screen-sm-min) and (max-width: $screen-sm-max) {
    display: block !important;
  }
}
.visible-sm-inline {
  @media (min-width: $screen-sm-min) and (max-width: $screen-sm-max) {
    display: inline !important;
  }
}
.visible-sm-inline-block {
  @media (min-width: $screen-sm-min) and (max-width: $screen-sm-max) {
    display: inline-block !important;
  }
}

@media (min-width: $screen-md-min) and (max-width: $screen-md-max) {
  @include responsive-visibility('.visible-md');
}
.visible-md-block {
  @media (min-width: $screen-md-min) and (max-width: $screen-md-max) {
    display: block !important;
  }
}
.visible-md-inline {
  @media (min-width: $screen-md-min) and (max-width: $screen-md-max) {
    display: inline !important;
  }
}
.visible-md-inline-block {
  @media (min-width: $screen-md-min) and (max-width: $screen-md-max) {
    display: inline-block !important;
  }
}

@media (min-width: $screen-lg-min) {
  @include responsive-visibility('.visible-lg');
}
.visible-lg-block {
  @media (min-width: $screen-lg-min) {
    display: block !important;
  }
}
.visible-lg-inline {
  @media (min-width: $screen-lg-min) {
    display: inline !important;
  }
}
.visible-lg-inline-block {
  @media (min-width: $screen-lg-min) {
    display: inline-block !important;
  }
}

@media (max-width: $screen-xs-max) {
  @include responsive-invisibility('.hidden-xs');
}

@media (min-width: $screen-sm-min) and (max-width: $screen-sm-max) {
  @include responsive-invisibility('.hidden-sm');
}

@media (min-width: $screen-md-min) and (max-width: $screen-md-max) {
  @include responsive-invisibility('.hidden-md');
}

@media (min-width: $screen-lg-min) {
  @include responsive-invisibility('.hidden-lg');
}


// Print utilities
//
// Media queries are placed on the inside to be mixin-friendly.

// Note: Deprecated .visible-print as of v3.2.0

@include responsive-invisibility('.visible-print');

@media print {
  @include responsive-visibility('.visible-print');
}
.visible-print-block {
  display: none !important;

  @media print {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;

  @media print {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;

  @media print {
    display: inline-block !important;
  }
}

@media print {
  @include responsive-invisibility('.hidden-print');
}
<?php }} ?>
