<?php
//////////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.0 (BETA 2) //
// # (C) Copyright TheHabbos 2010. All rights reserved.     //
//////////////////////////////////////////////////////////////

class Validate {
  function validateVote() {
    global $_CONFIG;
    $handle = @fopen('http://api.thehabbos.org/validate.php?user='.$_CONFIG['thehabbos']['username'].'&ip='.$_SERVER['REMOTE_ADDR'], 'r');
    if(!$handle) {
      return 6;
    }else{
      $validateCode = stream_get_contents($handle); fclose($handle);
      return $validateCode;
    }
  }
}