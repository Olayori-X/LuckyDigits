$(document).ready(function() {
	$("#closeSign_upDiv").click(function() {
		$("#sign_upDiv").hide();
	});

	$("#resultAlert").click(function() {
		$("#resultAlert").hide();
		location.reload();
	});

	$("#showgameBtn").click(function() {
		$("#wrkspace").slideDown("slow");
		$("#gssForm").slideUp("slow");
		$("#showgame").hide();
		$("#backgame").show();
	});

	$("#backgameBtn").click(function() {
		$("#showgame").show();
		$("#backgame").hide();
		$("#wrkspace").slideUp("slow");
		$("#gssForm").slideDown("slow");
	});

	$("#morebtn").click(function() {
		$("#moreoptions").toggle();
	});
});


setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();

  const minute = d.getMinutes();

  const hour = d.getHours();
  const second = d.getSeconds();

  if(hour == 9 && minute == 0 && second == 0) {
  	myFunction();
  	myFunctions();

  }else if (hour == 10 && minute == 39 && second == 0){
  	myFunction();
  	myFunctions();

  }else if (hour == 21 && minute == 0 && second == 0){
  	myFunction();
  	myFunctions();

  }else if (hour == 10){
  	document.getElementById("demo").style.color= "red";

  }else if(hour == 14){
  	document.getElementById("demo").style.color= "red";

  }else if(hour == 20){
  	document.getElementById("demo").style.color= "red";

  }else{

  }
}


/*function makeTransfer() {
	var APIKey = "K64bA2mD5YIgIrKLXzagI2eb9YW0YG3ath6hFhdZ4BUH8EVqG1"
	//var url = "https://api.dwolla.com/accounts//a84222d5-31d2-4290-9a96-089813ef96b3/applications";/*?appid={NzPCzWW0DbIcv6Iq7mqG9IHNS1NecnPPvSVftMwKuGMUJCpum1}";
	var url = "https://api.dwolla.com{K64bA2mD5YIgIrKLXzagI2eb9YW0YG3ath6hFhdZ4BUH8EVqG1}"
	fetch(url)
	.then(x => x.text())
	.then(y => myDisplay(y));
}

async function makeTransfer(){
	//alert("Hello");

	const apiKey = 'K64bA2mD5YIgIrKLXzagI2eb9YW0YG3ath6hFhdZ4BUH8EVqG1';
	//const url = `https://api.dwolla.com?key=${apiKey}`;
	const url = 'https://api.dwolla.com?key='+ apiKey;

	//console.log(url);

	const response = await fetch("https://api-sandbox.dwolla.com", {
		"method" : "GET",
		//"POST" :"https://api-sandbox.dwolla.com",
		"Content-Type" : "application/json",
		"Accept": "application/vnd.dwolla.v1.hal+json",
		"Authorization": "Bearer {K64bA2mD5YIgIrKLXzagI2eb9YW0YG3ath6hFhdZ4BUH8EVqG1}"

	});

const responseType = await response.json();

console.log(responseType);
alert("Hello");
}

/*async function makeTransfer() {
  try {
    const response = await fetch('https://api-sandbox.dwolla.com');

    console.log('response.status: ', response.status); // 👉️ 200
    console.log(response);
  } catch (err) {
    console.log(err);
  }
}

//makeRequest();*/



var addinput= [];
var Guess = document.getElementById("gssNo").value;
var Guess1 = document.getElementById("gssNo1").value;
var Guess2 = document.getElementById("gssNo2").value;
var Guess3 = document.getElementById("gssNo3").value;


function createID(button, hidden){
	var alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
	var ID = " ";
	for(var i = 0; i < 5; i++){
		var letter = Math.floor(Math.random() * alphabet.length);
		var number = Math.floor(Math.random() * 10);
		ID += alphabet[letter] + number;
	}
	document.getElementById(hidden).value = ID;
	document.getElementById(button).submit();
}

// function myFunction() {
// 	url= "random.php";
// 	let xhr = new XMLHttpRequest(); 
// 	xhr.open('GET', url);
// 	xhr.responseType = 'text';
// 	xhr.onload = function() {
//   		var hello = `${xhr.response}`;
//   		window.hey = hello;
// 	};
// 	xhr.send();
// 	if(hey == Guess){
// 		alert("You won the prize");
// 	}else{
// 		alert("Try again");
// 	}
// }

// function myFunctions() {
// 	urlone= "RandomOne.php";
// 	let xhrone = new XMLHttpRequest(); 
// 	xhrone.open('GET', urlone);
// 	xhrone.responseType = 'text';
// 	xhrone.onload = function() {
//   		var helloone = `${xhrone.response}`;
//   		window.heyone = helloone;
// 	};
// 	xhrone.send();
// 	document.getElementById("here").innerHTML= heyone;

// 	urltwo= "RandomTwo.php";
// 	let xhrtwo = new XMLHttpRequest(); 
// 	xhrtwo.open('GET', urltwo);
// 	xhrtwo.responseType = 'text';
// 	xhrtwo.onload = function() {
//   		var hellotwo = `${xhrtwo.response}`;
//   		window.heytwo = hellotwo;
// 	};
// 	xhrtwo.send();

// 	urlthree= "RandomThree.php";
// 	let xhrthree = new XMLHttpRequest(); 
// 	xhrthree.open('GET', urlthree);
// 	xhrthree.responseType = 'text';
// 	xhrthree.onload = function() {
//   		var hellothree = `${xhrthree.response}`;
//   		window.heythree = hellothree;
// 	};
// 	xhrthree.send();
// }

// function myTrialfunction() {
// 	if(heyone == Guess1 && heytwo == Guess2 && heythree == Guess3){
// 		alert("You won the prize");
// 	}else{
// 		alert("Try again");
// 	}
// }

