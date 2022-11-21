

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>calculator</title>
</head>
<body>
	<form method="get">
		<input type="text" name="num1" placeholder="number1">
		<input type="text" name="num2" placeholder="number2">
		<select name="operator">
			<option>addition</option>
			<option>subtraction</option>
			<option>multiplication</option>
			<option>division</option>
			<option>modulus</option>
			<option>none</option>
		</select>
	    <br>
	    <button type="submit" name="submit">calculate</button>
	</form>
	<P>the answer is </P>
<?php 
	echo " <p style='color:red;'>fdsfsdfs</p>";
	if(isset($_GET["submit"])){
		$result1=$_GET["num1"];
		$result2=$_GET["num2"];
		$operator=$_GET["operator"];
	}
    switch ($operator) {
    	case "addition":
    		echo $result1+$result2;
    		break;
    	case "subtraction":
    		echo $result1-$result2;
    		break;
    	case "multiplication":
    		echo $result1*$result2;
    		break;
    	case "division":
    		echo $result1/$result2;
    		break;
    	case "modulus":
    		echo $result1%$result2;
    		break;
    	case "none":
    		echo"nothing is entered";
    		break;
    	
    	default:
    		echo"enter a valid option";
    		break;
    }
?>
</body>
</html>