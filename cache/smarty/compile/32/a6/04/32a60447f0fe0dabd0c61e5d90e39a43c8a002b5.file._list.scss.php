<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:34
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_list.scss" */ ?>
<?php /*%%SmartyHeaderCode:1167338754554074ae928871-57142297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a60447f0fe0dabd0c61e5d90e39a43c8a002b5' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_list.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1167338754554074ae928871-57142297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ae94a164_06507278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ae94a164_06507278')) {function content_554074ae94a164_06507278($_smarty_tpl) {?>// List Icons
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-ul {
  padding-left: 0;
  margin-left: $fa-li-width;
  list-style-type: none;
  > li { position: relative; }
}
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-li {
  position: absolute;
  left: -$fa-li-width;
  width: $fa-li-width;
  top: (2em / 14);
  text-align: center;
  &.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-lg {
    left: -$fa-li-width + (4em / 14);
  }
}
<?php }} ?>
