<?php 
	require_once("config.php");
	extract($_REQUEST);
	$sql = "DELETE FROM category where id=$id";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header("location:addcategory.php?msg=Category Deleted");
?>