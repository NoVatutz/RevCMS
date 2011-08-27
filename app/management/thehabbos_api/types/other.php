<?php
//////////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.0 (BETA 2) //
// # (C) Copyright TheHabbos 2010. All rights reserved.     //
//////////////////////////////////////////////////////////////

if(!defined('IN_THEHABBOS_API')) {
  die('Sorry, but you can not access this file directly. :(');
}

switch($lookingFor) {
  case 1:
  {
    //what happens if someone does successfully vote
    echo $LANG['content'][1];
    break;
  }
  case 2:
  {
    //what happens if someone has already voted
    echo $LANG['content'][2];
    break;
  }
  case 3:
  {
    //what happens if someone hasn't voted yet
    echo $LANG['content'][3];
    break;
  }
  case 4:
  case 5:
  {
    //what happens if someone sends an invalid request
    echo $LANG['content'][4];
    break;
  }
  case 6:
  {
    //what happens if someone sends an invalid request
    echo $LANG['content'][6];
    break;
  }
}