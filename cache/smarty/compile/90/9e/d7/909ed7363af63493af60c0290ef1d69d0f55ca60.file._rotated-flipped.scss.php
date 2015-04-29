<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:34
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_rotated-flipped.scss" */ ?>
<?php /*%%SmartyHeaderCode:90743090554074ae795446-71374483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909ed7363af63493af60c0290ef1d69d0f55ca60' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_rotated-flipped.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90743090554074ae795446-71374483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ae7cd0e3_86260669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ae7cd0e3_86260669')) {function content_554074ae7cd0e3_86260669($_smarty_tpl) {?>// Rotated & Flipped Icons
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-90  { @include fa-icon-rotate(90deg, 1);  }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-180 { @include fa-icon-rotate(180deg, 2); }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-270 { @include fa-icon-rotate(270deg, 3); }

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-horizontal { @include fa-icon-flip(-1, 1, 0); }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-vertical   { @include fa-icon-flip(1, -1, 2); }
<?php }} ?>
