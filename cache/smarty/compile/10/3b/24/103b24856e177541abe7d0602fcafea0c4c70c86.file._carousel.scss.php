<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_carousel.scss" */ ?>
<?php /*%%SmartyHeaderCode:1879340622554074a97c3df6-08247037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '103b24856e177541abe7d0602fcafea0c4c70c86' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_carousel.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879340622554074a97c3df6-08247037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9882af8_78893469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9882af8_78893469')) {function content_554074a9882af8_78893469($_smarty_tpl) {?>//
// Carousel
// --------------------------------------------------


// Wrapper for the slide container and indicators
.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;

  > .item {
    display: none;
    position: relative;
    @include transition(.6s ease-in-out left);

    // Account for jankitude on images
    > img,
    > a > img {
      @include img-responsive();
      line-height: 1;
    }
  }

  > .active,
  > .next,
  > .prev { display: block; }

  > .active {
    left: 0;
  }

  > .next,
  > .prev {
    position: absolute;
    top: 0;
    width: 100%;
  }

  > .next {
    left: 100%;
  }
  > .prev {
    left: -100%;
  }
  > .next.left,
  > .prev.right {
    left: 0;
  }

  > .active.left {
    left: -100%;
  }
  > .active.right {
    left: 100%;
  }

}

// Left/right controls for nav
// ---------------------------

.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: $carousel-control-width;
  @include opacity($carousel-control-opacity);
  font-size: $carousel-control-font-size;
  color: $carousel-control-color;
  text-align: center;
  text-shadow: $carousel-text-shadow;
  // We can't have this transition here because webkit cancels the carousel
  // animation if you trip this while in the middle of another animation.

  // Set gradients for backgrounds
  &.left {
    @include gradient-horizontal($start-color: rgba(0,0,0,.5), $end-color: rgba(0,0,0,.0001));
  }
  &.right {
    left: auto;
    right: 0;
    @include gradient-horizontal($start-color: rgba(0,0,0,.0001), $end-color: rgba(0,0,0,.5));
  }

  // Hover/focus state
  &:hover,
  &:focus {
    color: $carousel-control-color;
    text-decoration: none;
    @include opacity(.9);
  }

  // Toggles
  .icon-prev,
  .icon-next,
  .glyphicon-chevron-left,
  .glyphicon-chevron-right {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 5;
    display: inline-block;
  }
  .icon-prev,
  .icon-next {
    width:  20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    font-family: serif;
  }

  .icon-prev {
    &:before {
      content: '\2039';// SINGLE LEFT-POINTING ANGLE QUOTATION MARK (U+2039)
    }
  }
  .icon-next {
    &:before {
      content: '\203a';// SINGLE RIGHT-POINTING ANGLE QUOTATION MARK (U+203A)
    }
  }
}

// Optional indicator pips
//
// Add an unordered list with the following class and add a list item for each
// slide your carousel holds.

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;

  li {
    display: inline-block;
    width:  10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    border: 1px solid $carousel-indicator-border-color;
    border-radius: 10px;
    cursor: pointer;
  }
  .active {
    margin: 0;
    width:  12px;
    height: 12px;
    background-color: $carousel-indicator-active-bg;
  }
}

// Optional captions
// -----------------------------
// Hidden by default for smaller viewports
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: $carousel-caption-color;
  text-align: center;
  text-shadow: $carousel-text-shadow;
  & .btn {
    text-shadow: none; // No shadow for button elements in carousel-caption
  }
}


// Scale up controls for tablets and up
@media screen and (min-width: $screen-tablet) {

  // Scale up the controls a smidge
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    margin-left: -15px;
    font-size: 30px;
  }

  // Show and left align the captions
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }

  // Move up the indicators
  .carousel-indicators {
    bottom: 20px;
  }
}
<?php }} ?>