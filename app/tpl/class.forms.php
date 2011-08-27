<?php

namespace Revolution;

class forms implements iForms
{

	public $error;

	final public function setData()
	{
		global $engine;
		foreach($_POST as $key => $value)
		{
			if($value != null)
			{
				$this->$key = $engine->secure($value);
			}
			else
			{
				$this->error = 'Please fill in all fields';
				return;
			}
		}
	
	}
	
	final public function unsetData()
	{
		global $template;
		foreach($this as $key => $value)
		{
			unset($this->$key);	
		}	
	}
	
	final public function writeData($key)
	{
		global $template;
		echo $this->$key;
	}
	
	final public function outputError()
	{
		global $template;
		if(isset($this->error))
		{
			echo "<div id='message'> " . $this->error . " </div>";
		}
	}
	
	/* Manage diefferent pages */
	
	final public function getPageNews()
	{
		global $template, $engine;
			if(!$_GET['id'])
			{
				$_GET['id'] = 1;
			}
			
			$data = mysql_query("SELECT title, id FROM cms_news WHERE id != '" . $engine->secure($_GET['id']) . "' LIMIT 10"); 
			
			while($news1 = mysql_fetch_array($data))
			{
				if($news1['id'] != null)
				{
					$template->setParams('newsList', '<a href="index.php?url=news&id='.$news1["id"].'">' . $news1['title'] . '</a><br/>');
				}
			}
				
			$news = $engine->fetch_array("SELECT title, longstory, published, author FROM cms_news WHERE id = '" . $engine->secure($_GET['id']) . "' LIMIT 1");
			$template->setParams('newsTitle', $news['title']);
			$template->setParams('newsContent', $news['longstory']);
			$template->setParams('newsAuthor', $news['author']);
			$template->setParams('newsDate', $news['published']);
			
			unset($data);
			unset($news1);
			unset($news);
	}
	
	final public function getPageHome()
	{
		global $template, $engine;
		$a = 1;
		$data = mysql_query("SELECT title, id, published, shortstory, image FROM cms_news ORDER BY id DESC LIMIT 5");
                
        while($news = mysql_fetch_array($data))
       	{
        	if($news['title'] == null)
            {
            	$template->setParams('newsTitle-' . $a, 'Not found');
                $template->setParams('newsID-' . $a, 'Not found');
                $template->setParams('newsDate-' . $a, 'Not found');
                $template->setParams('newsCaption-' . $a, 'Not found');
                $template->setParams('newsIMG-' . $a, 'Not found');
            }
            else
            {      
                $template->setParams('newsTitle-' . $a, $news['title']);
                $template->setParams('newsID-' . $a, $news['id']);
                $template->setParams('newsDate-' . $a, $news['published']);
                $template->setParams('newsCaption-' . $a, $news['shortstory']);
                $template->setParams('newsIMG-' . $a, $news['image']);
                $a++;
                    
            }
        }
        
        unset($news);
        unset($data);
	}
	
}
?>