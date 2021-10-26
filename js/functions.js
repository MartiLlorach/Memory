var flipped = 0;
var tries = 0;

// This function contains de logic of the game

function flip(card){
	if (flipped >= 2){return}

	if (card.getAttribute('state') == 'unflipped'){
		flipCard(card);
  	}

	if (flipped == 2){
		flippedCards = document.querySelectorAll('[state="flipped"]');
		addTry();

		if (flippedCards[0].getAttribute('name') == flippedCards[1].getAttribute('name')){
			cardsSolved(flippedCards);
			checkWin();

		} else {
			setTimeout("unflipCards(flippedCards)", 2000);
		}
	}
}

// This function adds the state "flipped" to a card and changes his image

function flipCard(card){
	card.firstElementChild.setAttribute('src', './images/' + card.getAttribute("name") + '.png');
	card.setAttribute('state', 'flipped');
	flipped++;
}

// This function adds a try and reflects it in the interface

function addTry(){
	tries++;
	document.getElementById('tries').innerHTML = 'Tries = ' + tries;
}

// This functions sets the state "solved" to an array of cards

function cardsSolved(flippedCards){
	flippedCards.forEach(flippedCard => {
		flippedCard.setAttribute('state', 'solved');
	});
	flipped = 0;
}

// This function restore the state "unflipped" to an array of cards and their back image

function unflipCards(flippedCards){
	flippedCards.forEach(flippedCard => {
		flippedCard.setAttribute("state", "unflipped");
		flippedCard.firstElementChild.setAttribute("src", "./images/backCards.jpeg");
	});
	flipped = 0;
}

// This function checks if the quantity of cards is equal to the quantity of solved cards, if it is then the player have won, it also creates a cookie with the tries score

function checkWin(){
	allCards = document.querySelectorAll('[class="card"]');
	solvedCards = document.querySelectorAll('[state="solved"]');

	if (solvedCards.length == allCards.length) {
		createCookie("tries", tries, "10");
		document.getElementById('cardsContainer').setAttribute('class','flash'); //white flash when solved
		setTimeout("window.open('winner.php','_self')",3000);
	}
}

// This functions solves the memory

function solveMemory(){
	allCards = document.querySelectorAll('[class="card"]');
	allCards.forEach(card => {
		card.setAttribute('state', 'solved');
		card.firstElementChild.setAttribute('src', './images/' + card.getAttribute("name") + '.png');
	});
	checkWin();
}

// This function creates a cookie

function createCookie(name, value) {
    document.cookie = escape(name) + "=" + 
        escape(value) + "; path=/";
}


// ###############TIMER###############

var maxT = 100; //limit time in seconds
function setTimer(sec){
	maxT= sec;
}
function innitTimer(){
	secondPasses();
	var clock = setInterval('secondPasses()', 1000);
}
function secondPasses(){
	let timer = document.getElementById('timer');
	let min = Math.floor(maxT/60);
	let sec = maxT - min*60;
	let minS = min;
	let secS = sec;

	if (min.toString().length == 1){
		minS = '0' + min;
	}
	if (sec.toString().length == 1){
		secS = '0' + sec;
	}

	if (min==0) timer.innerHTML='00:'+secS;
	else timer.innerHTML=minS+':'+secS;

	maxT--;

	if (maxT<=0){
		maxT=0;
		document.getElementById('cardsContainer').setAttribute('class','redFlash'); //white flash when solved
		setTimeout("window.open('gameOver.php','_self')",3000);
	}
}

function showExodia(){
	var easterEgg = document.getElementById('containerEasterEgg');
	easterEgg.setAttribute('style', 'top: 10vh');
	var exodiaCards = easterEgg.childNodes
	exodiaCards[1].setAttribute('state', 'solved')
	exodiaCards[3].setAttribute('state', 'solved')
	exodiaCards[5].setAttribute('state', 'solved')
	exodiaCards[7].setAttribute('state', 'solved')
	exodiaCards[9].setAttribute('state', 'solved')
	setTimeout( () => {
		easterEgg.setAttribute('style', 'top: -100vh');
		exodiaCards[1].setAttribute('state', 'unflipped');
		exodiaCards[3].setAttribute('state', 'unflipped');
		exodiaCards[5].setAttribute('state', 'unflipped');
		exodiaCards[7].setAttribute('state', 'unflipped');
		exodiaCards[9].setAttribute('state', 'unflipped');
	}, 2000)
	
	
}

var exodiaEE=[];
function keyCode(event) {
  var x = event.keyCode;
  
  /*69,88,79,68,73,65*/
  exodiaEE.push(x);
  
  if (exodiaEE[0]==69&&exodiaEE[1]==88&&exodiaEE[2]==79&&exodiaEE[3]==68&&exodiaEE[4]==73&&exodiaEE[5]==65) {
	showExodia();
	exodiaEE = [];			
  }
  
}