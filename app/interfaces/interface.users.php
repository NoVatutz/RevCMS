<?php

namespace Revolution;

interface iUsers
{

	public function nameTaken($username);

	public function userValidation($username, $password);

	public function addUser($username, $password, $email, $motto, $credits, $pixels, $rank, $figure, $gender, $seckey); 
	
	public function isLogged();
	
	public function deleteUser($k);
	
	public function updateUser($k, $key, $value);
	
	//public function cacheUser($id);
	
	public function getInfo($k, $key);
	
	public function getID($username);
	
	public function getUsername($k);
	
	public function validName($username);

	public function validEmail($email);
	
	public function validSecKey($seckey);
	
	public function register();

	public function login();
	
	public function forgotten();
	
	public function help();
	
	public function updateAccount();
	
	public function turnOn($k);
	
	public function setInfo($key, $value);
	
	public function createSSO($k);


}
?>