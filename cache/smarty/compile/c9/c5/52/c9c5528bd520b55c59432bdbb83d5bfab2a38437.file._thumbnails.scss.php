<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_thumbnails.scss" */ ?>
<?php /*%%SmartyHeaderCode:742745676554074a894b2c9-55650418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c5528bd520b55c59432bdbb83d5bfab2a38437' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_thumbnails.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '742745676554074a894b2c9-55650418',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a894fec0_36272960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a894fec0_36272960')) {function content_554074a894fec0_36272960($_smarty_tpl) {?>//
// Thumbnails
// --------------------------------------------------


// Mixin and adjust the regular image class
.thumbnail {
  @extend .img-thumbnail;
  display: block; // Override the inline-block from `.img-thumbnail`

  > img {
    @include img-responsive();
  }
}


// Add a hover state for linked versions only
a.thumbnail:hover,
a.thumbnail:focus {
  border-color: $link-color;
}

// Images and captions
.thumbnail > img {
  margin-left: auto;
  margin-right: auto;
}
.thumbnail .caption {
  padding: $thumbnail-caption-padding;
  color: $thumbnail-caption-color;
}
<?php }} ?>
