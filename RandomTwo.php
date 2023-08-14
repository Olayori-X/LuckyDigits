<?php

include "connect.php";

$snumbers = "SELECT Snumber FROM mnumbers";

$SQLrandomtwo = mysqli_query($cone, $snumbers);

$arraynumberstwo = [];


while($rowtwo = mysqli_fetch_array($SQLrandomtwo)){
	$arraynumberstwo[] = $rowtwo['Snumber'];
}

$randomnumbertwo = array_rand($arraynumberstwo);

echo $arraynumberstwo[$randomnumbertwo];

?>
