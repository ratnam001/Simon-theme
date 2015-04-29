<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:34
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_path.scss" */ ?>
<?php /*%%SmartyHeaderCode:2029754716554074ae942488-09665496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794d5510144a0feddec51c020e65e30d987da305' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_path.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2029754716554074ae942488-09665496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ae9f71e8_59091563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ae9f71e8_59091563')) {function content_554074ae9f71e8_59091563($_smarty_tpl) {?>/* FONT PATH
 * -------------------------- */

@font-face {
  font-family: 'FontAwesome';
  src: url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.eot?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
');
  src: url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.eot?#iefix&v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
') format('embedded-opentype'),
    url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.woff?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
') format('woff'),
    url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.ttf?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
') format('truetype'),
    url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/fontawesome-webfont.svg?v=#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'version';?>
#fontawesomeregular') format('svg');
  //src: url('#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'path';?>
/FontAwesome.otf') format('opentype'); // used when developing fonts
  font-weight: normal;
  font-style: normal;
}
<?php }} ?>
