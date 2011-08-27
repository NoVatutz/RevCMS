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
		
			<div class="box" id="register"> 
				<div class="contentHeader" id="index">
			
				Thank you for registering!<br /><br /></div>
			
				<?php $template->form->outputError(); ?>
				
     		 	<div>
					<form method="post" action="register">
					
						Username:<br />
						<input name="reg_username" type="text" /> <div style="float: right; margin-top: -12px; margin-right: 40px;"> Security Key: 																	  <br />
																  <input name="reg_seckey" type="password" />				
																  </div>					
						<br /><br />
						
						Email:<br />
						<input name="reg_email" type="text" />
						
						<br /><br />
						
						Password: <br />
						<input name="reg_password" type="password" />
						
						<br /><br />
						
						Repeat Password: <br />
						<input name="reg_rep_password" type="password" />
						
						<br /><br />
						
				       <center> <input type="submit" name="register" value="Sign up" />
				        
				        <br /><br />
				       <a href="index">Already have an account? Log in!</a></center>
					
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