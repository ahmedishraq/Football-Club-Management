<?php
$name = "localhost";
$uname = "root";
$password = "";

$db_name = "football_club_management";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if(!$conn){
	echo "Connection Failed!";
}
}