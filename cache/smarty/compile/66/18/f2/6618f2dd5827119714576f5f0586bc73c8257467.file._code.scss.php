<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_code.scss" */ ?>
<?php /*%%SmartyHeaderCode:1132018942554074b1997005-73006335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6618f2dd5827119714576f5f0586bc73c8257467' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_code.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132018942554074b1997005-73006335',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b19b2f22_15547400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b19b2f22_15547400')) {function content_554074b19b2f22_15547400($_smarty_tpl) {?>//
// Code (inline and block)
// --------------------------------------------------


// Inline and block code styles
code,
kbd,
pre,
samp {
  font-family: $font-family-monospace;
}

// Inline code
code {
  padding: 2px 4px;
  font-size: 90%;
  color: $code-color;
  background-color: $code-bg;
  border-radius: $border-radius-base;
}

// User input typically entered via keyboard
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: $kbd-color;
  background-color: $kbd-bg;
  border-radius: $border-radius-small;
  box-shadow: inset 0 -1px 0 rgba(0,0,0,.25);
}

// Blocks of code
pre {
  display: block;
  padding: (($line-height-computed - 1) / 2);
  margin: 0 0 ($line-height-computed / 2);
  font-size: ($font-size-base - 1); // 14px to 13px
  line-height: $line-height-base;
  word-break: break-all;
  word-wrap: break-word;
  color: $pre-color;
  background-color: $pre-bg;
  border: 1px solid $pre-border-color;
  border-radius: $border-radius-base;

  // Account for some code outputs that place code tags in pre tags
  code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
  }
}

// Enable scrollable blocks of code
.pre-scrollable {
  max-height: $pre-scrollable-max-height;
  overflow-y: scroll;
}
<?php }} ?>
