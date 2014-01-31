<?php

include ("../db/user_db.php");
include ("../db/picture_db.php");

class User{

	private $userDB;
	private $picDB;

	function __construct(){
		$this->userDB = new User_db();
		$this->picDB = new Picture_db();
	}

	function get_user_info(){
		$this->userDB->set_user_id($id);
		$this->picDB->set_user_id($id);

		$user = $this->userDB->get_user_by_id();
		$pics = $this->picBD->get_pictures_by_user_id();

		$user["pics"] = $pics;

		return $user;
	}

	function get_userid($username, $password){
		
	}

}

/*
$user = new User;
$userinfo = $user->get_user_info();

echo "<pre>";
var_dump($userinfo["pics"]);
echo "</pre>";
*/

?>