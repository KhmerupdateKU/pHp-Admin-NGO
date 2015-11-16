<?php
	include "connection.php";
	$sql = "UPDATE year SET year='" . $_POST['year'] . "' where id='" . $_POST['id'] . "'; ";
	$con->query("SET NAMES 'utf8'");
	$con->query($sql);
	header("Location:subject.php");
?>