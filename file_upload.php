<?php
if(isset($_POST['submit'])){
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode(".", $fileName);
	$fileActExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if (in_array($fileActExt, $allowed)) {
		if($fileError==0){
			echo "there was an error uploading your file!";
			if ($fileSize<1000000) {
					$fileNameNew = uniqid('', true).".".$fileActExt;
					$fileDestination ="uploads/".$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
					header("Location:calculator.html?uploadsuccess");
				}else{
					echo "your file id too big";
				}	
		}
	}
	else{
		echo "you cannot upload file of this type!";
	}
}