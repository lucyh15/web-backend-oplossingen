<?php

$getal =1;
$dag = "x";

if ($getal == 1) {
	$dag="maandag";
}

if ($getal == 2) {
	$dag="dinsdag";
}

if ($getal == 3) {
	$dag="woensdag";
}

if ($getal == 4) {
	$dag="donderdag";
}

if ($getal == 5) {
	$dag="vrijdag";
}

if ($getal == 6) {
	$dag="zaterdag";
}

if ($getal == 7) {
	$dag="zondag";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>opdracht conditional statement</title>
	</head>
	
	<body>
		<p><?php ($getal=1) ?> De dag van vandaag is <?php echo $dag ?></p> 
		
		</p>
		
	</body>
	


</html>