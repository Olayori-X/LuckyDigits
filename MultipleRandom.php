<?php

include "connect.php";
include "sendmail.php";

$fnumbers = "SELECT Fnumber FROM mnumbers";
$snumbers = "SELECT Snumber FROM mnumbers";
$tnumbers = "SELECT Tnumber FROM mnumbers";

$SQLrandomone = mysqli_query($connect, $fnumbers);
$SQLrandomtwo = mysqli_query($connect, $snumbers);
$SQLrandomthree = mysqli_query($connect, $tnumbers);

$arraynumbersone = [];
$arraynumberstwo = [];
$arraynumbersthree = [];

while($rowone = mysqli_fetch_array($SQLrandomone)){
	$arraynumbersone[] = $rowone['Fnumber'];
}

while($rowtwo = mysqli_fetch_array($SQLrandomtwo)){
	$arraynumberstwo[] = $rowtwo['Snumber'];
}

while($rowthree = mysqli_fetch_array($SQLrandomthree)){
	$arraynumbersthree[] = $rowthree['Tnumber'];
}


//print_r($arraynumbersone);

//array_push($arraynumbers, $ree);
//print_r($arraynumbers);
$randomnumberone = array_rand($arraynumbersone);
$Num_one = $arraynumbersone[$randomnumberone];

$randomnumbertwo = array_rand($arraynumberstwo);
$Num_two = $arraynumberstwo[$randomnumbertwo];

$randomnumberthree = array_rand($arraynumbersthree);
$Num_three = $arraynumbersthree[$randomnumberthree];

$emails= "SELECT Email FROM mnumbers WHERE Fnumber = $Num_one AND Snumber = $Num_two AND Tnumber = $Num_three";
$emailquery = mysqli_query($connect, $rowonetwo);

if($emailquery -> num_rows > 0){
	$chosenemails = [];
	while($row = $emailquery->fetch_array()) {
		$chosenemails[] = $row['Email'];
	}
}

for($i = 0; $i < count($chosenemails); $i++){
	$mail->isHTML(true);
	$email = $chosenemails[$i];//Still need to do a lot of validation here
	$mail->addAddress($email);
	$mail->Subject = "Link to change your password";
	$mail->Body = "Click <a href = 'localhost/project/claimreward.php?key=$email'>here</a> to verify your email";
	$mail->send();
}

echo
	"
	<script>
	alert('Link to verify your email has been sent to your email');
	document.location.href = 'timeout.php';
	</script>
	";

?>
