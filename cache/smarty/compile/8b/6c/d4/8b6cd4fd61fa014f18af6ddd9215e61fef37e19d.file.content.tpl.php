<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:08
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2065574340554074947805f0-51911883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b6cd4fd61fa014f18af6ddd9215e61fef37e19d' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/template/content.tpl',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2065574340554074947805f0-51911883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5540749478b206_47415099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5540749478b206_47415099')) {function content_5540749478b206_47415099($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
