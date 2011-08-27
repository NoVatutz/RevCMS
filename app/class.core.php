<?php 

namespace Revolution;

class core implements iCore
{

	final public function serverStat($entry)
	{
		global $engine;
		return $engine->result("SELECT '" . $entry . "' FROM server_status");
	}
	
	final public function systemError($who, $txt)
	{
		die('<b>' . $who . ' - RevCMS: </b><br /> <center>' . $txt . '</center>');
	}
	
	final public function handleCall($k)
	{
		global $users, $_CONFIG;
		
		if($_CONFIG['hotel']['in_maint'] == false)
		{
			if(!$_SESSION['user_id'])
			{
				switch($k)
				{
					case "index":
					case null:
						$users->login();
					break;
					
					case "register":
					$users->register();
					break;
					
					case "forgot":
						$users->forgotten();
					break;
				
					default:
						header('Location: '.$_CONFIG['hotel']['url'].'/index');
						exit;
					break;
				}
			}
			else
			{
				switch($k)
				{
					case "index":
					case null:
						header('Location: '.$_CONFIG['hotel']['url'].'/me');
					exit;
					break;
					
					case "register":
					header('Location: '.$_CONFIG['hotel']['url'].'/me');
					exit;
					break;
					
					case "forgot":
						header('Location: '.$_CONFIG['hotel']['url'].'/me');
						exit;
					break;
					
					case "help":
						$users->help();
					break;
				
					case "account":
						$users->updateAccount();
					break;
					
					default:
						//nothing
					break;
				}
			}
		}
		else
		{
			header('Location: '.$_CONFIG['hotel']['url'].'/maintenance');
			exit;
		}
	}
	
	final public function handleCallHK($k)
	{
		global $users, $engine, $_CONFIG;
		
		if($_SESSION["in_hk"] != true)
		{
			if($_SESSION['user_id'])
			{
				if($k == 'login')
				{
					$users->loginHK();
				}
				else
				{
					header("Location:".$_CONFIG['hotel']['url']."/ase/login");
					exit;
				}
			}
			else
			{
				header("Location:".$_CONFIG['hotel']['url']."/index");
				exit;
			}
		}
		else
		{
			if(!isset($k))
			{
				header("Location:".$_CONFIG['hotel']['url']."/dash");
				exit;
			}
			else
			{
				if($k == 'balist')
				{
						
					if(isset($_GET["unbar"]))
					{
						$user = $engine->secure($_GET["unban"]);
						$engine->query("DELETE FROM bans WHERE id = '" . $user . "'");
						header("Location: ".$_CONFIG['hotel']['url']."/ase/banlist");
						exit;
					}	
				}
			}
		}
	}
	
	final public function hashed($password)
	{
		return md5($password);
	}
}
?>