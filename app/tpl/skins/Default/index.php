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
		
			
			<div class="box" id="login">
				
				<div class="contentHeader" id="index"><b>New here?</b> <a href="register">Register today</a><br /><br /></div>
				
				
				<?php $template->form->outputError(); ?> 
				
				<div>
				
					<form method="post" action="index">
					
						<div style="margin-left: 6px;">Username: </div>
						<center><input name="log_username" type="text" /></center>
						
						<br /><br />
						
						<div style="margin-left: 6px;">Password:</div>
					<center>	<input name="log_password" type="password" /></center>
						
						<br /><br />
				    <div style="margin-left: 6px;"><input type="submit" name="login" value="Sign in" /></div><br />
				    <center><a href="forgot">Forgot your login?</a> <br /><br /></center>
				     
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