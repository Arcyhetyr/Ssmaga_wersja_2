<?php
	
	$xml=simplexml_load_file("osoba.xml");
	print_r($xml);
	

	$myArr = array("imie"=>"John","imie1"=>"Mary");
	$linia = json_encode($myArr);
	echo $linia;


?>