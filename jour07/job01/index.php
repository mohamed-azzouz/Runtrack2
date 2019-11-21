<?php

session_start(); 

if (isset($_POST["button_reset"])) 
{
	$_SESSION['nbvisites'] = 0;
}

if(!isset($_SESSION['nbvisites']))
{
	$_SESSION['nbvisites'] = 0;
}
else
{
	$_SESSION['nbvisites']++ ;
}

echo "Visite : ".$_SESSION['nbvisites']." fois";
echo "<br>";




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


