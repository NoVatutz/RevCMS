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
Welcome back, {username}!
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
<h2 class="title">Welcome to {hotelName} Hotel</h2> 
</div> 
<div class="content-box-content"> 
Welcome to {hotelName} Hotel.<br/> 
We're performing updates to our website over the coming months so please be patient as we fix things that may not be working as expected!
</div> 
</div> <br/> 
 
 
<div class="content-box"> 
<div class="content-box-orange"> 
<h2 class="title">Vote for {hotelName} </h2> 
</div> 
<div class="content-box-content"> 
<center> 
<script type="text/javascript" src="http://retro-source.info/button.js.php?u=<?php echo $_CONFIG['retro_source']['user']; ?>"></script><noscript><a href="http://retro-source.info/" target="_blank"><img src="http://retro-source.info/new_bubbo_u.gif" alt="Retro-Source - Top Habbo Retro Sites - Habbo Hotel, Credits, Free, Retros, Working, Online, Text Generator, File, Image, Uploader, Forum, Loader, Maker, Generator, Font " border="0"/></a></noscript> 
<a href="http://retrotopsites.com/functions/in.cfm?user=<?php echo $_CONFIG['retro_top']['user']; ?>"><img src="http://retrotopsites.com/Images/vote.gif" alt="Vote For Us!" border="0"/></a> 
<a href="http://thehabbos.org/vote/<?php echo $_CONFIG['thehabbos']['username']; ?>" target="_new"><img src="http://thehabbos.org/button.php?u=<?php echo $_CONFIG['thehabbos']['username']; ?>" alt="Habbo Retros (Habbo) | Play Habbo for Free!" border="0"/></a> 
</center> 
</div> 
</div> <br/> 
  
<div class="content-box"> 
<div class="content-box-deep-blue"> 
<h2 class="title">Featured Campaigns</h2> 
</div> 
<div class="content-box-content" style="padding-top:0px; padding-bottom:0px;"> 
<hr/> 
<div class="campaign_images"> 
<img src="http://images.bubbo.co.uk/c_images/hot_campaign_images_hq/hotcampaign_thumb_FB.gif"/> 
</div> 
<div class="campaign_content"> 
Stay up-to date with the latest features and changes in Bubbo at our facebook page
</div> 
<p class="gothere"><a href="http://facebook.com/<?php echo $_CONFIG['social']['facebook']; ?>">Go there &raquo;</a></p> 
<div style="clear:both;"></div> 
<hr/> 
<div class="campaign_images"> 
<img src="http://images.bubbo.co.uk/c_images/hot_campaign_images_hq/hc.gif"/> 
</div> 
<div class="campaign_content"> 
Don't forget to buy Bubbo Club in-game with your credits to ensure that you get the best clothes and furniture!
</div> 
<p class="gothere"><a href="client">Go there &raquo;</a></p> 
<div style="clear:both;"></div> 
<hr/> 
<div class="campaign_images"> 
<img src="http://images.bubbo.co.uk/c_images/hot_campaign_images_hq/hotcampaign_thumb_BLACKHOLE.gif"/> 
</div> 
<div class="campaign_content"> 
Bubbo now has Black Holes! Buy some from the catalog and create your own room layouts!
</div> 
<p class="gothere"><a href="{url}/api.php">Go there &raquo;</a></p> 
<div style="clear:both;"></div> 
<hr/> 
<div style="clear:both;"></div></div> 
</div> 
</div> 
<div id="main_right"> 
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
 <div id="clear"></div>
<div class="left"> 
<ul> 
<strong>Sitemap</strong> 
<li><a href="me">Me</a></li> 
<li><a href="account">My Account</a></li> 
<li><a href="news">Articles</a></li> 
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