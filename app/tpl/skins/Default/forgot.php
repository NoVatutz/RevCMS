<?php require_once 'global.php'; ?>

<div class="contentHolder" id="index">

	<div class="topPadding">
	
		<div class="right">
		
			<strong>Hotel Status:</strong> 1 users online
		
		</div>
		
		<div class="left">
		
			<div class="logo" id="index"></div>
		
		</div>
		
		<div class="clear"></div>
		
	</div>

	<div class="innerView" id="index">
	
		<div class="hotelView" id="index">
		
			
			<div class="box" id="login" style="height: 210px;">
			
				<div class="contentHeader" id="index"><b>Recover your account!</b> <br /> Fill the stuff below. <br /></div> 
				
				<?php $template->form->outputError(); ?>
				
				<div>
				
					<form method="post" action="forgot">
					
						Username: <br />
						<input name="for_username" type="text" />
						
						<br /><br />
						
						New Password: <br />
						<input name="for_password" type="password" />
						
						<br /><br />
						
						Secret Key: <br />
						<input name="for_key" type="password" />
						
						<br /><br />
						
				        <input type="submit" name="forgot" value="Sign in" />
				        
						<br />
					<div style="margin-bottom: -15px;"></div>
					</form>
				
				</div>
			
			</div>
		
		</div>
	
	</div>
	
	<div class="footer">
	
		Homepage | Development | Google Code | Safety <br /><br />
		
		Designed by <strong>RastaLulz</strong> &amp; Coded by <strong>Kryptos</strong>
	
	</div>
	
</div>