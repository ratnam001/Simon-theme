<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_spinning.scss" */ ?>
<?php /*%%SmartyHeaderCode:1207701001554074ab1f9417-01613902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '897d51b45fca26f87bc736c39a7fd5a45b0d0859' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_spinning.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1207701001554074ab1f9417-01613902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ab227270_58344311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ab227270_58344311')) {function content_554074ab227270_58344311($_smarty_tpl) {?>// Spinning Icons
// --------------------------

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
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
<?php }} ?>
