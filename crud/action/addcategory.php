<?php 
	require_once("../config.php");
	
	extract($_POST);
	$fileUplode = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['fileUplode']['name'];
	/* move uploaded file from server temp directory to project directory */
	move_uploaded_file($_FILES['fileUplode']['tmp_name'],"../category/$fileUplode");
	$sql = "insert into category (title,fileUplode) values ('$txttitle','$fileUplode')";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header("Location:../addcategory.php?msg=Category Added");
?>