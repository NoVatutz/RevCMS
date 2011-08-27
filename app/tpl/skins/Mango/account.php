<script> 
var cimagesLocation = '<?php echo $_CONFIG['hotel']['url']; ?>/';
var news = new Array();
news[1] = ["{newsID-1}","{newsIMG-1}","{newsCaption-1}","{newsTitle-1}"];
news[2] = ["{newsID-2}","{newsIMG-2}","{newsCaption-2}","{newsTitle-2}"];
news[3] = ["{newsID-3}","{newsIMG-3}","{newsCaption-3}","{newsTitle-3}"];
news[4] = ["{newsID-4}","{newsIMG-4}","{newsCaption-4}","{newsTitle-4}"];
news[5] = ["{newsID-5}","{newsIMG-5}","{newsCaption-5}","{newsTitle-5}"];
</script> 
<script language="javascript" type="text/javascript"> 
$(document).ready(function(){
	mango.news.init();
});
</script> 

<div id="header_bar"> 
<div id="container-me"> 
<div class="mid"> 
<div class="lefts"> 
Welcome back, {username}
</div> 
<div class="right"> 
<img src="app/tpl/skins/Mango/images/creditIcon.png" style="vertical-align:middle;margin-right:5px;"/><span>{coins}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=""><img src="app/tpl/skins/Mango/images/pixelIcon.png" style="vertical-align:middle;margin-right:5px;"/>{activitypoints}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=""><img src="app/tpl/skins/Mango/images/icon_users.png" style="vertical-align:middle;margin-right:5px;"/>{online} Users Online!</span> 
</div> 
</div> 
</div> 
</div> 
<div id="content"> 
<a href="index"><img src="app/tpl/skins/Mango/images/logo.png" id="logo" border="0"/></a> 
<ul id="menu"> 
<li><a href="me">Me</a></li> 
<li><a href="account">My Account</a></li> 
<li><a href="news">News</a></li> 
{housekeeping}
<li><a href="logout">Logout</a></li> 
</ul> 
<div id="clear"></div> 
<hr/> 
<div id="featured_campaign"> 
<div id="user_info"> 
<div id="avatar-plate"> 
<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure={figure}&action=wav&direction=2&head_direction=3&gesture=srp&size=l" id="user"/> 
</div> 
</div> 
<div id="enter_area"> 
<div class="enterButton"> 
<center><a href="api.php" onclick="mango.client.popup(); return false;">Enter {hotelName} Hotel</a></center> 
</div> 
</div> 
</div><br/> 

<div id="main_left"> 
<div class="content-box"> 
<div class="content-box-black"> 
<h2 class="title">My Account</h2> 
</div> 
<div class="content-box-content"> 
<?php if(isset($template->form->error)) { echo '<div id="message">'.$template->form->error.'</div>'; } ?>
From here you can modify your account information such as email address and password! <br/> 
<br/> 
<form action="" method="post"> 
<table width="766" border="0"> 
<tr> 
<td width="150"><strong>Email</strong></td> 
<td width="606"><input name="acc_email" type="text" id="email" value="{email}"/></td> 
</tr> 
<tr> 
<td><strong>Motto</strong></td> 
<td><label for="motto"></label> 
<input name="acc_motto" type="text" id="motto" value="{motto}"/></td> 
</tr> 
<tr> 
<td width="150">&nbsp;</td> 
<td width="500"><i>Only fill out passwords if you wish to change them.</i></td> 
</tr> 
<tr> 
<td><strong>Current Password:</strong></td> 
<td><input type="password" name="acc_old_password" id="password"/></td> 
</tr> 
<tr> 
<td><strong>New Password:</strong></td> 
<td><input type="password" name="acc_new_password" id="confirm_password"/></td> 
</tr> 
<tr> 
<td>&nbsp;</td> 
<td><input type="submit" name="account" id="button" value="Update"/></td> 
</tr> 
</table> 
</form> 
</div> 
</div> 
</div> <div id="main_right"> 
<div id="top_stories"> 
<div id="top-story"> 
<div id="top-snippet"></div> 
</div> 
<div id="top-headlines-holder"> 
<div class="subnews_1"><a href="index.php?url=news&id={newsID-1}">{newsTitle-1} &raquo;</a> 
<div class="sub-news-date">{newsDate-1}</div> 
</div> 
<div class="subnews_0"><a href="index.php?url=news&id={newsID-2}">{newsTitle-2} &raquo;</a> 
<div class="sub-news-date">{newsDate-2}</div> 
</div> 
<div class="subnews_1"><a href="index.php?url=news&id={newsID-3}">{newsTitle-3} &raquo;</a> 
<div class="sub-news-date">{newsDate-3}</div> 
</div> 
<div class="subnews_0"><a href="index.php?url=news&id={newsID-4}">{newsTitle-4} &raquo;</a> 
<div class="sub-news-date">{newsDate-4}</div> 
</div> 
<div class="subnews_1"><a href="index.php?url=news&id={newsID-1}">{newsTitle-5} &raquo;</a> 
<div class="sub-news-date">{newsDate-5}</div> 
</div> 
<div style="text-align:right; margin:3px;"><a href="news">Read more &raquo;</a></div> 
</div> 
</div> 
<br/>&nbsp;<br/> 
</script> 
<br/><br/> 
</div> 
<div id="clear"></div></div> 
<div id="footer"> 
<div class="left"> 
<ul> 
<strong>Sitemap</strong> 
<li><a href="me.php">Me</a></li> 
<li><a href="#">My Account</a></li> 
<li><a href="#">Articles</a></li> 
<li><a href="#">The {hotelName} Way</a></li> 
<li><a href="#">The {hotelName} Team</a></li> 
</ul> 
</div> 
<div class="left"> 
<ul> 
<li>&nbsp;</li> 
<li><a href="#">eXperts</a></li> 
<li><a href="#">Credits</a></li> 
<li><a href="#">{hotelName} VIP</a></li> 
<li><a href="#">{hotelName} Store</a></li> 
<li><a href="#">{hotelName} Club</a></li> 
</ul> 
</div> 
<div class="left"> 
<ul> 
<li>&nbsp;</li> 
<li><a href="#">Help</a></li> 
<li><a href="logout">Logout</a></li> 
</ul> 
</div> 
</div> 
</div> 