<?php

$con=mysqli_connect("localhost", "root", "", "project");

if(mysqli_connect_errno()){
	//failed to connect
	echo "failed to connect".mysqli_connect_errno();
}

?>