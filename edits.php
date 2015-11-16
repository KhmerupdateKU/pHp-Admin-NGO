<?php
	include "connection.php";
	$sql = "UPDATE subject SET name='" . $_POST['name'] . "' where id='" . $_POST['id'] . "'; ";
	$con->query("SET NAMES 'utf8'");
	$con->query($sql);
	header("Location:subject.php");
?>