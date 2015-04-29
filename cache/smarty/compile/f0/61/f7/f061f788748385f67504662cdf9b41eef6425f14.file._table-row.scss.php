<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_table-row.scss" */ ?>
<?php /*%%SmartyHeaderCode:1382390390554074b0bbe8a9-97735033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f061f788748385f67504662cdf9b41eef6425f14' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_table-row.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382390390554074b0bbe8a9-97735033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0c6f858_08894055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0c6f858_08894055')) {function content_554074b0c6f858_08894055($_smarty_tpl) {?>// Tables

@mixin table-row-variant($state, $background) {
  // Exact selectors below required to override `.table-striped` and prevent
  // inheritance to nested tables.
  .table > thead > tr,
  .table > tbody > tr,
  .table > tfoot > tr {
    > td.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    > th.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 > td,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 > th {
      background-color: $background;
    }
  }

  // Hover states for `.table-hover`
  // Note: this is not available for cells or rows within `thead` or `tfoot`.
  .table-hover > tbody > tr {
    > td.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover,
    > th.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover > td,
    &:hover > .#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover > th {
      background-color: darken($background, 5%);
    }
  }
}
<?php }} ?>
