<div id="dropDown" ></div> 
	<div class="top_navigation" id="me"> 	
		<div class="top_navigation_holder" id="me"> 
		
			<div class="top_navigation_right" id="me"> 
			
         		<div class="whosOnline" id="me"> 
         		
         			<strong>Hotel Status</strong>:<br /> 1 users online
         			
         			<br /><br /> 
         			
         			<a href="client" class="enterHotel">Enter hotel!</a>
         		
         		</div> 
         		
      		</div>
      
      		<div class="top_navigation_left" id="me"> 
      		
      			<div class="logo" id="me"></div> 
      		
      		</div> 
      		
      		<div class="clear"></div> 
      	</div> 
      	
    </div> 
    
    <div id="spacer_navigation"></div> 
    
    <div class="holder" id="me"> 
    	
    	<div class="contentHolder" id="me"> 
    	
    		<div class="right"> 
    		
    			<a href="me">{username}</a> |
    			
    			<a href="help">Help Center</a> |
    			
    			<a href="logout">Logout</a> 
    		
    		</div> 
    		
    		<a href="me">Homepage</a> | 
    		<a href="profile/{username}">My Homepage</a> | 
    		<a href="friends">My Friends</a> | 
    		<a href="credits">Credits</a> | 
    		<a href="pixels">Pixels</a> |
    		
    		
    		<div class="clear"></div> 
    		    	
    	</div> 
	    
    
     
<script type="text/javascript"> 
 
	$( document ).ready( function( )
	{
 
		var newsData = [							
 
						
			        			{ 
	
				        			newsId: '3',
				        			newsTitle: 'Haiiiz',
				        			newsDescription: 'testing one two thre',
				        			newsImage: 'http://images.habbo.com/c_images/Top_Story_Images/topStories_patsDay.gif'
				        			
					        	},
			        			{ 
	
				        			newsId: '2',
				        			newsTitle: 'Testing one two',
				        			newsDescription: '<b>Oh</b> my lawd.',
				        			newsImage: 'http://images.habbo.com/c_images/Top_Story_Images/ts_habbo_youtube.png'
				        			
					        	},
			        			{ 
	
				        			newsId: '1',
				        			newsTitle: 'News Item1',
				        			newsDescription: 'to the face.',
				        			newsImage: 'http://images.habbo.com/c_images/Top_Story_Images/waasa_top_story_news_001.gif'
				        			
					        	},				        
		        		];
			
	    Me.sendNewsData( newsData );
 
	    Me.init();
 
	} );
 
</script> 
 
<div class="contentRight" id="me"> 
 
	<div class="contentHolder" id="me"> 
	
		<div class="newsItem"> 
			
		
		</div> 
		
		<div class="divider"></div> 
		
		<strong>Testing one two</strong> &raquo; 13/03/2010 <br /> 
		
		Posted by <strong>Pure</strong> 
		
		<div class="divider"></div> 
		
		<strong>News Item1</strong> &raquo; 13/03/2010 <br /> 
		
		Posted by <strong>Pure</strong> 
		
		
	
	</div> 
	
	<div class="contentHolder" id="me"> 
		
		<div class="contentHeader" id="me"> 
		
			Hot Groups
		
		</div> 
		
		<div class="minimailBoxes"> 
		
			<img class="left" src="http://www.habbo.com/habbo-imaging/badge/s54077s04074s18073s18071cf79b915235f99b8c7556563a86fb045.gif" /> 
		
			<div class="left"> 
			
				<strong>Adopt a Blob.</strong> 
				
				<br /> 
				
				5000 members at the moment.
			
			</div> 
		
			<div class="clear"></div> 
		
		</div> 
	
	</div> 
 
</div> 
 
<div class="contentLeft" id="me"> 
 
	<div class="contentHolder" id="me"> 
	
		<div class="contentHeader" id="me"> 
			
			<div class="right" style="text-align: right;"> 
				
								
			</div> 
			
			{username}
		</div> 
			
		<div class="clear"></div> 
			
		<div class="hotelView" id="me"> 
				
			<div class="enterHotel_me"> 
			
			</div> 
			
			<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure={figure}&action=wav&direction=2&head_direction=3&gesture=srp&size=l" /> 
			
		</div> 
		
		<div class="grayBox"> 
		
			<ul> 
			
				<li> 
				
					<div class="credits"></div> {coins} credits
				
				</li> 
				
				<li> 
				
					<span class="pixels">&nbsp;</span> {activitypoints} pixels
				
				</li> 
				
				<li> 
				
					<span class="hc">&nbsp;</span> 0 HC days
				
				</li> 
			
			</ul> 
		
		</div>	
		
		<div class="infoFeed"> 
		
			<div class="infoMessage"> 
			
				<div class="messageIcon"></div> 
				
				<div class="messageContent"> 
					
					You have no friends online					
				
				</div> 
			
			</div> 
			
			<div class="divider clear"></div> 
			
			<div class="infoMessage"> 
			
				<div class="hotelIcon"></div> 
				
				<div class="messageContent"> 
				
					Last Login: 				
				</div> 
			
			</div> 
		
		</div>	
		
		
	</div> 
	
	<div class="contentHolder" id="me"> 
			
		<div class="contentHeader" id="me"> 
				
			Minimail
			
		</div> 
		
		<div class="right"> 
		
			<div class="minimailButton"> 
				
				<a href="#!/minimail/recieved" class="minimailContent" data-type="rec"> 
				
					Received
				
				</a> 
			
			</div> 
			
			<div class="minimailButton"> 
			
				<a href="#!/minimail/sent" class="minimailContent" data-type="sent"> 
					
					Sent
				
				</a> 
				
			</div> 
			
			<div class="minimailButton"> 
			
				<a href="#!/minimail/compose" class="minimailContent" data-type="compose"> 
				
					Compose
				
				</a> 
				
			</div> 
			
		</div> 
		
		<div class="clear"></div> 
				
		<div id="miniMailAjax">	
		
			You've got Minimail, {username}.
			
		</div> 
		
	</div> 
	
</div> 
 
<div class="clear"></div>	<div class="contentHolder" id="me" style="text-align: center;"> 
		
		Homepage | Development | Google Code | Safety <br /><br /> 
		
		Designed by <strong>RastaLulz</strong> &amp; Coded by <strong>Kryptos</strong> 
		
	</div> 