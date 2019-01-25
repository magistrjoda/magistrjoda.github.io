var Slideindex = 1;
showSlide(Slideindex);

function plusSlide(n) {
	showSlide(Slideindex += n);
}
function chooseSlide(n) {
	showSlide(Slideindex=n);
}
function showSlide(n) {
	var i;
	var slides = document.getElementsByClassName("slide");
	var dots = document.getElementsByClassName("dot");

	if (n > slides.length) {
		Slideindex = 1;
	}
	if (n < 1) {
		Slideindex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slides[Slideindex-1].style.display="block";
	timer();
	
}
function timer() {
var timerId = setTimeout("plusSlide(1)", 5000);
}

function obsv(a) {
	var hrefToText = document.getElementsByClassName("hrefToText");
	var hrefToTextActive = document.getElementsByClassName("hrefToTextActive");
	var obSvActive = document.getElementsByClassName("ObSvActive");

 if (a == 1) {
	hrefToText[0].style.display="none";
	hrefToTextActive[0].style.display="block";
	obSvActive[0].style.display="block";
} 
if (a == 2) {
	hrefToText[0].style.display="block";
	hrefToTextActive[0].style.display="none";
	obSvActive[0].style.display="none";
}
}


function CatNavi(a) {
	var ctA = document.getElementsByClassName("ctActive");
	var count = ctA.length;
	if (count > 0) {
		ctA[0].className="ct";
	}
	if (count < 1) {
 	var ct = document.getElementsByClassName("ct");
 	ct[a].className = "ctActive";
 }

	}