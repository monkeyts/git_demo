<div class="label_flow p_4">
	{foreach from=$aBookmarks item=aBookmark name=bookmark}
	<div class="go_left p_4" style="width:45%;">
		<a href="{$aBookmark.url}" target="_blank">
			<img src="{$sUrlStaticImage}{$aBookmark.icon}" alt="" style="vertical-align:middle;" />
		</a> 
		<a href="{$aBookmark.url}" target="_blank">{$aBookmark.title}</a>
	</div>
	{if is_int($phpfox.iteration.bookmark/2)}
	<div class="clear"></div>
	{/if}
	{/foreach}
	<div class="clear"></div>
</div>