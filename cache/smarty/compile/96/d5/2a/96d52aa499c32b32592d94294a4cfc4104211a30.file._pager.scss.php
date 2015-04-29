<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_pager.scss" */ ?>
<?php /*%%SmartyHeaderCode:1331594537554074a95cecd2-62979176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96d52aa499c32b32592d94294a4cfc4104211a30' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_pager.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331594537554074a95cecd2-62979176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a96101c8_31177995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a96101c8_31177995')) {function content_554074a96101c8_31177995($_smarty_tpl) {?>//
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
      background-color: $pagination-bg;
      border: 1px solid $pagination-border;
      border-radius: $pager-border-radius;
    }

    > a:hover,
    > a:focus {
      text-decoration: none;
      background-color: $pagination-hover-bg;
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
      background-color: $pagination-bg;
      cursor: not-allowed;
    }
  }

}
<?php }} ?>
