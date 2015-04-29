<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_code.scss" */ ?>
<?php /*%%SmartyHeaderCode:698828614554074a98ff0b3-38648713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e293d26a46052fe3c14b70ac0cb26d051fe9425' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_code.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698828614554074a98ff0b3-38648713',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9905280_04031404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9905280_04031404')) {function content_554074a9905280_04031404($_smarty_tpl) {?>//
// Code (inline and blocK)
// --------------------------------------------------


// Inline and block code styles
code,
pre {
  font-family: $font-family-monospace;
}

// Inline code
code {
  padding: 2px 4px;
  font-size: 90%;
  color: $code-color;
  background-color: $code-bg;
  white-space: nowrap;
  border-radius: $border-radius-base;
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

  // Make prettyprint styles more spaced out for readability
  &.prettyprint {
    margin-bottom: $line-height-computed;
  }

  // Account for some code outputs that place code tags in pre tags
  code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border: 0;
  }
}

// Enable scrollable blocks of code
.pre-scrollable {
  max-height: $pre-scrollable-max-height;
  overflow-y: scroll;
}
<?php }} ?>
