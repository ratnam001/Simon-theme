<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:34
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_mixins.scss" */ ?>
<?php /*%%SmartyHeaderCode:1553088069554074ae877d66-69899763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '061c049e35e9ce5e0a3dfcbfc922c22aada22ca7' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/font-awesome/_mixins.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553088069554074ae877d66-69899763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rotation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ae87ecd7_80391413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ae87ecd7_80391413')) {function content_554074ae87ecd7_80391413($_smarty_tpl) {?>// Mixins
// --------------------------

@mixin fa-icon-rotate($degrees, $rotation) {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=#<?php echo $_smarty_tpl->tpl_vars['rotation']->value;?>
);
  -webkit-transform: rotate($degrees);
     -moz-transform: rotate($degrees);
      -ms-transform: rotate($degrees);
       -o-transform: rotate($degrees);
          transform: rotate($degrees);
}

@mixin fa-icon-flip($horiz, $vert, $rotation) {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=#<?php echo $_smarty_tpl->tpl_vars['rotation']->value;?>
);
  -webkit-transform: scale($horiz, $vert);
     -moz-transform: scale($horiz, $vert);
      -ms-transform: scale($horiz, $vert);
       -o-transform: scale($horiz, $vert);
          transform: scale($horiz, $vert);
}
<?php }} ?>
