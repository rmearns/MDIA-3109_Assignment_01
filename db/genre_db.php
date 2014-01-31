<?php

include ("connect.php");

class Genre_db{

	private $c_con;

	function __construct(){
		global $con;
		$this->c_con = $con;

	}

	function get_all_genres(){
		$query = "SELECT * FROM genre";
		$result = mysqli_query($this->c_con, $query);

		$arr = array();

		while ($row = mysqli_fetch_array($result)){
			$arr[$row["id"]] = $row;
		}

		return $arr;

	}

}

/* testing
$genres = new Genre_db();
$allgenres = $genres->get_all_genres();

echo "<pre>";
var_dump($allgenres);
echo "</pre>"
*/

?>