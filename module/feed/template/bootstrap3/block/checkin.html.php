<li>
	<a href="#" type="button" id="btn_display_check_in" class="activity_feed_share_this_one_link parent feed_share_map" onclick="return false;" rel="tooltip" data-original-title="Check-in" data-placement="top">
		<i class="icon-map-marker icon-2x"></i>
	</a>
	
	<script type="text/javascript">
		$Behavior.prepareInit = function()
		{l}
			$Core.Feed.sIPInfoDbKey = '{param var="core.ip_infodb_api_key"}';
			$Core.Feed.sGoogleKey = '{param var="core.google_api_key"}';
			
			{if isset($aVisitorLocation)}
				$Core.Feed.setVisitorLocation({$aVisitorLocation.latitude}, {$aVisitorLocation.longitude} );
			{else}
				
			{/if}
			
			$Core.Feed.googleReady();
			$Core.Feed.init();
		{r}
	</script>
	<script type="text/javascript" src="{param var='core.url_module'}feed/static/jscript/places.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key={param var="core.google_api_key"}&sensor=true&libraries=places"></script>					
</li>