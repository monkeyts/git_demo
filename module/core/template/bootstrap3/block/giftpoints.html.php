<div id="div_show_gift_points">
	<script type="text/javascript">
		function doGiftPoints()
		{l}
			var iAmount = {if $iCurrentAvailable == 1}1{else}$('#txt_amount_points').val(){/if};
			if ($.isNumeric(iAmount) == false || (Math.floor(iAmount) != iAmount))
			{l}
				alert('Please enter only numbers. ' + (Math.floor(iAmount) == iAmount));
			{r}
			else
			{l}
				$.ajaxCall('core.doGiftPoints', 'user_id={$iTrgUserId}&amount=' + iAmount);
			{r}
		{r}
	</script>
	<div class="alert alert-info">
		{phrase var='core.you_are_about_to_gift_activity_points' full_name=$aUser.full_name current=$iCurrentAvailable}		
	</div>
	{if $iCurrentAvailable > 1}
		<div class="p_top_8">
			{if $iCurrentAvailable == 1}
				{phrase var='core.you_only_have_one_point_available' full_name=$aUser.full_name}
				<div class="p_top_8">
					<input type="button" value="{phrase var='core.yes'}" class="btn btn-primary" onclick="doGiftPoints();" />
				<div class="p_top_8">
			{else}
				{phrase var='core.how_many_points_do_you_want_to_gift_away'}
				<div class="input-group">
					<input type="text" id="txt_amount_points" value="" size="8" class="form-control" /> 
					<span class="input-group-btn">
						<input type="button" value="{phrase var='core.gift_points'}" class="btn btn-primary" onclick="doGiftPoints();" />
					</span>
				<div class="p_top_8">
			{/if}
		</div>
	{else}
		<div class="alert alert-info">
			{phrase var='core.unfortunately_you_do_not_have_enough_points_to_gift_away'}
		</div>
	{/if}
</div>