<?php
/* variabels altijd eerst definieren */
$seconden = 221108521;
$minuten = 1;
$uren = 1;
$dagen = 1;
$weken = 1;
$maanden = 1;
$jaren = 1;

// modulo??

$minuten=round($seconden/60, 0);
$uren=$minuten/60;
$dagen=$uren/24;
$weken=$dagen/7;
$maanden=$dagen/31;
$jaren=$dagen/365;



?>

<!DOCTYPE html>
<html>
	<head>
		<title>opdracht if-else deel2</title>
	</head>
	
	<body>
		<p>in <?= $seconden ?> </p>
		<p>minuten: <?= $minuten ?></p>
		<p>uren: <?= $uren ?></p>
		<p>dagen: <?= $dagen ?></p>
		<p>weken: <?= $weken ?></p>
		<p>maanden: <?= $maanden ?></p>
		<p>jaren: <?= $jaren ?></p>
		
	
	</body>
	


</html>