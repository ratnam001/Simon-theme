<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:34
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_extras.scss" */ ?>
<?php /*%%SmartyHeaderCode:665225966554074ae8089e3-62889517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93701a17ef80ff60e2eefabcbdde9c5c3bd9ae0' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_extras.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '665225966554074ae8089e3-62889517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ae885f83_70131363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ae885f83_70131363')) {function content_554074ae885f83_70131363($_smarty_tpl) {?>/* EXTRAS
 * -------------------------- */

/* Stacked and layered icon */

/* Animated rotating icon */
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-spin {
  -webkit-animation: spin 2s infinite linear;
  -moz-animation: spin 2s infinite linear;
  -o-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear;
}

@-moz-keyframes spin {
  0% { -moz-transform: rotate(0deg); }
  100% { -moz-transform: rotate(359deg); }
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(359deg); }
}
@-o-keyframes spin {
  0% { -o-transform: rotate(0deg); }
  100% { -o-transform: rotate(359deg); }
}
@-ms-keyframes spin {
  0% { -ms-transform: rotate(0deg); }
  100% { -ms-transform: rotate(359deg); }
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(359deg); }
}


// Icon rotations & flipping
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
