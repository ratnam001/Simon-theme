<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_jumbotron.scss" */ ?>
<?php /*%%SmartyHeaderCode:1506338865554074b1a8d629-47037772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec69af411900e53c97b490fe1a3ec3dd77c2bcd' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_jumbotron.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1506338865554074b1a8d629-47037772',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1aa2f52_34967165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1aa2f52_34967165')) {function content_554074b1aa2f52_34967165($_smarty_tpl) {?>//
// Jumbotron
// --------------------------------------------------


.jumbotron {
  padding: $jumbotron-padding;
  margin-bottom: $jumbotron-padding;
  color: $jumbotron-color;
  background-color: $jumbotron-bg;

  h1,
  .h1 {
    color: $jumbotron-heading-color;
  }
  p {
    margin-bottom: ($jumbotron-padding / 2);
    font-size: $jumbotron-font-size;
    font-weight: 200;
  }

  > hr {
    border-top-color: darken($jumbotron-bg, 10%);
  }

  .container & {
    border-radius: $border-radius-large; // Only round corners at higher resolutions if contained in a container
  }

  .container {
    max-width: 100%;
  }

  @media screen and (min-width: $screen-sm-min) {
    padding-top:    ($jumbotron-padding * 1.6);
    padding-bottom: ($jumbotron-padding * 1.6);

    .container & {
      padding-left:  ($jumbotron-padding * 2);
      padding-right: ($jumbotron-padding * 2);
    }

    h1,
    .h1 {
      font-size: ($font-size-base * 4.5);
    }
  }
}
<?php }} ?>
