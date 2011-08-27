<?php 

namespace Revolution;

class html implements iHTML
{

	private $html;

	final public function get($file)
	{
		global $template, $_CONFIG;
		
		if(file_exists('app/tpl/skins/'.$_CONFIG['template']['style'].'/' . $file . '.php'))
		{
			ob_start();
    		include('app/tpl/skins/'.$_CONFIG['template']['style'].'/' . $file . '.php');
    		$this->html .= ob_get_contents();
    		ob_end_clean();
   			
   		 	$this->setHTML();
		}
		else
		{
			$this->get('index');
		}

	}
	
	final public function getHK($file)
	{
		global $template, $_CONFIG;

		if(file_exists('../app/tpl/skins/'.$_CONFIG['template']['style'].'/hk/' . $file . '.php'))
		{
			ob_start();
			require_once('../app/tpl/skins/'.$_CONFIG['template']['style'].'/hk/' . $file . '.php');
			$this->html .= ob_get_contents();
			ob_end_clean();
			
			$this->setHTML();
		}
		else
		{
			$this->getHK('dash');
		}
	}
		
	final public function setHTML()
	{
		global $template;
		$template->tpl .= $this->html;
		unset($this->html);
	}


}
?>