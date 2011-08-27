<?php 

namespace Revolution;

class js implements iJS 
{

	private $js;
	
	final public function get()
	{
		global $_CONFIG;
		foreach (glob("app/tpl/skins/".$_CONFIG['template']['style']."/js/*.js") as $filename)
		{
 			$this->js = '<script src="'.$filename.'" type="text/javascript"></script>';
   
    		$this->setJS();
		}	
	}	
	
	final public function getHK()
	{
		global $_CONFIG;
		foreach (glob("app/tpl/skins/".$_CONFIG['template']['style']."/hk/js/*.js") as $filename)
		{
 			$this->js = '<script src="'.$filename.'" type="text/javascript"></script>';
   
    		$this->setJS();
		}	
	}
	
	final public function setJS()
	{	
		global $template;
		$template->tpl .= $this->js;
		unset($this->js);
	}


}
?>