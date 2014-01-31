<?php

include ("user.php");

if(isset($_GET['user'])){
	if(isset($_GET['username']) && ($_GET['password'])){
		$userClass = new User();
		$user_info = $userClass->get_user_info($_GET['user_id']);
		echo json_encode($user_info);
	}
}

?>