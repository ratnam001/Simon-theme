<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 17:24:06
         compiled from "/home1/lamppp/htdocs/Simon-theme/modules/fmmnewsslider/fmmnewsslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16590154855541f4b6afdd64-09086947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd91d3b10ed0fcbd94ec838ede5957ef03e28560' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/modules/fmmnewsslider/fmmnewsslider.tpl',
      1 => 1430385450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16590154855541f4b6afdd64-09086947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newsInfos' => 0,
    'link' => 0,
    'link_value' => 0,
    'newsInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5541f4b6b2b828_53985718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541f4b6b2b828_53985718')) {function content_5541f4b6b2b828_53985718($_smarty_tpl) {?>

<!-- FMM News Slider -->
<div id="myNews" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'News and Events'),$_smarty_tpl);?>
</p>
<?php if (count($_smarty_tpl->tpl_vars['newsInfos']->value)>0) {?>
	<div class="block_content">
		<marquee direction="up"  scrollamount = "2">	
		<?php  $_smarty_tpl->tpl_vars['newsInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsInfos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsInfo']->key => $_smarty_tpl->tpl_vars['newsInfo']->value) {
$_smarty_tpl->tpl_vars['newsInfo']->_loop = true;
?>
			<li class="bullet"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('fmmnewsslider','display'), ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['link_value']->value==0) {?>&<?php } else { ?>?<?php }?>id_news=<?php echo $_smarty_tpl->tpl_vars['newsInfo']->value['id_news'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsInfo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsInfo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" />
			<hr/><span><?php echo $_smarty_tpl->tpl_vars['newsInfo']->value['title'];?>
</span><hr/>
			</a></li>
		<?php } ?>
		</marquee> 
	</div>
	<?php } else { ?>
	<div class="block_content products-block">
		<p><?php echo smartyTranslate(array('s'=>'There is no Latest New.Stay tune for Latest News.'),$_smarty_tpl);?>
<p>
	</div>
<?php }?>
</div>
<!-- /FMM News Slider -->


<!--css-->
<style type="text/css">
#myNews.block li.bullet a {
    background: none repeat scroll 0 0 #808080 !important;
    color: white !important;
    display: block !important;
    padding-left: 5px;
    border-bottom:none!important;
}
</style>

<!--javascript-->
<script type="text/javascript">
$(function() {
    $('marquee').mouseover(function() {
        $(this).attr('scrollamount',0);
    }).mouseout(function() {
         $(this).attr('scrollamount',2);
    });

});
</script><?php }} ?>
