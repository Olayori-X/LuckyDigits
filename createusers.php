<?php
include "connect.php";
include "validate.php";

if($_POST['signup-username'] && $_POST['signup-email'] && $_POST['signup-password'] && $_POST['signup-confirm-password']){
	$txtEmail = validate($_POST['signup-email']);
	$txtPassword = validate($_POST['signup-password']);
	$txtConfirmPassword = validate($_POST['signup-confirm-password']);
	$txtUsername = validate($_POST['signup-username']);

	if(empty($txtEmail)){
		header("Location: signup.php?error=Input Email");
	}
	elseif(empty($txtUsername)){
		header("Location: signup.php?error=Input Username");
	}
	elseif(empty($txtPassword)){
		header("Location: signup.php?error=Input Password");
	}
	elseif(empty($txtConfirmPassword)){
		header("Location: signup.php?error=Confirm your Password");
	}
	elseif(!($txtPassword == $txtConfirmPassword)){
		header("Location: signup.php?error=The passwords do not match");
	}else{

		$EmailVerification = "SELECT Email, UserName FROM users_info WHERE Email = '$txtEmail' OR UserName = '$txtUsername'";
		$EmailQuery = mysqli_query($connect, $EmailVerification);

		if($EmailQuery -> num_rows > 0){
			while($row = $EmailQuery->fetch_assoc()) {
				echo $row['Email'];
				if($row['Email'] === $txtEmail){

					header("Location: signup.php?error=This Email exists");

				}else if($row['UserName'] === $txtUsername){

					header("Location: signup.php?error=This UserName exists");

				}else {
					$sql = "INSERT INTO users_info (UserName, Email, Password) VALUES ('$txtUsername', '$txtEmail', '$txtPassword')";

					// insert in database 
					$rs = mysqli_query($connect, $sql);

					if($rs){
						//echo "Contact Records Inserted";
						header("Location: ./login.php");//Should actually verify email first. Changes will be made
						exit();
					}
				}
			}
		}else{
			$sql = "INSERT INTO users_info (UserName, Email, Password) VALUES ('$txtUsername', '$txtEmail', '$txtPassword')";

			// insert in database 
			$rs = mysqli_query($connect, $sql);

			if($rs){
				//echo "Contact Records Inserted";
				header("Location: ./login.php");// Should actually verify email first. Changes will be made
				exit();
			}
		}
	}
}
?>

