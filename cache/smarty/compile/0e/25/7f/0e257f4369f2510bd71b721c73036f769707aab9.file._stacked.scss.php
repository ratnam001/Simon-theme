<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:34
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_stacked.scss" */ ?>
<?php /*%%SmartyHeaderCode:1050200162554074ae880bd2-09880182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e257f4369f2510bd71b721c73036f769707aab9' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_stacked.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1050200162554074ae880bd2-09880182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ae9051f8_50340424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ae9051f8_50340424')) {function content_554074ae9051f8_50340424($_smarty_tpl) {?>// Stacked Icons
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-stack-1x, .#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-stack-1x { line-height: inherit; }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-stack-2x { font-size: 2em; }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-inverse { color: $fa-inverse; }
<?php }} ?>
