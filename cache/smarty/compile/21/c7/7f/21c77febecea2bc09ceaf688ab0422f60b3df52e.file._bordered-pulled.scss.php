<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:33
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_bordered-pulled.scss" */ ?>
<?php /*%%SmartyHeaderCode:860264402554074ad5cdb86-96030857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c77febecea2bc09ceaf688ab0422f60b3df52e' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_bordered-pulled.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860264402554074ad5cdb86-96030857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ad6395d4_22422468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ad6395d4_22422468')) {function content_554074ad6395d4_22422468($_smarty_tpl) {?>// Bordered & Pulled
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-border {
  padding: .2em .25em .15em;
  border: solid .08em $fa-border-color;
  border-radius: .1em;
}

.pull-right { float: right; }
.pull-left { float: left; }

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
 {
  &.pull-left { margin-right: .3em; }
  &.pull-right { margin-left: .3em; }
}
<?php }} ?>
