{if $bRefreshPhoto}
<div class="cover_photo_link" {if !$sMacCoverPosition}style="height:415px"{/if}>
{else}

<div class="cover_photo_link" style="background-position:center {if !$sMacCoverPosition}{$sLogoPosition}px{else}center{/if};background-image: url('{img id='js_photo_cover_position' server_id=$aCoverPhoto.server_id path='photo.url_photo' file=$aCoverPhoto.destination suffix=$sMacCoverSize return_url=true}');">

{*
<img style="position: absolute; top: {$sLogoPosition}px; left: 0px;" id="js_photo_cover_position" alt="P1010007" src="{img id='js_photo_cover_position' server_id=$aCoverPhoto.server_id path='photo.url_photo' file=$aCoverPhoto.destination suffix=$sMacCoverSize return_url=true}">
*}

<div class="mac-cover-pic-info"></div>

<div class="mac-cover-pic-padding">&nbsp;</div>
{*<h1 class="mac-cover-pic-padding">&nbsp;</h1>*}
</div>
<br>
{/if}

{if $bRefreshPhoto}

{if $sMacCoverPosition}
<div class="cover_photo_link" style="background-position:center center;background-image: url('{img id='js_photo_cover_position' server_id=$aCoverPhoto.server_id path='photo.url_photo' file=$aCoverPhoto.destination suffix=$sMacCoverSize return_url=true}');">
{else}
{img id='js_photo_cover_position' server_id=$aCoverPhoto.server_id path='photo.url_photo' file=$aCoverPhoto.destination suffix=$sMacCoverSize title=$aCoverPhoto.title style='position:absolute; top:'$sLogoPosition'px; left:0px;' time_stamp=true}
{/if}
{*<h1 class="mac-cover-pic-padding">&nbsp;</h1>*}
</div>

{if !$sMacCoverPosition}
	{literal}
		<style type="text/css">
			#js_photo_cover_position
			{
				cursor:move;
			}
		</style>
		<script type="text/javascript">
		var sCoverPosition = '0';	
		$Behavior.positionCoverPhoto = function(){			
			$('#js_photo_cover_position').draggable('destroy').draggable({
				axis: 'y',
				cursor: 'move',	
				stop: function(event, ui){
					var sStop = $(this).position();
					sCoverPosition = sStop.top;			
				}
			});	
		}
		</script>
	{/literal}
{else}
	<script type="text/javascript">
	var sCoverPosition = '0';
	</script>
{/if}

	<div class="cover_photo_change" style="max-width:{if !$sMacCoverPosition}420px{else}220px{/if};margin:0 auto 20px auto;text-align:left;padding-left:10px">
		{if !$sMacCoverPosition}{phrase var='user.drag_to_reposition_cover'}{/if}
		<form method="post" action="#">
			<ul class="table_clear_button">
				<li id="js_cover_update_loader_upload" style="display:none;">{img theme='ajax/add.gif' class='v_middle'}</li>		
				<li class="js_cover_update_li"><div><input type="button" class="btn btn-default" value="{phrase var='user.cancel_cover_photo'}" name="cancel" onclick="window.location.href='{if $bIsPages}{$sPagesLink}{else}{url link='profile'}{/if}';" /></div></li>
				<li class="js_cover_update_li"><div><input type="button" class="btn btn-primary" value="{phrase var='user.save_changes'}" name="save" onclick="$('.js_cover_update_li').hide(); $('#js_cover_update_loader_upload').show(); $.ajaxCall('{$sAjaxModule}.updateCoverPosition', 'position=' + sCoverPosition{if $sAjaxModule == 'pages'} + '&page_id={$aPage.page_id}'{/if}); return false;" /></div></li>
			</ul>
			<div class="clear"></div>
		</form>
	</div>


{/if}