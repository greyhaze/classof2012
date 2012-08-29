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
