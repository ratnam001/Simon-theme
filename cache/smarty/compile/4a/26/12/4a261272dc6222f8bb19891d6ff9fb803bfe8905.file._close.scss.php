<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_close.scss" */ ?>
<?php /*%%SmartyHeaderCode:400532765554074a8982bf2-12817768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a261272dc6222f8bb19891d6ff9fb803bfe8905' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_close.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '400532765554074a8982bf2-12817768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a8985f47_54504598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a8985f47_54504598')) {function content_554074a8985f47_54504598($_smarty_tpl) {?>//
// Close icons
// --------------------------------------------------


.close {
  float: right;
  font-size: ($font-size-base * 1.5);
  font-weight: $close-font-weight;
  line-height: 1;
  color: $close-color;
  text-shadow: $close-text-shadow;
  @include opacity(.2);

  &:hover,
  &:focus {
    color: $close-color;
    text-decoration: none;
    cursor: pointer;
    @include opacity(.5);
  }
}

// Additional properties for button version
// iOS requires the button element instead of an anchor tag.
// If you want the anchor version, it requires `href="#"`.
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
<?php }} ?>
