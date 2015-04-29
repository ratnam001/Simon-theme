<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_grid-framework.scss" */ ?>
<?php /*%%SmartyHeaderCode:1986350221554074b0e3bae3-60189812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bba22185d69ad53c8be944cc1cf4f9ba3a11ac2a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_grid-framework.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986350221554074b0e3bae3-60189812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'list' => 0,
    'class' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b10284b0_24732367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b10284b0_24732367')) {function content_554074b10284b0_24732367($_smarty_tpl) {?>// Framework grid generation
//
// Used only by Bootstrap to generate the correct number of grid classes given
// any value of `$grid-columns`.

// [converter] This is defined recursively in LESS, but Sass supports real loops
@mixin make-grid-columns() {
  $list: '';
  $i: 1;
  $list: ".col-xs-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-sm-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-md-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-lg-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  @for $i from (1 + 1) through $grid-columns {
    $list: "#<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
, .col-xs-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-sm-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-md-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, .col-lg-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  }
  #<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
 {
    position: relative;
    // Prevent columns from collapsing when empty
    min-height: 1px;
    // Inner gutter via padding
    padding-left:  ($grid-gutter-width / 2);
    padding-right: ($grid-gutter-width / 2);
  }
}


// [converter] This is defined recursively in LESS, but Sass supports real loops
@mixin float-grid-columns($class) {
  $list: '';
  $i: 1;
  $list: ".col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  @for $i from (1 + 1) through $grid-columns {
    $list: "#<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
, .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
";
  }
  #<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
 {
    float: left;
  }
}


@mixin calc-grid-column($index, $class, $type) {
  @if ($type == width) and ($index > 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      width: percentage(($index / $grid-columns));
    }
  }
  @if ($type == push) and ($index > 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-push-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      left: percentage(($index / $grid-columns));
    }
  }
  @if ($type == push) and ($index == 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-push-0 {
      left: auto;
    }
  }
  @if ($type == pull) and ($index > 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-pull-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      right: percentage(($index / $grid-columns));
    }
  }
  @if ($type == pull) and ($index == 0) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-pull-0 {
      right: auto;
    }
  }
  @if ($type == offset) {
    .col-#<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
-offset-#<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 {
      margin-left: percentage(($index / $grid-columns));
    }
  }
}

// [converter] This is defined recursively in LESS, but Sass supports real loops
@mixin loop-grid-columns($columns, $class, $type) {
  @for $i from 0 through $columns {
    @include calc-grid-column($i, $class, $type);
  }
}


// Create grid for specific class
@mixin make-grid($class) {
  @include float-grid-columns($class);
  @include loop-grid-columns($grid-columns, $class, width);
  @include loop-grid-columns($grid-columns, $class, pull);
  @include loop-grid-columns($grid-columns, $class, push);
  @include loop-grid-columns($grid-columns, $class, offset);
}
<?php }} ?>
