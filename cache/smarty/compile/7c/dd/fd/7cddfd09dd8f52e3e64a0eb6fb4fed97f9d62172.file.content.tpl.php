<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:21
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1657780270554074a1e56e52-16374032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cddfd09dd8f52e3e64a0eb6fb4fed97f9d62172' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1657780270554074a1e56e52-16374032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a1e5cba7_66279238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a1e5cba7_66279238')) {function content_554074a1e5cba7_66279238($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
