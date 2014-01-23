<?php

include("../db/user_db.php");
include("../db/avatar_db.php");

class Users{

	private $users_db;
	private $avatar_db;

	function __contruct(){
		$this->users_db = new Users_db();
		$this->avatar_db = new Avatar_db();
	}

	function get_all_users(){
		$users = $this->users_db->get_users();
		$avatars = $this->avatar_db->get_avatars();
		foreach($users as $id => $data){
			$users[$id]['avatar_img'] = $avatars[$users[$id]["avatar"]];
		}

		return $users;
	}

	function get_user_by_id($id){
		$this->users_db->set_user_id($id);
		return $this->users_db->get_users_by_id();
	}
}

$users = new Users();
$var = $users->get_all_users();
$var2 = $users->get_user_by_id(1);

var_dump($var);

?>