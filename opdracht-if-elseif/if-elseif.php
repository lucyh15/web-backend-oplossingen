<?php

$getal = 28;
$antwoord = "x";


if ($getal >=0 && $getal<10){
	$antwoord = "tussen 0 en 10";
}
elseif ($getal >=10 && $getal<20){
	$antwoord = "tussen 10 en 20";
}
elseif ($getal >=20 && $getal<30){
	$antwoord = "tussen 20 en 30";
}

elseif ($getal >=30 && $getal<40){
	$antwoord = "tussen 30 en 40";
}

else {
	$antwoord ="boven 100";
	
}

$omgekeerdAntwoord = strrev($antwoord);


?>

<!DOCTYPE html>
<html>
	<head>
		<title>opdracht conditional statement</title>
	</head>
	
	<body>
		<p>Het getal ligt <?= $antwoord ?></p> 
		
		<p><?= $omgekeerdAntwoord?></p>
		
	</body>
	


</html>