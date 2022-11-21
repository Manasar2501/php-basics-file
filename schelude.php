<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scheduler</title>
	<style>
		p{
			margin: 20px;
			border: solid black 4px;
			text-align: left;
			height: 100px;
			width: 75px;
		}
	</style>
</head>
<body>
<?php 
   $dayofweek= date("w");//inbuilt function
   switch($dayofweek){
   		case 0:
   			echo "<p>sunday</p>";
   			break;
   		case 2:
   			echo "<p>monday</p>";
   			break;
   		case 3:
   			echo "<p>wednesday</p>";
   			break;
   		case 4:
   			echo "<p>thursday</p>";
   			break;
   		case 5:
   			echo "<p>friday</p>";
   			break;
   		case 6:
   			echo "<p>saturday</p>";
   			break;
   		default:
   		    break;

   }

   $td = '2000/04/23';
  if ($td > date('Y/m/d')){
  		echo date('y/m/d');
  }
  else
  		echo "no";
   
?>
</body>
</html>