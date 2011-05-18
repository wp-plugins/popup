var Popuptmr;
var Popupt;
var Popupobj;

function PopupDivFunc() {
	Popupobj = PopupgObj();
	PopupsLft();
	Popupshw(true);
	Popupt = 0;
	PopupsTmr();
}

function PopupDivStop() {
	Popupt = -100;
	PopupsTmr();
	return false;
}

function PopupsTmr() {
	Popuptmr = setInterval("fd()",20);
}

function fd() {
	var amt = Math.abs(Popupt+=10);
	if(amt == 0 || amt == 100) clearInterval(Popuptmr);
	amt = (amt == 100)?99.999:amt;
  	
	Popupobj.style.filter = "alpha(opacity:"+amt+")";
	Popupobj.style.KHTMLOpacity = amt/100;
	Popupobj.style.MozOpacity = amt/100;
	Popupobj.style.opacity = amt/100;
	
	if(amt == 0) Popupshw(false);
}

function PopupsLft() {
	var w = 170;	// set this to 1/2 the width of the PopupDiv div defined in the style sheet 
			// there's not a reliable way to retrieve an element's width via javascript!!
					
	var l = (document.body.innerWidth)? document.body.innerWidth / 2:document.body.offsetWidth / 2;

	Popupobj.style.left = (l - w)+"px";
}

function PopupgObj() {
	return document.getElementById("PopupDiv");	
}

function Popupshw(b) {
	(b)? Popupobj.className = 'show':Popupobj.className = '';	
}