<div class="center content round">
		<div class="head">
			<img src="app/tpl/skins/Priv/images/logo.png" alt="Logo" />
			<div class="online"><b>{online}</b> {hotelName}'s online now!</div>
		</div>
			
		<?php if(isset($template->form->error)) { echo '<div id="message">'.$template->form->error.'</div>'; } ?>
			
		<div class="left login small round">
			<p class="title">Login to {HotelName}</p>
				
			<form action="index" method="post">
				<p><label for="username">Username:</label><br />
				<input type="text" name="log_username" id="username"/></p>

				<p><label for="password">Password:</label><br />
				<input type="password" name="log_password" id="password"/></p>
					
				<input type="submit" name="login" class="button round" value="Sign in!" />
			</form>
		</div>
			
		<div class="right register green small round">
			New here?
			<p><img src="app/tpl/skins/Priv/images/smallhotel.png" alt="hotel" /></p>
			<a href="register">REGISTER FOR FREE!</a>
		</div>
			
		<div class="clear"></div>
	</div>
		
	<div class="center copyright">
		 Designed by <b>joopie</b> and coded by <b>Kryptos</b>
	</div>