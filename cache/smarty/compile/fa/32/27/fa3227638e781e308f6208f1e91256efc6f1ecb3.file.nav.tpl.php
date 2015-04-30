<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 22:23:18
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15262149755423ad62ae1e1-83974069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3227638e781e308f6208f1e91256efc6f1ecb3' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/blockcontact/nav.tpl',
      1 => 1430293976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15262149755423ad62ae1e1-83974069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55423ad62c3237_36283577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55423ad62c3237_36283577')) {function content_55423ad62c3237_36283577($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>
