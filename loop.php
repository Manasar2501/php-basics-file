<?php 
$x=1;
 while($x<=10){
 	echo "x value is ".$x;
 	echo "<br>";
 	$x++;
 }

$y=1;
 do{
 	echo "hi there";
 	echo "<br>";
 	$y++;
 }
 while($y<=10);//semicolon after while in do-while.
  

$z=0;
for($i=0;$i<=10;$i++){
	echo $z;
	$z=$z+$i;
	echo "<br>";
}

//foreach
$arr= array("a","b","c");
foreach($arr as $loop){
	echo "this is ".$loop."<br>";
}

//arrays
$array = array("cat","mat","flat",6,78.4);
foreach( range(0,strlen($array)) as $num){
	echo array[$num]."<br>";
}

?>