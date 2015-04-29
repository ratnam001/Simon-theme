<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_media.scss" */ ?>
<?php /*%%SmartyHeaderCode:1828846698554074b09e1c77-50249977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a4b141904b5067d1a4a59b9fe1ca419f98c04d0' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_media.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828846698554074b09e1c77-50249977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0a78a21_59701646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0a78a21_59701646')) {function content_554074b0a78a21_59701646($_smarty_tpl) {?>// Media objects
// Source: http://stubbornella.org/content/?p=497
// --------------------------------------------------


// Common styles
// -------------------------

// Clear the floats
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}

// Proper spacing between instances of .media
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}

// For images and videos, set to block
.media-object {
  display: block;
}

// Reset margins on headings for tighter default spacing
.media-heading {
  margin: 0 0 5px;
}


// Media image alignment
// -------------------------

.media {
  > .pull-left {
    margin-right: 10px;
  }
  > .pull-right {
    margin-left: 10px;
  }
}


// Media list variation
// -------------------------

// Undo default ul/ol styles
.media-list {
  padding-left: 0;
  list-style: none;
}
<?php }} ?>
