<?php

session_start();

$email = $_SESSION['Email'];
include "connect.php";
include "validate.php";
if (isset($_POST['gssNo'])) {
	$Snumber = validate($_POST['gssNo']);
	$ID = validate($_POST['ID']);

	if (empty($Snumber)){
		header("Location: project.php?emessage=You need to input a number");
		exit();
	}else{
		$EmailVerification = "SELECT Email FROM lnumbers WHERE Email = '$email'";
		$EmailQuery = mysqli_query($connect, $EmailVerification);
		if($EmailQuery -> num_rows > 0){
			while($row = $EmailQuery->fetch_assoc()) {
				if($row['Email'] === $email){
					//echo $message;
					header("Location: project.php?emessage=You can only guess once");
				}else {
					$IND = "INSERT INTO lnumbers (ID, Email, Lnumber) VALUES ('$ID', '$email','$Snumber')";
					$SQLno = mysqli_query($connect, $IND);
		
					if ($SQLno){
						header("Location: project.php?message=Added");
						die;
					}
				}
			} 
		}else{
			$IND = "INSERT INTO lnumbers (ID, Email, Lnumber) VALUES ('$ID', '$email','$Snumber')";
			$SQLno = mysqli_query($connect, $IND);
		
			if ($SQLno){
				header("Location: project.php?message=Added");
				die;
			}
		}
	}
}

echo $email;

?>