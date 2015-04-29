<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_scaffolding.scss" */ ?>
<?php /*%%SmartyHeaderCode:550852788554074a98bd335-80331904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c64e37ec6b108e5c3d008265222108cae961806' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_scaffolding.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '550852788554074a98bd335-80331904',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a98d8b80_24351338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a98d8b80_24351338')) {function content_554074a98d8b80_24351338($_smarty_tpl) {?>//
// Scaffolding
// --------------------------------------------------


// Reset the box-sizing

*,
*:before,
*:after {
  @include box-sizing(border-box);
}


// Body reset

html {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
}

body {
  font-family: $font-family-base;
  font-size: $font-size-base;
  line-height: $line-height-base;
  color: $text-color;
  background-color: $body-bg;
}

// Reset fonts for relevant elements
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

// Reset unusual Firefox-on-Android default style.
//
// See https://github.com/necolas/normalize.css/issues/214

button,
input,
select[multiple],
textarea {
  background-image: none;
}


// Links

a {
  color: $link-color;
  text-decoration: none;

  &:hover,
  &:focus {
    color: $link-hover-color;
    text-decoration: underline;
  }

  &:focus {
    @include tab-focus();
  }
}


// Images

img {
  vertical-align: middle;
}

// Responsive images (ensure images don't scale beyond their parents)
.img-responsive {
  @include img-responsive();
}

// Rounded corners
.img-rounded {
  border-radius: $border-radius-large;
}

// Image thumbnails
//
// Heads up! This is mixin-ed into thumbnails.less for `.thumbnail`.
.img-thumbnail {
  padding: $thumbnail-padding;
  line-height: $line-height-base;
  background-color: $thumbnail-bg;
  border: 1px solid $thumbnail-border;
  border-radius: $thumbnail-border-radius;
  @include transition(all .2s ease-in-out);

  // Keep them at most 100% wide
  @include img-responsive(inline-block);
}

// Perfect circle
.img-circle {
  border-radius: 50%; // set radius in percents
}


// Horizontal rules

hr {
  margin-top:    $line-height-computed;
  margin-bottom: $line-height-computed;
  border: 0;
  border-top: 1px solid $hr-border;
}


// Only display content to screen readers
//
// See: http://a11yproject.com/posts/how-to-hide-content/

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0 0 0 0);
  border: 0;
}
<?php }} ?>
