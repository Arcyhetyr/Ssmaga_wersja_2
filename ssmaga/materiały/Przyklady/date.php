<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$baza = "javadb";
	$tabela = "uzytkownicy";
	$miasto = $_GET['city'];

	$conn = @mysqli_connect($server,$user,$pass,$baza);
	$query = "SELECT * FROM $tabela WHERE miasto = '$miasto'";
	$result = mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);
	if ($num>0){
		while($row=$result->fetch_assoc()){
			echo $row['imie']," ",$row['nazwisko'],"<br>";
		}
	}else{
		echo "Brak danych";
	}
	mysqli_close($conn);
?>