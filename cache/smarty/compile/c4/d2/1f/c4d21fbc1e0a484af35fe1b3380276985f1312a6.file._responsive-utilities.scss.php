<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_responsive-utilities.scss" */ ?>
<?php /*%%SmartyHeaderCode:1439083124554074a993e0f1-09099750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4d21fbc1e0a484af35fe1b3380276985f1312a6' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_responsive-utilities.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1439083124554074a993e0f1-09099750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9999d56_43674051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9999d56_43674051')) {function content_554074a9999d56_43674051($_smarty_tpl) {?>//
// Responsive: Utility classes
// --------------------------------------------------


// IE10 Metro responsive
// Required for Windows 8 Metro split-screen snapping with IE10
//
// Source: http://timkadlec.com/2012/10/ie10-snap-mode-and-responsive-design/
@-ms-viewport{
  width: device-width;
}

// IE10 on Windows Phone 8
// IE10 on WP8 doesn't report CSS pixels, but actual device pixels. In
// other words, say on a Lumia, you'll get 768px as the device width,
// meaning users will see the tablet styles and not phone styles.
//
// Alternatively you can override this with JS (see source below), but
// we won't be doing that here given our limited scope.
//
// Source: http://timkadlec.com/2013/01/windows-phone-8-and-device-width/
@media screen and (max-width: 400px) {
  @-ms-viewport{
    width: 320px;
  }
}

// Hide from screenreaders and browsers
// Credit: HTML5 Boilerplate
.hidden {
  display: none !important;
  visibility: hidden !important;
}

// Visibility utilities

@include responsive-invisibility('.visible-xs');
@media (max-width: $screen-xs-max) {
  @include responsive-visibility('.visible-xs');
}

@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-visibility('.visible-xs.visible-sm');
}


@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-visibility('.visible-xs.visible-md');
}


@media (min-width: $screen-lg) {
  @include responsive-visibility('.visible-xs.visible-lg');
}


@include responsive-invisibility('.visible-sm');

@media (max-width: $screen-xs-max) {
  @include responsive-visibility('.visible-sm.visible-xs');
}

@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-visibility('.visible-sm');
}

@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-visibility('.visible-sm.visible-md');
}


@media (min-width: $screen-lg) {
  @include responsive-visibility('.visible-sm.visible-lg');
}


@include responsive-invisibility('.visible-md');

@media (max-width: $screen-xs-max) {
  @include responsive-visibility('.visible-md.visible-xs');
}


@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-visibility('.visible-md.visible-sm');
}

@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-visibility('.visible-md');
}

@media (min-width: $screen-lg) {
  @include responsive-visibility('.visible-md.visible-lg');
}


@include responsive-invisibility('.visible-lg');

@media (max-width: $screen-xs-max) {
  @include responsive-visibility('.visible-lg.visible-xs');
}


@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-visibility('.visible-lg.visible-sm');
}


@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-visibility('.visible-lg.visible-md');
}

@media (min-width: $screen-lg) {
  @include responsive-visibility('.visible-lg');
}

@include responsive-visibility('.hidden-xs');
@media (max-width: $screen-xs-max) {
  @include responsive-invisibility('.hidden-xs');
}

@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-invisibility('.hidden-xs.hidden-sm');
}


@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-invisibility('.hidden-xs.hidden-md');
}


@media (min-width: $screen-lg) {
  @include responsive-invisibility('.hidden-xs.hidden-lg');
}


@include responsive-visibility('.hidden-sm');

@media (max-width: $screen-xs-max) {
  @include responsive-invisibility('.hidden-sm.hidden-xs');
}

@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-invisibility('.hidden-sm');
}

@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-invisibility('.hidden-sm.hidden-md');
}


@media (min-width: $screen-lg) {
  @include responsive-invisibility('.hidden-sm.hidden-lg');
}


@include responsive-visibility('.hidden-md');

@media (max-width: $screen-xs-max) {
  @include responsive-invisibility('.hidden-md.hidden-xs');
}


@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-invisibility('.hidden-md.hidden-sm');
}

@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-invisibility('.hidden-md');
}

@media (min-width: $screen-lg) {
  @include responsive-invisibility('.hidden-md.hidden-lg');
}


@include responsive-visibility('.hidden-lg');

@media (max-width: $screen-xs-max) {
  @include responsive-invisibility('.hidden-lg.hidden-xs');
}


@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
  @include responsive-invisibility('.hidden-lg.hidden-sm');
}


@media (min-width: $screen-md) and (max-width: $screen-md-max) {
  @include responsive-invisibility('.hidden-lg.hidden-md');
}

@media (min-width: $screen-lg) {
  @include responsive-invisibility('.hidden-lg');
}

// Print utilities

@include responsive-invisibility('.visible-print');

@media print {

  @include responsive-visibility('.visible-print');


  @include responsive-invisibility('.hidden-print');

}
<?php }} ?>
