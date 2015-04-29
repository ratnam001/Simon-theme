<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:33
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_mixins.scss" */ ?>
<?php /*%%SmartyHeaderCode:1152054988554074ad308622-01777196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ba76461c533b563145d2c0aa1a02cba002dbd5a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/font-awesome/_mixins.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152054988554074ad308622-01777196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rotation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ad311b18_92398991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ad311b18_92398991')) {function content_554074ad311b18_92398991($_smarty_tpl) {?>// Mixins
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
