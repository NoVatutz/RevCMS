<div id="header_bar"> 
<div id="container-me"></div>
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

<br/> 
<div id="main_left"> 
<div class="content-box"> 
<div class="content-box-black"> 
<h2 class="title">{newsTitle} - {newsDate}</h2> 
</div> 
<div class="content-box-content"> 
{newsContent}
		<br /><br /><br /><br />
		
		<div style="float: right;margin: 15px;">- <b>{newsAuthor}</b></div>
</div> 
</div> 
</div> 
<div id="main_right"> 
<div class="news-articles-box"> 
<div class="news-articles-box-green"> 
<h2 class="title">More Articles</h2> 
</div> 
<div style="padding:10px;"> 
{newsList}
</div> 
</div><br/><br/> 

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
<li><a href="logout.php">Logout</a></li> 
</ul> 
</div> 
</div> 
</div> 