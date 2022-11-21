<?php 
	session_start();
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<?php 
		$sql = "SELECT * FROM  users;";
		$result=mysqli_query($con, $sql);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck>0){
			while($row = mysqli_fetch_assoc($result)){
				echo $row["user_id"]."<br>";
			}
		}
?>
</body>
</html>