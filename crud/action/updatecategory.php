<?php 
	require_once("../config.php");
	extract($_POST);
	if(strlen($_FILES['fileUplode']['name'])>=1)
	{
		$fileUplode = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['fileUplode']['name'];
		/* move uploaded file from server temp directory to project directory */
		move_uploaded_file($_FILES['fileUplode']['tmp_name'],"../category/$fileUplode");
		unlink("../category/$fileUplode");
	}
	else 
	{
		$fileUplode = $oldfileUplode;
	}
	$sql = "update category set title='$txttitle',fileUplode='$fileUplode' where id='$id'";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header("location:../addcategory.php?msg=Category Edited.")
?>