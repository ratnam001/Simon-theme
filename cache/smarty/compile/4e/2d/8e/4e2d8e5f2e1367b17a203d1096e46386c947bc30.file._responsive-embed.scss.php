<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_responsive-embed.scss" */ ?>
<?php /*%%SmartyHeaderCode:305160131554074b099aec3-47574070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e2d8e5f2e1367b17a203d1096e46386c947bc30' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_responsive-embed.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305160131554074b099aec3-47574070',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b09c4367_76160061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b09c4367_76160061')) {function content_554074b09c4367_76160061($_smarty_tpl) {?>// Embeds responsive
//
// Credit: Nicolas Gallagher and SUIT CSS.

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;

  .embed-responsive-item,
  iframe,
  embed,
  object {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    border: 0;
  }

  // Modifier class for 16:9 aspect ratio
  &.embed-responsive-16by9 {
    padding-bottom: 56.25%;
  }

  // Modifier class for 4:3 aspect ratio
  &.embed-responsive-4by3 {
    padding-bottom: 75%;
  }
}
<?php }} ?>
