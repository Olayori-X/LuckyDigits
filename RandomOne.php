<?php

include "connect.php";

$fnumbers = "SELECT Fnumber FROM mnumbers";

$SQLrandomone = mysqli_query($cone, $fnumbers);

$arraynumbersone = [];

while($rowone = mysqli_fetch_array($SQLrandomone)){
	$arraynumbersone[] = $rowone['Fnumber'];
}

//print_r($arraynumbersone);

//array_push($arraynumbers, $ree);
//print_r($arraynumbers);
$randomnumberone = array_rand($arraynumbersone);

echo $arraynumbersone[$randomnumberone];

?>
