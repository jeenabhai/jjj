<?php 
	require_once("../config.php");
	//variable delcration 
	extract($_POST);
	$fileUplode = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['fileUplode']['name'];

	move_uploaded_file($_FILES['fileUplode']['tmp_name'],"../category/$fileUplode");
	$sql = "insert into subcategory (categoryid,title,fileUplode) values ($sltcategoryid,'$txtitle','$fileUplode')";

	mysqli_query($link,$sql) or die(mysqli_error($link));
	//echo"$sql";
	header("location:../subcategory.php?msg=Product Added")
?>