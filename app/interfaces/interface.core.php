<?php

namespace Revolution;

interface iCore
{
	public function getOnline();
	
	public function getStatus();
	
	public function systemError($who, $txt);
	
	public function handleCall($k);
	
	public function hashed($password);

}
?>