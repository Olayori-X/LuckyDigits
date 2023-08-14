<?php

session_start();

$email = $_SESSION['Email'];
include "connect.php";
include "validate.php";

if (isset($_POST['gssNo1']) && isset($_POST['gssNo2']) && isset($_POST['gssNo3'])) {
	$MOnumber = validate($_POST['gssNo1']);
	$MTnumber = validate($_POST['gssNo2']);
	$MTHnumber = validate($_POST['gssNo3']);
	$ID = validate($_POST['multID']);

	if(empty($MOnumber)){
		header("Location: project.php?emessage=You need to input all the numbers");
		exit();

	}elseif (empty($MTnumber)) {
		header("Location: project.php?emessage=You need to input all the numbers");
		exit();

	}elseif (empty($MTHnumber)) {
		header("Location: project.php?emessage=You need to input all the numbers");
		exit();

	}else{
		$EmailVerification = "SELECT Email FROM mnumbers WHERE Email = '$email'";
		$EmailQuery = mysqli_query($connect, $EmailVerification);
		if($EmailQuery -> num_rows > 0){
			while($row = $EmailQuery->fetch_assoc()) {
				if($row['Email'] === $email){
					header("Location: project.php?emessage=You can only guess once");
				}else {
					$INDM = "INSERT INTO mnumbers (Email, ID, Fnumber, Snumber, Tnumber) VALUES ('$email', '$ID', '$MOnumber', '$MTnumber', '$MTHnumber')";
					$SQLnos = mysqli_query($connect, $INDM);
					
					if ($SQLnos){
						header("Location: project.php?message=Added");
						die; 
					}
				}
			}
		}else{
			$INDM = "INSERT INTO mnumbers (Email, ID, Fnumber, Snumber, Tnumber) VALUES ('$email', '$ID', '$MOnumber', '$MTnumber', '$MTHnumber')";
			$SQLnos = mysqli_query($connect, $INDM);
					
			if ($SQLnos){
				header("Location: project.php?message=Added");
				die;
			}
		}
	}
}else{
	echo "COnnection lost";
}
?>