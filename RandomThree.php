<?php

include "connect.php";

$tnumbers = "SELECT Tnumber FROM mnumbers";

$SQLrandomthree = mysqli_query($cone, $tnumbers);

$arraynumbersthree = [];

while($rowthree = mysqli_fetch_array($SQLrandomthree)){
	$arraynumbersthree[] = $rowthree['Tnumber'];
}

$randomnumberthree = array_rand($arraynumbersthree);

echo $arraynumbersthree[$randomnumberthree];

?>
