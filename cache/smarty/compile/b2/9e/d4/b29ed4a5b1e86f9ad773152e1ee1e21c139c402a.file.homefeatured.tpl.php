<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 21:16:23
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45746311255422b278cd0d1-60092781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b29ed4a5b1e86f9ad773152e1ee1e21c139c402a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/homefeatured/homefeatured.tpl',
      1 => 1430375601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45746311255422b278cd0d1-60092781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55422b278e0d78_55809444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55422b278e0d78_55809444')) {function content_55422b278e0d78_55809444($_smarty_tpl) {?>
<h2>Promotions</h2>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
