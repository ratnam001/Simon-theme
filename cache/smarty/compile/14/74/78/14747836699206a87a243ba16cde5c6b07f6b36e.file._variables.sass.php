<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/modules/_variables.sass" */ ?>
<?php /*%%SmartyHeaderCode:807125695554074abc321e1-28587661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14747836699206a87a243ba16cde5c6b07f6b36e' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/modules/_variables.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807125695554074abc321e1-28587661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abc34662_55446224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abc34662_55446224')) {function content_554074abc34662_55446224($_smarty_tpl) {?>// PrestaShop Admin Theme Colors
$main-color: #383F50 !default
$primary-color: $blueSkype !default
$secondary-color: $greenPrestashop !default
$bg-content-color: white !default

$contrasted-dark-default: #333
$contrasted-light-default: white
$contrasted-lightness-threshold: 10%

$bg-page-head-color : $secondary-color
$bg-panel-heading-color: hsl(hue($secondary-color), 10, 90)

$badge-notif-color: $greenPrestashop
$brand-addons: $pinkPrestashop

$font-family-mono: 'Droid Sans Mono', Helvetica, Arial, sans-serif 

// FontAwesome icons
$icon-font-family: 'FontAwesome'
$fa-css-prefix: icon
$icon-size-base: 14px

// Bootstrap variables
$gray-darker: lighten(#000, 13.5%)  //#222
$gray-dark: lighten(#000, 20%)  //#333
$gray: lighten(#000, 33.5%)  //#555
$gray-light: lighten(#000, 60%)  //#999
$gray-lighter: lighten(#000, 93.5%)  //#eee

// Brand colors
$brand-primary: $primary-color !default

$brand-success: darken(#8BC954,7%) !default
$brand-warning: #f0ad4e !default
$brand-danger: #d9534f !default
$brand-info: #5bc0de !default

// Scaffolding
$body-bg: $bg-content-color
$text-color: $gray

// Typography
$url-font-content: "//fonts.googleapis.com/css?family=Open+Sans:300,400,700" !default
$url-font-content-name : 'Open Sans' !default
$url-font-headings: "//fonts.googleapis.com/css?family=Ubuntu+Condensed" !default
$url-font-headings-name: 'Ubuntu Condensed' !default
$font-family-sans-serif: $url-font-content-name, Helvetica, Arial, sans-serif 
$headings-font-family: $url-font-headings-name, Helvetica, Arial, sans-serif
$font-size-base: 12px
$line-height-base: 1.428571429
$line-height-computed: floor($font-size-base * $line-height-base)
$headings-font-weight: 400

// Components
$padding-base-vertical: 4px 
$padding-base-horizontal: 8px 
$border-radius-base: 3px

// Tables

// $table-bg: transparent  overall background-color
$table-bg-accent: #f9f9f9  //for striping
$table-bg-hover: #EDF7FB

// Buttons
$btn-default-color: $text-color 
$btn-default-bg: white 
$btn-default-border: #ccc
$btn-primary-color: $btn-default-color 
$btn-primary-bg: white 
$btn-primary-border: $brand-success

// Forms
$input-bg: white 
$input-height-base: ($line-height-computed + ($padding-base-vertical * 2) + 2)

// Dropdowns
$dropdown-link-hover-color: white 
$dropdown-link-hover-bg: $brand-primary

// Grid system
$grid-gutter-width: 10px  // Navbar

// Basics of a navbar
$navbar-height: 35px  // Wells
$well-bg: #FCFDFE

// Media queries breakpoints
// Tiny screen / phone
$screen-tiny: 480px 
$screen-phone: $screen-tiny 

// Small screen / tablet
$screen-small: 768px 
$screen-tablet: $screen-small 

// Medium screen / desktop
$screen-medium: 992px 
$screen-desktop: $screen-medium 

// So media queries don't overlap when required, provide a maximum
$screen-small-max: ($screen-medium - 1) 
$screen-tablet-max: $screen-small-max

// Large screen / wide desktop
$screen-large: 1200px 
$screen-large-desktop: $screen-large

// Container sizes
// Small screen / tablet
$container-tablet: 728px

// Medium screen / desktop
$container-desktop: 940px

// Large screen / wide desktop
$container-large-desktop: 1170px  //light<?php }} ?>
