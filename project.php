<?php
session_start();

if(isset($_SESSION['Email']) && isset($_SESSION['UserName'])){

?>
<DOCTYPE html>
<html>
<head>
<title></title>
<link rel= "stylesheet" href= "projectstyle.css">
<link rel= "stylesheet" href= "project_style2.css">
<meta name= "viewport" content= "width= device-width, initial-scale= 1.0">
<script src= "jquery-3.0.0.js"></script>
<script src= "projectscript.js"></script>
</head>
<body>
<?php
	include "time.php";
	include "connect.php";

	if (($currentHour == 9 || 15 || 21) && $currentMinute == 0 && $currentSecond < 3){
		header("Location: Random.php");
		header("Location: MultipleRandom.php");
	}
?>
	
	<header>
		<span id = "logout"><a href= "LogOut.php">Log Out</a></span>
		<h1>🎰 Lucky Digits 🎰</h1>
		<span id = "demo"></span>
	</header>

	<nav>
		<a href="#">Home</a>
		<a href="#">About</a>
		<a href="#">Rules</a>
		<a href="#">Contact</a>
	</nav>


	<div id= "showgame">
		<button type= "button" id= "showgameBtn">
			Try this out... Click here
		</button>
	</div>

	<div id= "backgame">
		<button type= "button" id= "backgameBtn">
			<----
		</button>
	</div>

	<div id= "moreoptions">
		<div> Welcome <?php echo $_SESSION['UserName']; ?></div>
		<button><a href= "LogOut.php">Log Out</a></button>
	</div>


	<?php if (isset($_GET['emessage'])) {?>
		<p class= "message"><?php echo $_GET['emessage'];?> </p>
	<?php } ?>

	<?php if (isset($_GET['message'])) {?>
		<p class= "message"><?php echo $_GET['message'];?> </p>
	<?php } ?>

	<div id= "wrkspace">
		<form id= "gssForms" method= "post"  action = "Snumbers.php">
			<div id = "body">
				<div id="game-container">
				<h2 id = "h2">🎰 Lucky Digits - Match Three Numbers 🎰</h2>
				<p>Guess three numbers between 1 and 10 to win the jackpot!</p>
				<input type="number" name = "gssNo1" class = "input" id="guess1" min="1" max="10" placeholder="Guess 1" required>
				<input type="number" name = "gssNo2" class = "input" id="guess2" min="1" max="10" placeholder="Guess 2" required>
				<input type="number" name = "gssNo3" class = "input" id="guess3" min="1" max="10" placeholder="Guess 3" required>
				<input type ="hidden" id = "hiddenID" name = "multID">
				<button id = "button" type = "button" onclick="createID('gssForms', 'hiddenID')">Spin the Wheel</button>
				<p id="result"></p>
				</div>
			</div>
		</form>
	</div>

	<form id= "gssForm" method= "post" action = "Snumber.php">
		<div id="casino-container">
			<h2>Lottery Game</h2>
			<p id="instructions">Guess the winning number to win the jackpot!</p>
			<input type="number" id="guess" min="1" name = "gssNo">
			<input type = "hidden" id = "hidden" name = "ID">
			<button type = "button" onclick="createID('gssForm', 'hidden')">Spin the Wheel</button>
			<p id="result"></p>
  		</div>

	</form>

	<footer>
		<p>&copy; 2023 Lucky Digits. All rights reserved.</p>
	</footer>

<!-- Key: K64bA2mD5YIgIrKLXzagI2eb9YW0YG3ath6hFhdZ4BUH8EVqG1
Secret: NzPCzWW0DbIcv6Iq7mqG9IHNS1NecnPPvSVftMwKuGMUJCpum1
Token: vIROSGEr7e9YqIsMriizChB0C8GB4bZ5EgDbzT0OxfYB8quBGp -->
</body>
</html>

<?php

}else{
	header("Location: login.php");
	exit();
}
?>