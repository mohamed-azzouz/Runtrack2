<?php

session_start(); 

if (isset($_POST["button_reset"])) 
{

	$_COOKIE["nbvisite"] = 0;
}

if (isset($_COOKIE["nbvisite"])) {
  $nb = $_COOKIE["nbvisite"]; 
  $nb++; 
  setcookie("nbvisite", $nb); 
}

echo "Cookie :".$nb;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="submit" name="button_reset" value="reset" />

	</form>
	

</body>
</html>