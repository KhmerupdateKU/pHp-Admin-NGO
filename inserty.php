<?php
	include "connection.php";
	$sql = "INSERT INTO year (id, year) VALUES ('" . $_POST['id'] . "','" . $_POST['year'] . "'); ";
	$con->query("SET NAMES 'utf8'");
	$con->query($sql);
	header("Location:subject.php");
?>