<?php

include ("connect.php");

class User_db{

	private $c_con;
	private $user_id;
	//private $error;

	function __construct(){
		global $con;
		$this->c_con = $con;

	}

	function get_all_users(){
		$query = "SELECT * FROM user";
		$result = mysqli_query($this->c_con, $query);

		$arr = array();

		while ($row = mysqli_fetch_array($result)){
			$arr[$row["id"]] = $row;
		}

		return $arr;

	}

	function get_user_by_id(){
		$query = "SELECT * FROM user WHERE id = ".$this->user_id;
		$result = mysqli_query($this->c_con, $query);

		$arr = array();

		echo $query;

		while ($row = mysqli_fetch_array($result)){
			$arr[$row["id"]] = $row;
		}

		return $arr;

	}

	function set_user_id($id){
		if(is_numeric($id)){
			$this->user_id = $id;
		} else {
			$this->error = "User ID is not valid";
		}

	}

	function show_error(){
		echo $this->error;
	}

}

/* testing
$users = new User_db();
$allusers = $users->get_all_users();

echo "<pre>";
var_dump($allusers);
echo "</pre>"
*/

$user = new User_db();
$user->set_user_id(1);
$theUser = $user->get_user_by_id();
$user->show_error();

echo "<pre>";
var_dump($theUser);
echo "</pre>"

?>