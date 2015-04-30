<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 21:16:23
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/fmmnewsslider/fmmnewsslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71750353455422b277bcd59-99236729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d4ed44bb505ba9a5ffa49a330bea87dd2301d6' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/dragonsports/modules/fmmnewsslider/fmmnewsslider.tpl',
      1 => 1430388815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71750353455422b277bcd59-99236729',
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
  'unifunc' => 'content_55422b277f1914_06390039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55422b277f1914_06390039')) {function content_55422b277f1914_06390039($_smarty_tpl) {?>

<!-- FMM News Slider -->
<div id="myNews" class="block">
	<h2><?php echo smartyTranslate(array('s'=>"News"),$_smarty_tpl);?>
</h2>
<?php if (count($_smarty_tpl->tpl_vars['newsInfos']->value)>0) {?>
	<div class="block_content">
		<ul>
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
		</ul>
	</div>
	<?php } else { ?>
	<div class="block_content products-block">
		<p><?php echo smartyTranslate(array('s'=>'There is no Latest News. Stay tuned for Latest News.'),$_smarty_tpl);?>
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
