<?php

$getal = 5;
$dag= "x";

switch ($getal){

	case ($getal==1):
		$dag="maandag";
		break;
	case ($getal==2):
		$dag="dinsdag";
		break;
	case ($getal==3):
		$dag="woensdag";
		break;
	case ($getal==4):
		$dag="donderdag";
		break;	
	case ($getal==5):
		$dag="vrijdag";
		break;
	case ($getal==6):
		$dag="zaterdag";
		break;
	case ($getal==7):
		$dag="zondag";
		break;
	default:
	$dag = "onbekend";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>opdracht switch</title>
	</head>
	
	<body>
		<p>De dag van vandaag is <?= $dag ?></p> 
		
		</p>
		
	</body>
	


</html>