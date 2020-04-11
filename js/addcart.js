function ready(){
	var addToCartButtons=document.getElementsByClassName('btn_card')
	for(var i = 0; i < addToCartButtons.length; i++){
		var button = addToCartButton[i]
		button.addEventListener('click',addToCartClicked);
	}
}

function addToCartClicked(event){
	var button = event.target
	var servive = 
}