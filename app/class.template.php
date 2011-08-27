<?php

namespace Revolution;

class template implements iTemplate
{

	public $tpl;
	
	private $params = array();

	final public function Initiate()
	{
		global $_CONFIG, $users, $engine, $core, $template;
		$this->setParams('hotelName', $_CONFIG['hotel']['name']);
		$this->setParams('hotelDesc', $_CONFIG['hotel']['desc']);
		$this->setParams('url', $_CONFIG['hotel']['url']);
		$this->setParams('online', $core->serverStat('users_online'));
		$this->setParams('web_build', $_CONFIG['hotel']['web_build']);
		$this->setParams('external_vars', $_CONFIG['hotel']['external_vars']);
		$this->setParams('external_texts', $_CONFIG['hotel']['external_texts']);
		$this->setParams('swf_folder', $_CONFIG['hotel']['swf_folder']);
		
		$this->setParams('mysql_host', $_CONFIG['mysql']['hostname']);
		$this->setParams('mysql_port', $_CONFIG['mysql']['port']);
		
		if($users->isLogged())
		{	
			$this->setParams('username', $users->getInfo($_SESSION['user_id'], 'username'));
			$this->setParams('rank', $users->getInfo($_SESSION['user_id'], 'rank'));
			$this->setParams('motto', $users->getInfo($_SESSION['user_id'], 'motto'));
			$this->setParams('email', $users->getInfo($_SESSION['user_id'], 'mail'));
			$this->setParams('sso', $users->getInfo($_SESSION['user_id'], 'auth_ticket'));
			$this->setParams('coins', $users->getInfo($_SESSION['user_id'] ,'credits'));
			$this->setParams('activitypoints', $users->getInfo($_SESSION['user_id'], 'activity_points'));
			$this->setParams('figure', $users->getInfo($_SESSION['user_id'], 'look'));
			
			if($this->params['rank'] > 3)
			{
				$this->setParams('housekeeping', '<li><a href="ase/">Housekeeping</a></li>'); 
			}
			else
			{
				$this->setParams('housekeeping', ''); 
			}
			
			if($_GET['url'] == 'me' || $_GET['url'] == 'account' || $_GET['url'] == 'home' || $_GET['url'] == 'settings')
			{
				$template->form->getPageHome();				
			}
			
			if($_GET['url'] == 'news' || $_GET['url'] == 'articles')
			{
				$template->form->getPageNews();
			}		
		}
		
	}
	
	final public function setParams($key, $value)
	{	
		$this->params[$key] .= $value; 
	}
	
	final public function filterParams($str)
    {
        foreach($this->params as $key => $value)
        {
            $str = str_ireplace('{' . $key . '}', $value, $str);
        }

        return $str;
    }
	
	final public function write($str)
	{
		$this->tpl .= $str;
	}
	
	final public function outputTPL()
	{
		echo $this->filterParams($this->tpl);
		unset($this->tpl);
	}
}
?>