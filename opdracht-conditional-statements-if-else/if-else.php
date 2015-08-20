<?php
$jaar = 2014;

if (($jaar%4 ==0) || ($jaar%400==0) && ($jaar%100!=0)){ /* haakjes niet vergeten */ 
	$schrikkeljaar = "een schrikkeljaar";
}

else {
	$schrikkeljaar = "geen schrikkeljaar";
	
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>opdracht if-else</title>
	</head>
	
	<body>
		<p>Het jaar <?= $jaar ?> is <?= $schrikkeljaar ?></p>
		
		</p> 
		
		
	</body>
	


</html>