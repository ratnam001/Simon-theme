<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 22:23:17
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112382608355423ad580d669-67725766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a8c1c1e34a282c2e1e9d62174413d0571ae3f3' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/category-count.tpl',
      1 => 1430293976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112382608355423ad580d669-67725766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55423ad5833091_74115489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55423ad5833091_74115489')) {function content_55423ad5833091_74115489($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
