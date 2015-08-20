<?php
	$lettertje ="e";
	$cijfertje = 3;
	$langsteWoord = "zandzeepsodemineralenwatersteenstralen";
	$cijferWoord = str_replace($lettertje,$cijfertje,$langsteWoord);
	// string str_replace(string chaine1, string chaine2, string chaine3) Remplace toutes les occurrences de chaine1 dans chaine3 par chaine2.
?>

<!DOCTYPE html>
<html>
	<head>
		<title>opdracht extra-function-deel3</title>
	</head>
	
	<body>
		<p><?php echo $cijferWoord  ?></p>
		
	</body>
	


</html>