<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_button-groups-rtl.sass" */ ?>
<?php /*%%SmartyHeaderCode:98413509554074b06b4bf4-75994051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf79cc9f9dd5f731bb58e48466f2a0cb6c5dabb' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_button-groups-rtl.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98413509554074b06b4bf4-75994051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b06b6aa0_80490679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b06b6aa0_80490679')) {function content_554074b06b6aa0_80490679($_smarty_tpl) {?>//
// Button groups
// --------------------------------------------------

// Make the div behave like a button
.btn-group,
.btn-group-vertical
	> .btn
		float: right

// Prevent double borders when buttons are next to each other
.btn-group 
	.btn + .btn,
	.btn + .btn-group,
	.btn-group + .btn,
	.btn-group + .btn-group
		margin-right: -1px

// Optional: Group multiple button groups together for a toolbar
.btn-toolbar
	margin-right: -5px // Offset the first child's margin

	.btn-group,
	.input-group
		float: right
	> .btn,
	> .btn-group,
	> .input-group
		margin-right: 5px

// Set corners individual because sometimes a single button can be in a .btn-group and we need :first-child and :last-child to both match
.btn-group > .btn:first-child
	margin-right: 0
	&:not(:last-child):not(.dropdown-toggle)
		@include border-left-radius(0)
		@include border-right-radius($border-radius-base)

// Need .dropdown-toggle since :last-child doesn't apply given a .dropdown-menu immediately after it
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child)
	@include border-right-radius(0)
	@include border-left-radius($border-radius-base)

// Custom edits for including btn-groups within btn-groups (useful for including dropdown buttons within a btn-group)
.btn-group > .btn-group
	float: right

.btn-group > .btn-group:first-child
	> .btn:last-child,
	> .dropdown-toggle
		@include border-left-radius(0)
		@include border-right-radius($border-radius-base)

.btn-group > .btn-group:last-child > .btn:first-child
	@include border-right-radius(0)
	@include border-left-radius($border-radius-base)<?php }} ?>
