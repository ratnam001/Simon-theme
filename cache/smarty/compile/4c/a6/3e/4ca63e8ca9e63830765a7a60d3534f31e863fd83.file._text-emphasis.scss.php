<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-emphasis.scss" */ ?>
<?php /*%%SmartyHeaderCode:947573437554074b0dbe0c1-26850349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca63e8ca9e63830765a7a60d3534f31e863fd83' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-emphasis.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '947573437554074b0dbe0c1-26850349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0dd7543_06722626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0dd7543_06722626')) {function content_554074b0dd7543_06722626($_smarty_tpl) {?>// Typography

// [converter] $parent hack
@mixin text-emphasis-variant($parent, $color) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    color: $color;
  }
  a#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
:hover {
    color: darken($color, 10%);
  }
}
<?php }} ?>
