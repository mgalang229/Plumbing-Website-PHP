$(document).ready(function(){
	$("#bars").click(function (){
		$('.main-header-secondary-menu ul').fadeToggle();
	});
});

const mainHeaderUL = document.querySelector('.main-header-secondary-menu ul');

function myFunction(x) {
	if (x.matches) {
		mainHeaderUL.style.display = 'block';
	} else {
		mainHeaderUL.style.display = 'none';   	
	}
}
let x = window.matchMedia("(min-width: 980px)");
myFunction(x);
x.addListener(myFunction);

const quoteButton = document.querySelector('.quote-button');

quoteButton.onclick = function(){
	window.location = 'http://bestgarlandplumbing.com/wp-content/themes/Jay-Patel-Website/get-a-quote.html';
};

const homeLogo = document.querySelector('#home-logo');

homeLogo.onclick = function(){
	window.location = 'http://bestgarlandplumbing.com/index.php';
}