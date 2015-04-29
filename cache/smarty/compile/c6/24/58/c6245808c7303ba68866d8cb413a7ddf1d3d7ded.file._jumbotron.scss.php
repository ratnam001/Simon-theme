<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_jumbotron.scss" */ ?>
<?php /*%%SmartyHeaderCode:1948472600554074a9a02c13-71781405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6245808c7303ba68866d8cb413a7ddf1d3d7ded' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_jumbotron.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948472600554074a9a02c13-71781405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9a1a077_03781155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9a1a077_03781155')) {function content_554074a9a1a077_03781155($_smarty_tpl) {?>//
// Jumbotron
// --------------------------------------------------


.jumbotron {
  padding: $jumbotron-padding;
  margin-bottom: $jumbotron-padding;
  font-size: ($font-size-base * 1.5);
  font-weight: 200;
  line-height: ($line-height-base * 1.5);
  color: $jumbotron-color;
  background-color: $jumbotron-bg;

  h1 {
    line-height: 1;
    color: $jumbotron-heading-color;
  }
  p {
    line-height: 1.4;
  }

  .container & {
    border-radius: $border-radius-large; // Only round corners at higher resolutions if contained in a container
  }

  @media screen and (min-width: $screen-tablet) {
    padding-top:    ($jumbotron-padding * 1.6);
    padding-bottom: ($jumbotron-padding * 1.6);

    .container & {
      padding-left:  ($jumbotron-padding * 2);
      padding-right: ($jumbotron-padding * 2);
    }

    h1 {
      font-size: ($font-size-base * 4.5);
    }
  }
}
<?php }} ?>
