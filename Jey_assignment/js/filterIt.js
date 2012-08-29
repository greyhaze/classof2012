var filterIt = function() {
	var elems = document.getElementsByTagName('div');
	for (i = 0; i < elems.length; i++) {
		if (elems[i].getAttribute('class') == 'item'){
			if(elems[i].style.display == "none"){
				elems[i].style.display = "block";
			}else{
				elems[i].style.display = "none";
			}
		}
	}
}

document.getElementById('filterIt').onclick = filterIt;

var viewType = function() {
	var elems = document.getElementsByTagName('div');
	for (i = 0; i < elems.length; i++) {
		if (elems[i].getAttribute('class') == 'hide'){
			if(elems[i].style.display == "none"){
				elems[i].style.display = "block";
			}else{
				elems[i].style.display = "none";
			}
		}
	}
}

document.getElementById('viewType').onchange = viewType;

window.onload = viewType;

/*<div class="type">
<div class="origin">
<div class="race">
<div class="gender">
<div class="class">
<div class="details">
<div class="weapons">
<div class="armour">
<div class="alts">
<div class="entry">
<div class="setnum">
<div class="setname">
<div class="productionline">
<div class="manufacturer">
<div class="streetdate">*/


/* var viewType = function() {
	var elems = document.getElementsByTagName('div');
	for (i = 0; i < elems.length; i++) {
		var xx=elems[i].className;
		document.write(xx);
		if (xx.indexOf("hide")>0){
			if(elems[i].style.display == "none"){
				elems[i].style.display = "block";
			}else{
				elems[i].style.display = "none";
			}
		}
	}
}
*/