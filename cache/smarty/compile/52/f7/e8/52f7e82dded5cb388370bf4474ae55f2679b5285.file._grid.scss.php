<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_grid.scss" */ ?>
<?php /*%%SmartyHeaderCode:873676675554074b0c74589-67636908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f7e82dded5cb388370bf4474ae55f2679b5285' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_grid.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '873676675554074b0c74589-67636908',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0cb6955_08237503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0cb6955_08237503')) {function content_554074b0cb6955_08237503($_smarty_tpl) {?>// Grid system
//
// Generate semantic grid columns with these mixins.

// Centered container element
@mixin container-fixed() {
  margin-right: auto;
  margin-left: auto;
  padding-left:  ($grid-gutter-width / 2);
  padding-right: ($grid-gutter-width / 2);
  @include clearfix();
}

// Creates a wrapper for a series of columns
@mixin make-row($gutter: $grid-gutter-width) {
  margin-left:  ($gutter / -2);
  margin-right: ($gutter / -2);
  @include clearfix();
}

// Generate the extra small columns
@mixin make-xs-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  float: left;
  width: percentage(($columns / $grid-columns));
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);
}
@mixin make-xs-column-offset($columns) {
  margin-left: percentage(($columns / $grid-columns));
}
@mixin make-xs-column-push($columns) {
  left: percentage(($columns / $grid-columns));
}
@mixin make-xs-column-pull($columns) {
  right: percentage(($columns / $grid-columns));
}

// Generate the small columns
@mixin make-sm-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);

  @media (min-width: $screen-sm-min) {
    float: left;
    width: percentage(($columns / $grid-columns));
  }
}
@mixin make-sm-column-offset($columns) {
  @media (min-width: $screen-sm-min) {
    margin-left: percentage(($columns / $grid-columns));
  }
}
@mixin make-sm-column-push($columns) {
  @media (min-width: $screen-sm-min) {
    left: percentage(($columns / $grid-columns));
  }
}
@mixin make-sm-column-pull($columns) {
  @media (min-width: $screen-sm-min) {
    right: percentage(($columns / $grid-columns));
  }
}

// Generate the medium columns
@mixin make-md-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);

  @media (min-width: $screen-md-min) {
    float: left;
    width: percentage(($columns / $grid-columns));
  }
}
@mixin make-md-column-offset($columns) {
  @media (min-width: $screen-md-min) {
    margin-left: percentage(($columns / $grid-columns));
  }
}
@mixin make-md-column-push($columns) {
  @media (min-width: $screen-md-min) {
    left: percentage(($columns / $grid-columns));
  }
}
@mixin make-md-column-pull($columns) {
  @media (min-width: $screen-md-min) {
    right: percentage(($columns / $grid-columns));
  }
}

// Generate the large columns
@mixin make-lg-column($columns, $gutter: $grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  ($gutter / 2);
  padding-right: ($gutter / 2);

  @media (min-width: $screen-lg-min) {
    float: left;
    width: percentage(($columns / $grid-columns));
  }
}
@mixin make-lg-column-offset($columns) {
  @media (min-width: $screen-lg-min) {
    margin-left: percentage(($columns / $grid-columns));
  }
}
@mixin make-lg-column-push($columns) {
  @media (min-width: $screen-lg-min) {
    left: percentage(($columns / $grid-columns));
  }
}
@mixin make-lg-column-pull($columns) {
  @media (min-width: $screen-lg-min) {
    right: percentage(($columns / $grid-columns));
  }
}
<?php }} ?>
