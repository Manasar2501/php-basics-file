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

   <form method="get">
      <input type="hidden" name="name" value="something">
      <button type=submit> press me</button>
   </form>
<?php 
   //data type
   $stringName="this is a string ";
   $stringName1='this is also a string, but uses a single quoute ';
   $num=89;
   $floatNUm=45.56;
   echo $stringName1;
   echo "<br>";
  //boolean

   //array
   $arrayNames=array("manasa","raju","geetha","madhu sudan"); 
   echo $arrayNames["1"];
   echo "<br>";
   $name = "manali";//string
   echo $name;
   echo " ";
   echo $name." is cute";

   //artithematic operator
   echo 12+5;//addtion
   print 12%3;//modulus
   echo 5**5; //5 power 5
   //asignment operator
   $x=100;
   $x= $x+5;
   $y=$x;
   echo $x;
   echo $y;
   echo "<br>";

   //  input
   $fname=$_GET["fname"];
   echo $fname." is a wonder";

   setcookie("name","manasa", time() + 86400);
   $_SESSION['name']="manasa";//hakers are not able to see section butt can for cookie   


   /*this ia a 
 comment pragraph*/
?>
 <form method="get">
      <input type="hidden" name="name" value="something">
      <button type=submit> press me</button>
   </form>
</body>
</html>