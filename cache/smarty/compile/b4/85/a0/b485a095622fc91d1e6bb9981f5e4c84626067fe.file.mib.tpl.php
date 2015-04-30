<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 22:09:57
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/mib/views/templates/hook/mib.tpl" */ ?>
<?php /*%%SmartyHeaderCode:864056568554237b557f613-80822027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b485a095622fc91d1e6bb9981f5e4c84626067fe' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/mib/views/templates/hook/mib.tpl',
      1 => 1430382452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '864056568554237b557f613-80822027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'content_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554237b55b3c83_51711694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554237b55b3c83_51711694')) {function content_554237b55b3c83_51711694($_smarty_tpl) {?><div class="block" id="mypresta_mib">
    <!--<p class="title_block"><?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'mib'),$_smarty_tpl);?>
</p>-->
	<h2>Shop for martial arts, combat sports and energy arts equipments</h2>
    <ul>
       	<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
           <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['image']) {?>
        	   <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
                   <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['image_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                   </a>
               </li>
           <?php }?>
    	<?php } ?>
    </ul>
</div><?php }} ?>
