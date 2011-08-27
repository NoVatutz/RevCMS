<?php

namespace Revolution;

interface iCore
{
	public function serverStat($entry);
	
	public function systemError($who, $txt);
	
	public function handleCall($k);
	
	public function hashed($password);

}
?>