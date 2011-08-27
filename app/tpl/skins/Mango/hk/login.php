 <div id="main">
    <div id="links"></div>
    <div class="header" id="login">
 </div>
    <div id="site_conten" class="login">
      <div id="content_container" class="login">

        <div id="content" class="login">
          <!-- insert the page content here -->
          <h1>{hotelName} ASE</h1>
          <p>Welcome to the {hotelName} Hotel All Seeing Eye. Your IP has been logged (<?php echo $_SERVER["REMOTE_ADDR"]; ?>)
			Please note any attempt to brute-force or exploit this system will be noticed by Zap administration so if you do not have clearance to this area, fuck off. <br /></p>
			
			 <?php echo $template->form->error; ?>
			
			<br />
				<form method="post" action="index.php?url=login">
				Username: <br /> <input type="text" name="username" class="login"/> <br /> <br />
				Password: <br /> <input type="password" name="password" class="login"/> <br /> <br /><br />
						<input type="submit" value="Log into ASE" name="login" class="login"/>
				</form><br /><br />     <center>Powered by ZapASE by Jontycat - Design by Predict</center>
  	<center>Implemented into RevCMS by Kryptos</center><br />
        </div>
      </div>
    </div>
  </div>