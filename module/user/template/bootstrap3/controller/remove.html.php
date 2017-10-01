<div class="main_break">
	{phrase var='user.are_you_sure_you_want_to_delete_your_account'}
	{if Phpfox::isModule('friend')}
		<table width="100%">
			<tr>
				{foreach from=$aFriends item=aFriend name=friends}
				<td align='center'>
					{img id='sJsUserImage_'$aFriend.friend_id'' user=$aFriend suffix='_120' max_width=1200 max_height=120}
					<br />
					{phrase var='user.user_info_will_miss_you' user_info=$aFriend|user}
				</td>
				{/foreach}
			</tr>
		</table>
	{/if}
</div>
<div class="clear"></div>
<div class="main_break">
	<form class="mac-form-user-remove form-horizontal" action="{url link='user.remove.confirm'}" method="post">
	<div class="table" style="margin-top: 15px;">
		{if !empty($aReasons)}
		<div class="table_left"><h2>{phrase var='user.why_are_you_deleting_your_account'} {required}</h2> </div>
		<div class="table_right">
			{foreach from=$aReasons item=aReason name=reasons}
			<div class="p_2">
				<label>
					<input type="checkbox" name='val[reason][]' value="{$aReason.delete_id}" class="v_middle" /> {phrase var=user.$aReason.phrase_var}
				</label>
			</div>
			{/foreach}
		</div>
		{/if}

		<hr class="invisible">

		<div class="form-group">
			<div class="col-lg-12">
				<textarea class="form-control" placeholder="{phrase var='user.please_tell_us_why'}" cols="40" rows="4" name="val[feedback_text]"></textarea>
			</div>
		</div>
		{if !Phpfox::getUserBy('fb_user_id')}
		<hr class="invisible">
		<div class="form-group">
			<div class="col-lg-12">
				<input placeholder="{phrase var='user.enter_your_password'}" type="password" name="val[password]" size="20" class="form-control" />
			</div>
		</div>
		{/if}	
		<hr class="invisible">	
		<div class="btn-group" style="margin-top:15px;">			
			<input type="submit" onclick="return confirm('{phrase var='user.are_you_absolutely_sure_this_operation_cannot_be_undone' phpfox_squote=true}');" class="btn btn-danger" value="{phrase var='user.delete_my_account'}" />
			<input type="button" class="btn btn-default" onclick="window.location='{url link='user.setting'}'" value="{phrase var='user.cancel_uppercase'}" />
		</div>
	</div>

	<div class="clear"></div>
</div>
</form>