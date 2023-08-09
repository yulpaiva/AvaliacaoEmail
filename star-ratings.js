let star1 = document.querySelectorAll('input');
let showValue = document.querySelector('#rating_value');

for (let i = 0; i < star.length; i++) {
	star[i].addEventListener('click', function() {
		i = this.value;

		showValue.innerHTML = i + " de 5";
	});
}

let estrela = document.querySelectorAll('input');
let showValue1 = document.querySelector('#rating_value1');

for (let a = 0; a < estrela.length; a++) {
	estrela[a].addEventListener('click', function() {
		a = this.value;

		showValue1.innerHTML = a + " de 5";
	});
}




