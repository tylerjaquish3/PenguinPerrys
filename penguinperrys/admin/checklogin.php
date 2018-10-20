<?php

	//MySQL Database Connect 
	include '../datalogin.php';
	require 'password.php';
	$tbl_name = "admin";

	// username and password sent from form 
	$usernameTry=$_POST['myusername']; 
	$passwordTry=$_POST['mypassword'];
	
	// To protect MySQL injection
	$usernameTry = htmlspecialchars($usernameTry);
	$passwordTry = htmlspecialchars($passwordTry);
	$usernameTry = mysqli_real_escape_string($conn, $usernameTry);
	$passwordTry = mysqli_real_escape_string($conn, $passwordTry);
	
	$sql="SELECT * FROM $tbl_name WHERE user_name='$usernameTry'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result)) {
		$myuserid = $row['id'];
		$myusername = $row['user_name'];
		$mypassword = $row['password'];
	}

	// Mysql_num_row is counting table row
	$count = mysqli_num_rows($result);

	//this is how you create a new password: uncomment the vardump below, enter the PW you want as first parameter, then try to login. 
	//it will display the hash for the password you entered.
	//var_dump(password_hash('bubbles3993', PASSWORD_BCRYPT));
	
	// If result matched $usernameTry, there was 1 result
	if($count == 1){
	
		if(password_verify($passwordTry, $mypassword)){
			//echo 'success!';
			// Register $myusername, $mypassword and redirect to file "admin_home.php"
			session_start();
			
			$_SESSION["username"] = $myusername;
			$_SESSION["user_id"] = $myuserid;
			
			//session_register("myusername");
			//session_register("mypassword"); 
			//session_register("myuserid");
			header("location:admin-home.php");
		}
		else{
			echo 'Wrong password. Please try again.';
		}
	
	}
	else 
	{
		echo "Your user name does not exist. Please try again.";
	}
?>