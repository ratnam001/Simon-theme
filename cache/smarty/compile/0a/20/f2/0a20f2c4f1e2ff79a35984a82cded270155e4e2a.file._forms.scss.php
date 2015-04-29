<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_forms.scss" */ ?>
<?php /*%%SmartyHeaderCode:862199477554074b0bf7e29-87575994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a20f2c4f1e2ff79a35984a82cded270155e4e2a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_forms.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '862199477554074b0bf7e29-87575994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0c58b80_97472272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0c58b80_97472272')) {function content_554074b0c58b80_97472272($_smarty_tpl) {?>// Form validation states
//
// Used in forms.less to generate the form validation CSS for warnings, errors,
// and successes.

@mixin form-control-validation($text-color: #555, $border-color: #ccc, $background-color: #f5f5f5) {
  // Color the label and help text
  .help-block,
  .control-label,
  .radio,
  .checkbox,
  .radio-inline,
  .checkbox-inline  {
    color: $text-color;
  }
  // Set the border and box shadow on specific inputs to match
  .form-control {
    border-color: $border-color;
    @include box-shadow(inset 0 1px 1px rgba(0,0,0,.075)); // Redeclare so transitions work
    &:focus {
      border-color: darken($border-color, 10%);
      $shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px lighten($border-color, 20%);
      @include box-shadow($shadow);
    }
  }
  // Set validation states also for addons
  .input-group-addon {
    color: $text-color;
    border-color: $border-color;
    background-color: $background-color;
  }
  // Optional feedback icon
  .form-control-feedback {
    color: $text-color;
  }
}


// Form control focus state
//
// Generate a customized focus state and for any input with the specified color,
// which defaults to the `$input-border-focus` variable.
//
// We highly encourage you to not customize the default value, but instead use
// this to tweak colors on an as-needed basis. This aesthetic change is based on
// WebKit's default styles, but applicable to a wider range of browsers. Its
// usability and accessibility should be taken into account with any change.
//
// Example usage: change the default blue border and shadow to white for better
// contrast against a dark gray background.
@mixin form-control-focus($color: $input-border-focus) {
  $color-rgba: rgba(red($color), green($color), blue($color), .6);
  &:focus {
    border-color: $color;
    outline: 0;
    @include box-shadow(inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px $color-rgba);
  }
}

// Form control sizing
//
// Relative text size, padding, and border-radii changes for form controls. For
// horizontal sizing, wrap controls in the predefined grid classes. `<select>`
// element gets special love because it's special, and that's a fact!
// [converter] $parent hack
@mixin input-size($parent, $input-height, $padding-vertical, $padding-horizontal, $font-size, $line-height, $border-radius) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    height: $input-height;
    padding: $padding-vertical $padding-horizontal;
    font-size: $font-size;
    line-height: $line-height;
    border-radius: $border-radius;
  }

  select#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    height: $input-height;
    line-height: $input-height;
  }

  textarea#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
,
  select[multiple]#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    height: auto;
  }
}
<?php }} ?>
