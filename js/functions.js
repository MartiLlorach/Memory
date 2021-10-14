var flipped = 0;

function flip(card){
	if (flipped >= 2){return}
	if (card.getAttribute('state')=='unfliped'){
		card.firstElementChild.setAttribute('src','../images/cruz.jpg');
		card.setAttribute('state', 'fliped');
		flipped++;
	}
	//if 2 flipped, comparar
	//si son iguales se dejan arriba
	//si no al cabo de 2 segundos unflip
}