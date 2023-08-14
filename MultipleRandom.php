<?php

include "connect.php";
include "sendmail.php";

$numbers = "SELECT * FROM mnumbers";

$SQLrandom = mysqli_query($connect, $numbers);

$arraynumbersone = [];
$arraynumberstwo = [];
$arraynumbersthree = [];

while($rowone = mysqli_fetch_array($SQLrandom)){
	$arraynumbersone[] = $rowone['Fnumber'];
	$arraynumberstwo[] = $rowone['Snumber'];
	$arraynumbersthree[] = $rowone['Tnumber'];
}


//pick numbers at random
$randomnumberone = array_rand($arraynumbersone);
$Num_one = $arraynumbersone[$randomnumberone];

$randomnumbertwo = array_rand($arraynumberstwo);
$Num_two = $arraynumberstwo[$randomnumbertwo];

$randomnumberthree = array_rand($arraynumbersthree);
$Num_three = $arraynumbersthree[$randomnumberthree];

$info= "SELECT * FROM mnumbers WHERE Fnumber = $Num_one AND Snumber = $Num_two AND Tnumber = $Num_three";
$infoquery = mysqli_query($connect, $info);

if($infoquery -> num_rows > 0){
	$chosenemails = [];
	$chosenID = [];
	while($row = $infoquery->fetch_array()) {
		$chosenemails[] = $row['Email'];
		$chosenIDs[] = $row['ID'];
	}
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

?>
