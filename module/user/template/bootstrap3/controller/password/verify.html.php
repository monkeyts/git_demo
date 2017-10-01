{if Phpfox::getParam('user.shorter_password_reset_routine') && isset($sRequest)}
	
	<form action="{url link='user.password.verify' id=$sRequest}" method="post">
		<div>
			<input type="hidden" name="val[request]" class="js_attachment" value="{$sRequest}" />		
		</div>
		<div class="table">
			<div class="table_left">
				{phrase var='user.new_password'}
			</div>
			<div class="table_right">
				<input type="password" name="val[newpassword]" />
			</div>		
		</div>
		<div class="table">
			<div class="table_left">
				{phrase var='user.confirm_password'}
			</div>
			<div class="table_right">
				<input type="password" name="val[newpassword2]" />
			</div>		
		</div>
		<div class="table">
			<div class="table_left"> </div>
			<div class="table_right"> <input type="submit" class="button" value="{phrase var='user.update'}" /> </div>
	</form>

{/if}