<?php

include ("connect.php");

class Picture_db{

	private $c_con;
	private $pic_id;
	private $user_id;

	function __construct(){
		global $con;
		$this->c_con = $con;

	}

	function get_all_pictures(){
		$query = "SELECT * FROM picture";
		$result = mysqli_query($this->c_con, $query);

		$arr = array();

		while ($row = mysqli_fetch_array($result)){
			$arr[$row["id"]] = $row;
		}

		return $arr;

	}

	function get_pictures_by_id(){
		$query = "SELECT * FROM picture WHERE id = ".$this->pic_id;
		$result = mysqli_query($this->c_con, $query);

		$arr = array();

		echo $query;

		while ($row = mysqli_fetch_array($result)){
			$arr[$row["id"]] = $row;
		}

		return $arr;

	}

	function get_pictures_by_user_id(){
		$query = "SELECT picture.id, picture.link, picture.title, picture.desc FROM picture
				LEFT JOIN user_picture ON user_picture.picture_id = picture.id
				LEFT JOIN user ON user.id = user_picture.user_id
				WHERE user.id = ".this->user_id;

		$result = mysqli_query($this->c_con, $query);

		$arr = array();

		echo $query;

		while ($row = mysqli_fetch_array($result)){
			$arr[$row["id"]] = $row;
		}

		return $arr;

	}

	function set_pictures_id($id){
		if(is_numeric($id)){
			$this->pic_id = $id;
		} else {
			$this->error = "Picture ID is not valid";
		}

	}


	function set_user_id($id){
		if(is_numeric($id)){
			$this->user_id = $id;
		} else {
			$this->error = "User ID is not valid";
		}

	}

}

$pics = new Picture_db();
$allpics = $pics->get_all_pictures();
$pics->set_pictures_id(1);
$thePics = $pics->get_pictures_by_user_id();

echo "<pre>";
var_dump($thePics);
echo "</pre>"

?>