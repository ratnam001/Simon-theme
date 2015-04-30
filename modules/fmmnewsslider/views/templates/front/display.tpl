{if $currentNews_id != 0 AND !empty($News)}
	{foreach from=$News item=mynews}
		{if $mynews.id_lang == $cookie->id_lang AND $mynews.id_news == $currentNews_id AND $mynews.title !="" }
			<h3 class="news_head">{$mynews.title}</h3>
			{$mynews.detail}
		{/if}
	{/foreach}
{else}
	<p>{l s="News section is empty, stay tune for latest News."}</p>
{/if}


<!-- Style -->

<style>
.news_head {
     background: none repeat scroll 0 0 #383838;
    color: #FFFFFF;
    padding: 6px 11px;
    margin-bottom: 5px;
    text-shadow: 0 1px 0 #000000;
    text-transform: uppercase;
  
}
p {
	font-size: 12px;
	line-height: 18px;
  
}
</style>
