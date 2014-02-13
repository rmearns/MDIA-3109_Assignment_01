<?php

include("connect.php");

class User_db {

	private $user_id;

	function set_users_id($id){
		$this->user_id = $id;
	}

	function get_users_id($id){
		return $this->user_id;
	}

	function get_users(){

		global $con;

		$query = "SELECT * FROM users";
		$result = mysqli_query($con, $query);

		$users = array();
		$users_data = array();

		while ($row = mysqli_fetch_array($result)){
			$users_data['username'] = $row['username'];
			$users_data['description'] = $row['description'];
			$users_data['avatar'] = $row['avatar'];
			$users[$row['id']] = $users_data;
		}

		var_dump($users);
		return $users;
	}


	function get_users_by_id(){

		global $con;

		//"$this->" is to call the variable outside the function

		$query = "SELECT * FROM users WHERE id = ".$this->user_id;
		$result = mysqli_query($con, $query);

		$users_data = array();

		while ($row = mysqli_fetch_array($result)){
			$users_data['username'] = $row['username'];
			$users_data['description'] = $row['description'];
			$users_data['avatar'] = $row['avatar'];
		}

		var_dump($users_data);
		return $users_data;
	}
}

$mydb = new User_db();
$mydb->get_users();
$mydb->set_users_id(1);
$mydb->get_users_by_id();


?>