<?php

include("connect.php");

class Avatar_db {
	function get_avatars(){

		global $con;

		$query = "SELECT * FROM avatar";
		$result = mysqli_query($con, $query);

		$ava = array();

		while ($row = mysqli_fetch_array($result)){
			$ava[$row['id']] = $row['link'];
		}

		var_dump($ava);
		return $ava;
	}
}

?>