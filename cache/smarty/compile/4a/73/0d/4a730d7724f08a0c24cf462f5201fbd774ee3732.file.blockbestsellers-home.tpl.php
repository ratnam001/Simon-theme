<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 21:16:23
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46476970255422b27832318-80155349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a730d7724f08a0c24cf462f5201fbd774ee3732' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1430375660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46476970255422b27832318-80155349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55422b278451f4_49807466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55422b278451f4_49807466')) {function content_55422b278451f4_49807466($_smarty_tpl) {?>
<h2>Bestsellers</h2>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
