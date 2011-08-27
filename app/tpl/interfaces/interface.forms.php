<?php 

namespace Revolution;

interface iForms
{

	public function setData();

	public function unsetData();
	
	public function writeData($key);
	
	public function outputError();
	
	public function getPageHome();
	
	public function getPageNews();
	
}
?>