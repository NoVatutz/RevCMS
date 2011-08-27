<?php
namespace Revolution;

interface iEngine
{

	public function Initiate();
	
	public function setMySQL($key, $value); 

	public function connect($type);

	public function disconnect();
	
	public function secure($var);
	
	public function query($sql);
	
	public function num_rows($sql);
	
	public function fetch_assoc($sql);
	
	public function result($sql);
	
	public function free_result($sql);
	
}
?>