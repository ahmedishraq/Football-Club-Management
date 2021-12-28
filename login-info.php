<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_id='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_id'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_id'] = $row['user_id'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['email_address'] = $row['email_address'];
            	$_SESSION['phone_number'] = $row['phone_number'];
            	$_SESSION['region'] = $row['region'];
            	$_SESSION['date_of_birth'] = $row['date_of_birth'];
            	// $_SESSION['id'] = $row['id'];
            	header("Location: user-profile.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorrect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}

?>