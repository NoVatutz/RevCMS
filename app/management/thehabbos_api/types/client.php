<?php
//////////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.0 (BETA 2) //
// # (C) Copyright TheHabbos 2010. All rights reserved.     //
//////////////////////////////////////////////////////////////

switch($lookingFor) {
  case 1:
  {
    //what happens if someone does successfully vote
    header("Location: client.php");
    break;
  }
  case 2:
  {
    //what happens if someone has already voted
    header("Location: client.php");
    break;
  }
  case 3:
  {
    //what happens if someone hasn't voted yet
    echo '<div class="contentTitle">Please Vote</div>
          It appears that you have not voted yet today! Please click the button below.<br />
          <br />
          <form action="http://thehabbos.org/topsites/vote/'.$_CONFIG['thehabbos']['username'].'" method="post">
            <input type="hidden" name="api_url" value="'.$_CONFIG['thehabbos']['url'].'" />
            <input style="width: 120px; height: 40px; background-image: url(http://thehabbos.org/topsites/button.php); border: 0px; cursor: pointer;" type="submit" name="votingAPI" value="" />
          </form>';
    break;
  }
  case 4:
  case 5:
  {
    //what happens if someone sends an invalid request
    echo $LANG['content'][4].'<br /><br />Click <a href="client.php" style="color: #000000;">here</a> to proceed to the client.';
    break;
  }
  case 6:
  {
    //what happens if thehabbos is down or having connection issues
    header("Location: client.php");
    break;
  }
}