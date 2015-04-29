<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_resize.scss" */ ?>
<?php /*%%SmartyHeaderCode:139432499554074b0e1d7c6-07042331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fe204ed2f2a28578a3a419f59ca22432449acfc' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_resize.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139432499554074b0e1d7c6-07042331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0e1f188_49302077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0e1f188_49302077')) {function content_554074b0e1f188_49302077($_smarty_tpl) {?>// Resize anything

@mixin resizable($direction) {
  resize: $direction; // Options: horizontal, vertical, both
  overflow: auto; // Safari fix
}
<?php }} ?>
