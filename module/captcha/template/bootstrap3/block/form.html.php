{if isset($bCaptchaPopup) && $bCaptchaPopup}
<div id="js_captcha_load_for_check">
	<form method="post" action="#" id="js_captcha_load_for_check_submit">
{/if}
<div class="table_clear">
	<div class="captcha_holder">
		<div class="captcha_title">{phrase var='captcha.captcha_challenge'}</div>
		{if Phpfox::getParam('captcha.recaptcha')}
			<div id="js_recaptcha_holder" style="direction:ltr;">
				{$sCaptchaData}
			</div>
		{else}
			<div class="go_left">
				<a href="#" onclick="$('#js_captcha_process').html($.ajaxProcess('{phrase var='captcha.refreshing_image' phpfox_squote=true}')); $('#js_captcha_image').ajaxCall('captcha.reload', 'sId=js_captcha_image&amp;sInput=image_verification'); return false;"><img src="{$sImage}" alt="{phrase var='captcha.reload_image'}" id="js_captcha_image" class="captcha" title="{phrase var='captcha.click_refresh_image'}" /></a>
			</div>
			<a href="#" onclick="$('#js_captcha_process').html($.ajaxProcess('{phrase var='captcha.refreshing_image' phpfox_squote=true}')); $('#js_captcha_image').ajaxCall('captcha.reload', 'sId=js_captcha_image&amp;sInput=image_verification'); return false;" title="{phrase var='captcha.click_refresh_image' phpfox_squote=true}">{img theme='misc/reload.gif' alt='Reload'}</a>		
			<span id="js_captcha_process"></span>
			<div class="clear"></div>
			<div class="captcha_form">
				<input placeholder="{phrase var='captcha.type_verification_code_above'}" class="form-control input-lg" type="text" name="val[image_verification]" size="10" id="image_verification" />
				<!--<br>
				<div class="alert alert-info">
					<a class="close" data-dismiss="alert" href="#">&times;</a>
					{phrase var='captcha.type_verification_code_above'}
				</div>-->
			</div>
			<script type="text/javascript">
				$Behavior.loadImageVerification = function(){l}
					$('#image_verification').attr('autocomplete', 'off');
				{r}
			</script>
		{/if}
	</div>
</div>
{if isset($bCaptchaPopup) && $bCaptchaPopup}
		<ul class="table_clear_button">
			<li><input type="submit" value="Submit" class="button" /></li>
			<li><input type="button" value="Cancel" class="button button_off" onclick="$('#js_captcha_load_for_check').hide();" /></li>
		</ul>
	</form>
</div>
{/if}