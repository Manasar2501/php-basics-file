<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>if</title>
</head>
<body>
  <?php 
     if(5=="5"){
     	echo "true";
     }
     //differece between string and integer
      if(5==="5"){
     	echo "true";
     }
     else if(5=="5"){
     	echo "false";
     }

     if(5!=3){
     	echo "false";
     }
     if(5!=="5"){
     	echo "true";
     }

      if(5>1){
     	echo "5 is greater";
     }
     /*logicall operators
      and(&&), or(||), xor(any one has to be true and both cannot be true)
      */
  ?>
</body>
</html>