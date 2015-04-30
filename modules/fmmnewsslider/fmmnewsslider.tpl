{*
*  FMM News Slider Module
*  Author: unitedsol
*  Property of Unitedsol
*}

<!-- FMM News Slider -->
<div id="myNews" class="block">
	<p class="title_block">{l s= 'News and Events'}</p>
{if $newsInfos|@count > 0}
	<div class="block_content">
		<marquee direction="up"  scrollamount = "2">	
		{foreach from=$newsInfos item=newsInfo}
			<li class="bullet"><a href="{$link->getModuleLink('fmmnewsslider', 'display')|escape:'html'}{if $link_value==0}&{else}?{/if}id_news={$newsInfo.id_news}" alt="{$newsInfo.title|escape:html:'UTF-8'}" title="{$newsInfo.title|escape:html:'UTF-8'}" />
			<hr/><span>{$newsInfo.title}</span><hr/>
			</a></li>
		{/foreach}
		</marquee> 
	</div>
	{else}
	<div class="block_content products-block">
		<p>{l s= 'There is no Latest New.Stay tune for Latest News.'}<p>
	</div>
{/if}
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
</script>