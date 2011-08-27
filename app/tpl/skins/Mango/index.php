<div id="loginbox"> 
<img src="app/tpl/skins/Mango/images/logo.png" id="logo"/> 
<span id="stats">{online} Users Online!</span> 
<div id="clear"></div> 
<hr/> 
<div id="login_image"> 
<div id="main_login"> 
<?php if(isset($template->form->error)) { echo '<div id="message">'.$template->form->error.'</div>'; } ?>
<strong>Welcome to {hotelName}!</strong><br/> 
Please login with your account or click Register to create one
<div style="height:5px;"></div> 
<form action="index" method="post"> 
<table width="200" border="0"> 
<tr> 
<td>Username<br/> 
<input type="text" name="log_username" id="username"/></td> 
</tr> 
<tr> 
<td>Password<br/> 
<input type="password" name="log_password" id="password"/></td> 
</tr> 
<tr> 
<td> 
<input type="submit" name="login" id="button" value="Login" style="margin-right:2px; width: 104px;"/><input type="button" style="width: 104px;" name="button2" id="button" value="Register" onclick='window.location="register"'/> </td> 
</tr> 
</table> 
</form> 
</div> 
</div> 
<hr/><center>Designed by <b>dannyy94</b> & coded by <b>Kryptos</b></center> 
</div> 