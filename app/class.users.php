<?php

namespace Revolution;


class users implements iUsers
{

	public $info = array();

	/*-------------------------------Authenticate-------------------------------------*/ 
	
	final public function isLogged()
	{
		if($_SESSION['user_id'])
		{
			return true;
		}
		
		return false;
	}
	
	/*-------------------------------Checking of submitted data-------------------------------------*/ 
	
	final public function validName($username) 	
	{
		if(strlen($username) <= 25 && ctype_alnum($username)) 		
	 	{ 			
	 		return true; 		
	 	} 		 		
	 	
	 	return false; 	
	} 	 	
		 
	final public function validEmail($email) 	
	{ 		
		return preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $email); 	
	} 	 	
	
	final public function validSecKey($seckey)
	{
		if(is_numeric($seckey) && strlen($seckey) == 4)
		{
			return true;
		}
		
		return false;
	}
	
	final public function nameTaken($username) 	
	{ 		
	 	global $engine; 		
	 	
		if($engine->num_rows("SELECT * FROM users WHERE username = '" . $username . "' LIMIT 1") > 0)
		{
			return true;
		} 	
		
		return false;
	} 
	
	final public function emailTaken($email)
	{
		global $engine;
		
		if($engine->num_rows("SELECT * FROM users WHERE mail = '" . $email . "' LIMIT 1") > 0)
		{
			return true;
		}
		
		return false;
	}
		
	final public function userValidation($username, $password)
	{ 		
		global $engine; 
		if($engine->num_rows("SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "' LIMIT 1") > 0)
		{
			return true;
		} 	
		 
		return false;
	} 	 	
	
	final public function isBanned($type)
	{
		global $engine;
		
		if($engine->num_rows("SELECT * FROM bans WHERE type = 'user'") > 0)
		{
			return true;
		}
		
		if($engine->num_rows("SELECT * FROM bans WHERE type = 'ip'") > 0)
		{
			return true;
		}
		
		return false;
	}

	
	/*-------------------------------Login or Register user-------------------------------------*/ 
	
	final public function register()
	{
		global $core, $template, $_CONFIG;
		
		$template->form->setData();
		
		if(isset($template->form->register))
		{
			unset($template->form->error);
				
			if($this->validName($template->form->reg_username))
			{
				if(!$this->nameTaken($template->form->reg_username))
				{
					if($this->validEmail($template->form->reg_email))
					{
						if(!$this->emailTaken($template->form->reg_email))
						{
							if(strlen($template->form->reg_password) > 6)
							{
								if($template->form->reg_password == $template->form->reg_rep_password)
								{
									if($this->validSecKey($template->form->reg_seckey))
									{
										if(!isset($template->form->reg_gender))
										{
											$template->form->reg_gender = 'M';
										}
										
										$this->addUser($template->form->reg_username, $core->hashed($template->form->reg_password), $template->form->reg_email, $_CONFIG['hotel']['motto'], $_CONFIG['hotel']['credits'], $_CONFIG['hotel']['pixels'], 1, '-', $template->form->reg_gender, $core->hashed($template->form->reg_key));
							
										$this->turnOn($template->form->reg_username);
								
										header('Location: ' . $_CONFIG['hotel']['url'] . '/me');
										exit;
									}
									else
									{
										$template->form->error = 'Secret key must have only 4 numbers';
										return;
									}

								}
								else	
								{
									$template->form->error = 'Password does not match repeated password';
									return;
								}

							}
							else
							{
								$template->form->error = 'Password: <b>' . $template->form->reg_password . '</b> must have more than 6 characters';
								return;
							}
						}
						else
						{
							$template->form->error = 'Email: <b>' . $template->form->reg_email . '</b> is already registered';
							return;
						}
					}
					else
					{
						$template->form->error = 'Email is not valid';
						return;
					}
				}
				else
				{
					$template->form->error = 'Username is already registered';
					return;
				}
			}
			else
			{
				$template->form->error = 'Username is invalid';
				return;
			}
		}
	}	
	
	final public function login()
	{
		global $template, $_CONFIG, $core;
		
		$template->form->setData();
		
		if(isset($template->form->login))
		{
			unset($template->form->error);
			
			if($this->nameTaken($template->form->log_username))
			{
				if($this->userValidation($template->form->log_username, $core->hashed($template->form->log_password)))
				{
					$this->turnOn($template->form->log_username);
					$this->updateUser($_SESSION['user_id'], 'ip_last', $_SERVER['REMOTE_ADDR']);
					$template->form->unsetData();
					header('Location: ' . $_CONFIG['hotel']['url'] . '/me');
					exit;
				}
				else
				{
					$template->form->error = 'Details do not match';
					return;
				}
			}
			else
			{
				$template->form->error = 'Username does not exist';
				return;
			}
		}
	}
	
	final public function loginHK()
	{
		global $template, $_CONFIG, $core;
		
		$template->form->setData();
		
		if(isset($template->form->login))
		{	
			if(isset($template->form->username) && isset($template->form->password))
			{
				if($this->nameTaken($template->form->username)) 
				{	 
					if($this->userValidation($template->form->username, $core->hashed($template->form->password)))
					{
						if(($this->getInfo($_SESSION['user_id'], 'rank')) >= 4)
						{
							$_SESSION["in_hk"] = true;
							header("Location:".$_CONFIG['hotel']['url']."/ase/dash");
							exit;
						}
						else
						{
							$template->form->error = 'Incorrect access level.';
							return;
						}
					}
					else
					{
						$template->form->error = 'Incorrect password.';
						return;
					}		
				}
				else
				{
					$template->form->error = 'User does not exist.';
					return;
				}
			}
	
			$template->form->unsetData();
		}
	}	
	
	final public function help()
	{
		global $template, $_CONFIG;
		$template->form->setData();
		
		if(isset($template->form->help))
		{
			$to = $_CONFIG['hotel']['email'];
 			$subject = "Help from RevCMS user - " . $this->getInfo($_SESSION['user_id'], 'username');
 			$body = $template->form->question;
 				
 			if (mail($to, $subject, $body))
 			{
 				$template->form->error = 'Message successfully sent! We will answer you shortly!';
 			} 
 			else 
 			{
  				 $template->form->error = 'Message delivery failed.';
 			}
		}
	}

	/*-------------------------------Account settings-------------------------------------*/ 
	
	final public function updateAccount()
	{
		global $template, $_CONFIG, $core;
		
		if(isset($_POST['account']))
		{
		
			if(isset($_POST['acc_motto']) && $_POST['acc_motto'] != $this->getInfo($_SESSION['user_id'], 'motto'))
			{
				$this->updateUser($_SESSION['user_id'], 'motto', filter($_POST['acc_motto']));
				header('Location: '.$_CONFIG['hotel']['url'].'/me');
				exit;
			}
			
			if(isset($_POST['acc_email']) && $_POST['acc_email'] != $this->getInfo($_SESSION['user_id'], 'mail'))
			{
				if($this->validEmail($_POST['acc_email']))
				{
					$this->updateUser($_SESSION['user_id'], 'mail', filter($_POST['acc_email']));
					header('Location: '.$_CONFIG['hotel']['url'].'/me');
					exit;
				}
				else
				{
					$template->form->error = 'Email is not valid';
					return;
				}
			}
			
			if(isset($_POST['acc_old_password']) && isset($_POST['acc_new_password']))
			{
				if($this->userValidation($this->getInfo($_SESSION['user_id'], 'username'), $core->hashed(filter($_POST['acc_old_password']))))
				{
					if(strlen($_POST['acc_new_password']) >= 8)
					{
						$this->updateUser($_SESSION['user_id'], 'password', $core->hashed($_POST['acc_new_password']));
						header('Location: '.$_CONFIG['hotel']['url'].'/me');
						exit;
					}
					else
					{
						$this->form->error = 'New password is too short';
						return;
					}
				}
				else
				{
					$this->form->error = 'Current password is wrong';
					return;
				}
			}
		}		
	}
		
		
	final public function turnOn($k)
	{	
		$j = $this->getID($k);
		$this->createSSO($j);
		$_SESSION['user_id'] = $j;
		unset($j);
	}
	
	/*-------------------------------Loggin forgotten-------------------------------------*/ 	
	
	final public function forgotten()
	{
		global $template, $_CONFIG, $core;
		
		$template->form->setData();
		
		if(isset($template->form->forgot))
		{
		
			unset($template->form->error);
			
			if($this->nameTaken($template->form->for_username))
			{
				if(strlen($template->form->for_password) > 6)
				{
					if($this->getInfo($this->getID($template->form->for_username), 'seckey') == $core->hashed($template->form->for_key))
					{
						$this->updateUser($this->getID($template->form->for_username), 'password', $core->hashed($template->form->for_password));
						$template->form->error = 'Account recovered! Go <b><a href="index">here</a></b> to login!';
						return;
					}
					else
					{
						$template->form->error = 'Secret key is incorrect';
						return;
					}
				}
				else
				{
					$template->form->error = 'Password must have more than 6 characters.';
					return;
				}
			}
			else
			{
				$template->form->error = 'Username does not exist';
				return;
			}
		}
	}
	
	/*-------------------------------Create SSO auth_ticket-------------------------------------*/ 
	
	final public function createSSO($k) 	
	{ 	 	
		$sessionKey = 'CMS-'.rand(9,999).'/'.substr(sha1(time()).'/'.rand(9,9999999).'/'.rand(9,9999999).'/'.rand(9,9999999),0,33);
		
		$this->updateUser($k, 'auth_ticket', $sessionKey);
		
		unset($sessionKey);
	} 	 
		
	/*-------------------------------Adding/Updating/Deleting users-------------------------------------*/ 
	
	final public function addUser($username, $password, $email, $motto, $credits, $pixels, $rank, $figure, $gender, $seckey) 	
	{ 		
		global $engine; 		 		 		 		
		 	
		$engine->query("INSERT INTO users (username, password, mail, motto, credits, activity_points, rank, look, gender, seckey, ip_last, ip_reg) VALUES('" . $username . "', '" . $password . "', '" . $email . "', '" . $motto . "', '" . $credits . "', '" . $pixels . "', '" . $rank . "', '" . $figure . "', '" . $gender . "', '" . $seckey . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['REMOTE_ADDR'] . "')"); 		
		 			 
	}	 		 	
		 
	final public function deleteUser($k) 	
	{ 		
		global $engine; 		 		
	 	$engine->query("DELETE FROM users WHERE id = '" . $k . "' LIMIT 1"); 		
	 	$engine->query("DELETE FROM items WHERE userid = '" . $k . "' LIMIT 1"); 		
		$engine->query("DELETE FROM rooms WHERE ownerid = '" . $k . "' LIMIT 1"); 	
	} 	
	  	
	final public function updateUser($k, $key, $value) 	
	{ 		
	 	global $engine; 		 		
	 	$engine->query("UPDATE users SET " . $key . " = '" . $value . "' WHERE id = '" . $k . "' LIMIT 1"); 		
	} 
	
	/*-------------------------------Handling user information-------------------------------------*/ 	 
	
/*	final public function cacheUser($k)
	{
		global $engine; 		 	
		$userInfo = $engine->fetch_array("SELECT * FROM users WHERE id = '" . $k . "' LIMIT 1");
		
		foreach($userInfo as $key => $value)
		{
			$this->setInfo($key, $value);
		}
	
	}	*/
	
	final public function setInfo($key, $value)
	{
		$this->info[$key] = $value;
	}

	final public function getInfo($k, $key)
	{
		global $engine;
		if(!isset($this->info[$key]))
		{
			$value = $engine->result("SELECT $key FROM users WHERE id = '" . $k . "' LIMIT 1"); 
			if($value != null)
			{			
				$this->setInfo($key, $value);
			}
		}
			
		return $this->info[$key];
	}
	
	
	
	/*-------------------------------Get user ID or Username-------------------------------------*/ 
	
	final public function getID($k) 	
	{ 		
		global $engine; 		
		return $engine->result("SELECT id FROM users WHERE username = '" . $k . "' LIMIT 1"); 	
	} 		
	
	final public function getUsername($k)
	{
		global $engine;
		return $engine->result("SELECT username FROM users WHERE id = '" . $k . "' LIMIT 1");
	}
	
}
?>