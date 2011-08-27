<?php
//////////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.0 (BETA 2) //
// # (C) Copyright TheHabbos 2010. All rights reserved.     //
//////////////////////////////////////////////////////////////

class API_Template {
  function buildTemplate() {
    echo $this->replaceContent($this->getTemplateItem('template'));
  }

  function getTemplateItem($Item) {
    global $_CONFIG;
    $getTemplateItem = fopen('app/management/thehabbos_api/styles/'.$_CONFIG['thehabbos']['style'].'/'.$Item.'.html', 'r');
    $templateItem = fread($getTemplateItem, filesize('app/management/thehabbos_api/styles/'.$_CONFIG['thehabbos']['style'].'/'.$Item.'.html'));
    fclose($getTemplateItem);
    return $templateItem;
  }
  
  function replaceContent($Template) {
    global $_CONFIG;
    $lookingFor = Array('{$Title}', '{$CSS}', '{$Header}', '{$Content}');
    $contentReplacements = Array($this->buildContent('title').' - TheHabbos.ORG Voting Script', $this->getTemplateItem('css'), $this->buildContent('title'), $this->buildContent('content'));
    $string = str_replace($lookingFor, $contentReplacements, $Template);
    return $string;
  }
  
  function buildContent($ContentType) {
    global $_CONFIG; global $LANG;
    $validationID = $_CONFIG['thehabbos']['status'];
    if($ContentType == 'title') {
      return $LANG['title'][$validationID];
    }
    if($ContentType == 'content') {
      return $this->getPageType();
    }
  }

  function getPageType() {
    global $_CONFIG; global $LANG;
    ob_start();
    $lookingFor = $_CONFIG['thehabbos']['status'];
    include('app/management/thehabbos_api/types/'.$_CONFIG['thehabbos']['type'].'.php');
    $string = ob_get_contents();
    ob_end_clean();
    return $string;
  }
}