<?php

include "connect.php";
include "time.php";
include "sendmail.php";

$numbers = "SELECT * FROM lnumbers";

$SQLrandom = mysqli_query($connect, $numbers);
$arraynumbers = [];

while($row = mysqli_fetch_array($SQLrandom)){
	$arraynumbers[] = $row['Lnumber'];
}
//array_push($arraynumbers, $ree);
//print_r($arraynumbers)
if(count($arraynumbers) > 0){
	$randomnumber = array_rand($arraynumbers);
	$chosennumber = $arraynumbers[$randomnumber];

	$ID = "SELECT * FROM lnumbers WHERE Lnumber = '$chosennumber'";
	$IDquery = mysqli_query($connect, $ID);

	$chosenemails = [];
	while($chosenrow = mysqli_fetch_array($IDquery)){
		$chosenemails[] = $chosenrow['Email'];
	}


	for($i = 0; $i < count($chosenemails); $i++){
		$email = $chosenemails[$i];//Still need to do a lot of validation here
		$ID = $chosenIDs[$i];
		$mail->addAddress($email);
		$mail->Subject = "Claim your reward";
		$mail->Body = "Click <a href = 'localhost/project/claimreward.php?key=$ID'>here</a> to verify your email";
		$mail->send();

		$insertID = "INSERT INTO winners (ID, Email) VALUES ('$ID', '$email')";
		$insertquery = mysqli_query($connect, $insertID);
	}

	echo
		"
		<script>
		alert('Link to verify your email has been sent to your email');
		document.location.href = 'timeout.php';
		</script>
		";
}else{
	echo "There is no number to pick from";
}

?>