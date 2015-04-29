<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:33
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_list.scss" */ ?>
<?php /*%%SmartyHeaderCode:1835782152554074ad425622-19469465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd98b2297419f3cbb7dfe6b27e56eb017d189bd51' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_list.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1835782152554074ad425622-19469465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ad4818e9_22462479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ad4818e9_22462479')) {function content_554074ad4818e9_22462479($_smarty_tpl) {?>// List Icons
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
