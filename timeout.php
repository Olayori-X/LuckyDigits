<?php
include "connect.php";

$Deletenos = "DELETE FROM lnumbers";
$DeleteMnos = "DELETE FROM mnumbers";

$SQLdeleteS = mysqli_query($connect, $Deletenos);
$SQLdeleteM = mysqli_query($connect, $DeleteMnos);

if ($SQLdeleteM && $SQLdeleteS){
	session_start();
	session_unset();
	session_destroy();
	header("Location: login.php");
}
?>