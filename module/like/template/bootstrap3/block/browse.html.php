{if count($aLikes)}
	<div style="height:300px;" class="label_flow">
		{foreach from=$aLikes name=like item=aLike}
			<div id="js_row_like_{$aLike.user_id}" style="position:relative;" class="{if is_int($phpfox.iteration.like/2)}row1{else}row2{/if}{if $phpfox.iteration.like == 1} row_first{/if}">
				{if isset($bIsPageAdmin) && $bIsPageAdmin}
					<div style="position:absolute; right: 0px;">
						<a href="#" onclick="$.ajaxCall('like.delete', 'type_id=pages&amp;item_id={$iItemId}&amp;force_user_id={$aLike.user_id}'); return false;">
							<i class="icon-remove"></i>
						</a>
					</div>
				{/if}
				<div class="go_left" style="width:55px; text-align:center;">
					{img user=$aLike suffix='_50_square' max_width=50 max_height=50}	
				</div>
				<div style="margin-left:55px;">
					{$aLike|user:'':'':30}
				</div>
				<div class="clear"></div>
			</div>
		{/foreach}
	</div>
{else}
	<div class="alert alert-error">
		{$sErrorMessage}
	</div>
{/if}