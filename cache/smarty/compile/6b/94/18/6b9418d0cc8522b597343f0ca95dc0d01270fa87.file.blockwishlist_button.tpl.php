<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 22:23:18
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195803631355423ad60f5072-02652208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9418d0cc8522b597343f0ca95dc0d01270fa87' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1430293976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195803631355423ad60f5072-02652208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55423ad6104af4_68560065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55423ad6104af4_68560065')) {function content_55423ad6104af4_68560065($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
