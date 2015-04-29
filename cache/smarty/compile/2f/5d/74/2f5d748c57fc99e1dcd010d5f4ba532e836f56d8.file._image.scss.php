<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_image.scss" */ ?>
<?php /*%%SmartyHeaderCode:1435758744554074b0d05620-71438611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f5d748c57fc99e1dcd010d5f4ba532e836f56d8' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_image.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1435758744554074b0d05620-71438611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0d9ffd2_82066662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0d9ffd2_82066662')) {function content_554074b0d9ffd2_82066662($_smarty_tpl) {?>// Image Mixins
// - Responsive image
// - Retina image


// Responsive image
//
// Keep images from scaling beyond the width of their parents.
@mixin img-responsive($display: block) {
  display: $display;
  max-width: 100%; // Part 1: Set a maximum relative to the parent
  height: auto; // Part 2: Scale the height according to the width, otherwise you get stretching
}


// Retina image
//
// Short retina mixin for setting background-image and -size. Note that the
// spelling of `min--moz-device-pixel-ratio` is intentional.
@mixin img-retina($file-1x, $file-2x, $width-1x, $height-1x) {
  background-image: url(if($bootstrap-sass-asset-helper, twbs-image-path("#<?php echo $_smarty_tpl->tpl_vars['file']->value-'1x';?>
"), "#<?php echo $_smarty_tpl->tpl_vars['file']->value-'1x';?>
"));

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (   min--moz-device-pixel-ratio: 2),
  only screen and (     -o-min-device-pixel-ratio: 2/1),
  only screen and (        min-device-pixel-ratio: 2),
  only screen and (                min-resolution: 192dpi),
  only screen and (                min-resolution: 2dppx) {
    background-image: url(if($bootstrap-sass-asset-helper, twbs-image-path("#<?php echo $_smarty_tpl->tpl_vars['file']->value-'2x';?>
"), "#<?php echo $_smarty_tpl->tpl_vars['file']->value-'2x';?>
"));
    background-size: $width-1x $height-1x;
  }
}
<?php }} ?>
