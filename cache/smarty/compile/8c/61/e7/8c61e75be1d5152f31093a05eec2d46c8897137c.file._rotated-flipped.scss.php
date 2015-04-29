<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:33
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_rotated-flipped.scss" */ ?>
<?php /*%%SmartyHeaderCode:1145904561554074ad22b701-37906821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c61e75be1d5152f31093a05eec2d46c8897137c' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_rotated-flipped.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145904561554074ad22b701-37906821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ad2e1b51_14680230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ad2e1b51_14680230')) {function content_554074ad2e1b51_14680230($_smarty_tpl) {?>// Rotated & Flipped Icons
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
