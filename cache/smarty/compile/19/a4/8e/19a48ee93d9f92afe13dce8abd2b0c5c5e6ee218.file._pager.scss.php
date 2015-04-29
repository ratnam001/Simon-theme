<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_pager.scss" */ ?>
<?php /*%%SmartyHeaderCode:1217878039554074b17fa7d9-01857586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a48ee93d9f92afe13dce8abd2b0c5c5e6ee218' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_pager.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1217878039554074b17fa7d9-01857586',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1807bd4_36333327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1807bd4_36333327')) {function content_554074b1807bd4_36333327($_smarty_tpl) {?>//
// Pager pagination
// --------------------------------------------------


.pager {
  padding-left: 0;
  margin: $line-height-computed 0;
  list-style: none;
  text-align: center;
  @include clearfix();
  li {
    display: inline;
    > a,
    > span {
      display: inline-block;
      padding: 5px 14px;
      background-color: $pager-bg;
      border: 1px solid $pager-border;
      border-radius: $pager-border-radius;
    }

    > a:hover,
    > a:focus {
      text-decoration: none;
      background-color: $pager-hover-bg;
    }
  }

  .next {
    > a,
    > span {
      float: right;
    }
  }

  .previous {
    > a,
    > span {
      float: left;
    }
  }

  .disabled {
    > a,
    > a:hover,
    > a:focus,
    > span {
      color: $pager-disabled-color;
      background-color: $pager-bg;
      cursor: not-allowed;
    }
  }

}
<?php }} ?>
