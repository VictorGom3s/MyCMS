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

/* Menu active */

function addActive() {
	const link = document.querySelectorAll('.menu ul li');
	link.forEach((item) => {
		if (item.classList.contains('active')) {
			item.classList.add('active');
		};
		const currentPage = window.location.href;
		const link = item.querySelector('a').getAttribute('href');

		if (link == currentPage) {
			item.classList.add('active');
		}
	});
}

addActive();