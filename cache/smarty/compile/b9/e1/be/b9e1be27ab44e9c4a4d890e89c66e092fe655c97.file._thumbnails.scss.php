<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_thumbnails.scss" */ ?>
<?php /*%%SmartyHeaderCode:1565451977554074b0a6a975-59720516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e1be27ab44e9c4a4d890e89c66e092fe655c97' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_thumbnails.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1565451977554074b0a6a975-59720516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0a6f9a9_82002694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0a6f9a9_82002694')) {function content_554074b0a6f9a9_82002694($_smarty_tpl) {?>//
// Thumbnails
// --------------------------------------------------


// Mixin and adjust the regular image class
.thumbnail {
  display: block;
  padding: $thumbnail-padding;
  margin-bottom: $line-height-computed;
  line-height: $line-height-base;
  background-color: $thumbnail-bg;
  border: 1px solid $thumbnail-border;
  border-radius: $thumbnail-border-radius;
  @include transition(all .2s ease-in-out);

  > img,
  a > img {
    @include img-responsive();
    margin-left: auto;
    margin-right: auto;
  }

  // [converter] extracted a&:hover, a&:focus, a&.active to a.thumbnail:hover, a.thumbnail:focus, a.thumbnail.active

  // Image captions
  .caption {
    padding: $thumbnail-caption-padding;
    color: $thumbnail-caption-color;
  }
}

// Add a hover state for linked versions only
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: $link-color;
}
<?php }} ?>
