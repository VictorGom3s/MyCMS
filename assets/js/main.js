/*
  Verificando se o user-agent é mobile
*/

const mobile = window.matchMedia('(max-width: 768px)');

if (mobile.matches) {
	console.log('Tela menor que 768px');
} else {
	console.log('Tela maior que 768px');
}

/* Fechar alertas */
const btnClose = document.querySelector('.close-alert');
if (btnClose != null) {
	btnClose.addEventListener('click', closeAlert);
}

function closeAlert() {
	this.parentNode.parentNode.style.opacity = 1;
	let intervalo = setInterval(() => {
		this.parentNode.parentNode.style.opacity -= 0.2;
		console.log(this.parentNode.parentNode.style.opacity);
		if (this.parentNode.parentNode.style.opacity == 0) {
			clearInterval(intervalo);
			this.parentNode.parentNode.remove();
		}
	}, 30);
}
