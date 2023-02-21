function show(){
	var city = document.getElementById('city').value;
	
	if (city==""){
		alert("Wprowadź kryterium wyszukiwania");
		return;
	}

	url = "http://localhost/Przyklady/date.php?city="+city;
	url=encodeURI(url);
	ajax(url,onComplete);
}

function ajax(url,onComplete){
	var as = new XMLHttpRequest();
	as.onreadystatechange=function(){
		if(as.readyState==4){
			var t = as.responseText;
			onComplete(t);
			delete as;
		}
	}
	as.open("GET",url,true);
	as.send(null);
}

function onComplete(text){
	var date = document.getElementById('date');
	if (text.substr(0,5)!="error"){
		date.innerHTML = text;
	}else{
		data.innerHTML="Brak danych";
	}
}