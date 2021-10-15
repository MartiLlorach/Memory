var flipped = 0;

function flip(card){
	if (flipped >= 2){return}
	if (card.getAttribute('state')=='unfliped'){
		card.firstElementChild.setAttribute('src','../images/cruz.jpg');
		card.setAttribute('state', 'flipped');
	  card.setAttribute('state', 'flipped');
		flipped++;
  }
	if (flipped==2){
		flippedC = document.querySelectorAll('[state="flipped"]');
		if (flippedC[0].getAttribute('name') == flippedC[1].getAttribute('name')){
			flippedC[0].setAttribute('state', 'solved');
			flippedC[1].setAttribute('state', 'solved');
		} else{
			// al cabo de 2 segundos unflip
		}
		flipped = 0;
	}
}