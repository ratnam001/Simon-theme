<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_list-group.scss" */ ?>
<?php /*%%SmartyHeaderCode:814877647554074b0cde7b3-26405585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef4609f881d4e9a4bb0da8efebc5d073416f0500' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_list-group.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '814877647554074b0cde7b3-26405585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0cfe587_89506229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0cfe587_89506229')) {function content_554074b0cfe587_89506229($_smarty_tpl) {?>// List Groups

@mixin list-group-item-variant($state, $background, $color) {
  .list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 {
    color: $color;
    background-color: $background;

    // [converter] extracted a& to a.list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>

  }

  a.list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 {
    color: $color;

    .list-group-item-heading {
      color: inherit;
    }

    &:hover,
    &:focus {
      color: $color;
      background-color: darken($background, 5%);
    }
    &.active,
    &.active:hover,
    &.active:focus {
      color: #fff;
      background-color: $color;
      border-color: $color;
    }
  }
}
<?php }} ?>
