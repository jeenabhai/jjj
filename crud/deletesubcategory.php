<?php 
	require_once("config.php");
	extract($_REQUEST);
	$sql = "DELETE FROM subcategory where id=$id";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header("location:subcategory.php?msg=Category Deleted");
?>