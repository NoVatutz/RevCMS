<?php 

namespace Revolution;

class css implements iCSS
{
	
	private $css;
	

	final public function get()
	{
		global $_CONFIG;
		foreach (glob("app/tpl/skins/".$_CONFIG['template']['style']."/styles/*.css") as $filename)
		{
 			$this->css = '<link rel="stylesheet" type="text/css" href="'.$filename.'"/>';
   
    		$this->setCSS();
		}
	}
	
	final public function getHK()
	{
		global $_CONFIG;
		foreach (glob("../app/tpl/skins/".$_CONFIG['template']['style']."/hk/styles/*.css") as $filename)
		{
 			$this->css = '<link rel="stylesheet" type="text/css" href="'.$filename.'"/>';
   
    		$this->setCSS();
		}
	}
	
	final public function setCSS()
	{
		global $template;
		$template->tpl .= $this->css;
		unset($this->css);
	}


}
?>