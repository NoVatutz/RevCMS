<?php

if($_SESSION['user_id'])
{
	session_destroy();
}

	header('Location: '.$_CONFIG['hotel']['url'].'/');
	exit;

?>