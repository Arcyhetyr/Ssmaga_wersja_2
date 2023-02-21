// Wczytanie pliku JSON z miastami
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var miasta = JSON.parse(this.responseText);

    // Pobranie nazwy miasta z pliku JSON w zależności od miesiąca
    var nazwaMiasta;
    var miesiac = new Date().getMonth();
    switch (miesiac) {
      case 0:
        nazwaMiasta = miasta.miasta[0].nazwa;
        break;
      case 1:
        nazwaMiasta = miasta.miasta[1].nazwa;
        break;
      case 2:
        nazwaMiasta = miasta.miasta[2].nazwa;
        break;
      default:
        nazwaMiasta = "Nieznane";
    }

    // Wstawienie nazwy miasta do dokumentu HTML
    var elementNazwyMiasta = document.getElementById("nazwaMiasta");
    elementNazwyMiasta.innerHTML = nazwaMiasta;
  }
};
xmlhttp.open("GET", "miasta.json", true);
xmlhttp.send();