<?php /* aan elkaar <? en php --> <?php */
	$voornaam = "Lucy";
	$achternaam = 'Hendriks';
	$voornaamEnNaam = $voornaam ." ". $achternaam;
	$voornaamEnNaamLengte = strlen($voornaamEnNaam);
	
	var_dump( $voornaamEnNaam );

?>

<!DOCTYPE html>
<html>

<head><title>Concatenation</title>
</head>

<body>

<p>Ik heet <?php echo $voornaamEnNaam; ?></p> <!-- </p> niet vergeten -->
<p>Mijn naam telt <?php echo $voornaamEnNaamLengte?> karakters</p> <!-- echo niet vergeten ! -->

</body>

</html>