<?php
session_start();

include "connect.php";
include "validate.php";


if (isset($_POST['login-username']) && isset($_POST['login-password'])) {
	$loginUsername = validate($_POST['login-username']);
	$loginPassword = validate($_POST['login-password']);

	if (empty($loginUsername)){
		header("Location: login.php?Emessage=Email is required");
		exit();
	}else if(empty($loginPassword)) {
		header("Location: login.php?Emessage=Password is required");
		exit();
	}else{
		$info = "SELECT * FROM users_info WHERE UserName = '$loginUsername' ";
		$SQLpass = mysqli_query($connect, $info);
		// echo $loginEmail;

		if (mysqli_num_rows($SQLpass) === 1) {
		$row = mysqli_fetch_assoc($SQLpass);

			if($row['Password'] === $loginPassword){
				echo "Logged in!";
				$_SESSION['Email'] = $row['Email'];
				$_SESSION['UserName'] = $row['UserName'];
				//echo $loginEmail;
				header("Location: project.php?message=Welcome");
				exit();
				//echo "Hello";
			}else{
				header("Location: login.php?Emessage=Incorrect Email or Password");
			exit();	
			}

		}else{
			header("Location: signup.php?Emessage=You need to sign up first");
			exit();	
	}
}
}else{
	//echo "$loginEmail";
	//header("Location: login.php");
	//exit();
}
?>