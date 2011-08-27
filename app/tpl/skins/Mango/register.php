<div id="container"> 
<a href="index.php"><img src="app/tpl/skins/Mango/images/logo.png" id="logo" border="0"/></a> 
<span id="stats">{online} Users Online!</span> 
<div id="clear"></div> 
<hr/>  
<?php if(isset($template->form->error)) { echo '<div id="message">'.$template->form->error.'</div>'; } ?>
Welcome to {hotelName}! We're very excited to meet you, complete the following form and you will get a account with us and <?php echo $_CONFIG['hotel']['credits']; ?> free credits! We'll see you inside!<br/><br/> 
<form action="register" method="post"> 
<table width="100%" border="0"> 
<tr> 
<td width="25%">Username:</td> 
<td width="75%"> 
<input type="text" name="reg_username" id="register" value="<?php echo $template->form->reg_username; ?>"/> 

</tr> 
<tr> 
<td>Password:</td> 
<td><input type="password" name="reg_password" id="register"/></td> 
</tr> 
<tr> 
<td>Confirm Password:</td> 
<td><input type="password" name="reg_rep_password" id="register"/></td> 
</tr> 
<tr> 
<td>Email:</td> 
<td><input type="text" name="reg_email" id="register" value="<?php echo $template->form->reg_email; ?>"/></td> 
</tr> 
<tr> 
<td valign="top">Security key:</td> 
<td> 
<input type="password" name="reg_seckey" id="register"/>
</td> 
</tr> 
<tr> 
<td><input type="submit" name="register" id="button" value="Register"/></td> 
</tr> 
</table> 
</form> 
<hr/> 
<center> 
Designed by <b>dannyy94</b> & coded by <b>Kryptos</b>
</center> 
</div>