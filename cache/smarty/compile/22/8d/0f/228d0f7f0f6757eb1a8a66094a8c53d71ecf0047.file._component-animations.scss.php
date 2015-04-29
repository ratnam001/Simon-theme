<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_component-animations.scss" */ ?>
<?php /*%%SmartyHeaderCode:1499039014554074b08de2b8-90138694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '228d0f7f0f6757eb1a8a66094a8c53d71ecf0047' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_component-animations.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499039014554074b08de2b8-90138694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b092b492_06486051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b092b492_06486051')) {function content_554074b092b492_06486051($_smarty_tpl) {?>//
// Component animations
// --------------------------------------------------

// Heads up!
//
// We don't use the `.opacity()` mixin here since it causes a bug with text
// fields in IE7-8. Source: https://github.com/twbs/bootstrap/pull/3552.

.fade {
  opacity: 0;
  @include transition(opacity .15s linear);
  &.in {
    opacity: 1;
  }
}

.collapse {
  display: none;

  &.in      { display: block; }
  // [converter] extracted tr&.in to tr.collapse.in
  // [converter] extracted tbody&.in to tbody.collapse.in
}

tr.collapse.in    { display: table-row; }

tbody.collapse.in { display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  @include transition(height .35s ease);
}
<?php }} ?>
