var flipped = 0;
var tries = 0;

function flip(card){
	if (flipped >= 2){return}

	if (card.getAttribute('state')=='unflipped'){
		card.firstElementChild.setAttribute('src', '../images/' + card.getAttribute("name") + '.png');
		card.setAttribute('state', 'flipped');
		flipped++;
  	}

	if (flipped==2){
		flippedC = document.querySelectorAll('[state="flipped"]');
		tries++;
		document.getElementById('counter').innerHTML = 'cont = '+tries;
		if (flippedC[0].getAttribute('name') == flippedC[1].getAttribute('name')){
			flippedC[0].setAttribute('state', 'solved');
			flippedC[1].setAttribute('state', 'solved');
			flipped = 0;
			checkWin();
		} else{
			setTimeout(unflip, 2000);

			// al cabo de 2 segundos unflip
		}
		
	}
}

function unflip(){
	flippedC[0].setAttribute("state", "unflipped");
	flippedC[0].firstElementChild.setAttribute("src", "../images/backCards.jpeg");
	flippedC[1].setAttribute("state", "unflipped");
	flippedC[1].firstElementChild.setAttribute("src", "../images/backCards.jpeg");
	flipped = 0;
}
function checkWin(){
	allCards = document.querySelectorAll('[class="card"]');
	flippedC = document.querySelectorAll('[state="solved"]');
	if (flippedC.length==allCards.length) {
		setTimeout("window.open('winner.php','_self')",3000); 
	}
}