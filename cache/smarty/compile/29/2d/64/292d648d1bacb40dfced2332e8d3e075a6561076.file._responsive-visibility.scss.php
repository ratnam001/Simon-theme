<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_responsive-visibility.scss" */ ?>
<?php /*%%SmartyHeaderCode:468773765554074b0db4350-89743563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '292d648d1bacb40dfced2332e8d3e075a6561076' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_responsive-visibility.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '468773765554074b0db4350-89743563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0df64b5_60589505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0df64b5_60589505')) {function content_554074b0df64b5_60589505($_smarty_tpl) {?>// Responsive utilities

//
// More easily include all the states for responsive-utilities.less.
// [converter] $parent hack
@mixin responsive-visibility($parent) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    display: block !important;
  }
  table#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
  { display: table; }
  tr#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
     { display: table-row !important; }
  th#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
,
  td#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
     { display: table-cell !important; }
}

// [converter] $parent hack
@mixin responsive-invisibility($parent) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    display: none !important;
  }
}
<?php }} ?>
