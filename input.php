<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="get">
		<input type="text" name="fname">
		<input type="text" name="lname">
		<button> submit</button>
	</form>
<?php 
   $fname=$_GET["fname"];
   echo "your first name is ".$fname;
   $lname=$_GET["lname"];
   echo " your last name is ".$lname;
?>
</body>
</html>