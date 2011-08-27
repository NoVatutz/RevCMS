<?php

namespace Revolution;

interface iTemplate
{

	public function Initiate();

	public function setParams($key, $value);

	public function filterParams($str);
	
	public function write($str);
	
	public function outputTPL();
	
}	
?>