<?php
	$fruit ="ananas";
	$haystack = $fruit;
	$needle = "a";
	$needlePosition = strrpos($haystack,$needle); /* strrpos en niet strpos voor laatste needle */
	$hoofdletter = strtoupper($fruit);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>opdracht extra-function-deel2</title>
	</head>
	
	<body>
		<p><?php echo $fruit ?>bevat <?php echo $fruitLengte?> karakters en de laatste <?php echo $needle ?> letter bevindt zich op positie <?php echo $needlePosition ?></p>
		<p></p>
	</body>
	


</html>