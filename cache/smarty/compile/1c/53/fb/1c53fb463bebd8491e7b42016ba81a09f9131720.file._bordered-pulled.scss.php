<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:34
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_bordered-pulled.scss" */ ?>
<?php /*%%SmartyHeaderCode:1558929707554074ae9bd201-92237613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c53fb463bebd8491e7b42016ba81a09f9131720' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_bordered-pulled.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558929707554074ae9bd201-92237613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ae9ca575_20912260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ae9ca575_20912260')) {function content_554074ae9ca575_20912260($_smarty_tpl) {?>// Bordered & Pulled
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
