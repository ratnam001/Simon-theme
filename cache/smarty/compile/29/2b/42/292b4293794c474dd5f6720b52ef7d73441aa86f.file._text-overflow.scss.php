<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-overflow.scss" */ ?>
<?php /*%%SmartyHeaderCode:268202343554074b0c0c865-48047898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '292b4293794c474dd5f6720b52ef7d73441aa86f' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-overflow.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268202343554074b0c0c865-48047898',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0c18096_08800934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0c18096_08800934')) {function content_554074b0c18096_08800934($_smarty_tpl) {?>// Text overflow
// Requires inline-block or block for proper styling

@mixin text-overflow() {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
<?php }} ?>
