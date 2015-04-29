<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_grid.scss" */ ?>
<?php /*%%SmartyHeaderCode:2107544394554074b17c48a3-19076061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ed6f0a4c374d4a748031dae7e95498578b05db' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_grid.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2107544394554074b17c48a3-19076061',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b17db929_74246671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b17db929_74246671')) {function content_554074b17db929_74246671($_smarty_tpl) {?>//
// Grid system
// --------------------------------------------------


// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

.container {
  @include container-fixed();

  @media (min-width: $screen-sm-min) {
    width: $container-sm;
  }
  @media (min-width: $screen-md-min) {
    width: $container-md;
  }
  @media (min-width: $screen-lg-min) {
    width: $container-lg;
  }
}


// Fluid container
//
// Utilizes the mixin meant for fixed width containers, but without any defined
// width for fluid, full width layouts.

.container-fluid {
  @include container-fixed();
}


// Row
//
// Rows contain and clear the floats of your columns.

.row {
  @include make-row();
}


// Columns
//
// Common styles for small and large grid columns

@include make-grid-columns();


// Extra small grid
//
// Columns, offsets, pushes, and pulls for extra small devices like
// smartphones.

@include make-grid(xs);


// Small grid
//
// Columns, offsets, pushes, and pulls for the small device range, from phones
// to tablets.

@media (min-width: $screen-sm-min) {
  @include make-grid(sm);
}


// Medium grid
//
// Columns, offsets, pushes, and pulls for the desktop device range.

@media (min-width: $screen-md-min) {
  @include make-grid(md);
}


// Large grid
//
// Columns, offsets, pushes, and pulls for the large desktop device range.

@media (min-width: $screen-lg-min) {
  @include make-grid(lg);
}
<?php }} ?>
