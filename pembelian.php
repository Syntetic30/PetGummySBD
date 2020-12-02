<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<?php
	include("config.php");
	$get = mysqli_query($connect, "SELECT * FROM pembelian");
	$row = mysql_fetch_array($get);

	echo "string";
?>