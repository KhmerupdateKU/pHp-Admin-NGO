<?php
	include "connection.php";
	$sql = "INSERT INTO subject (id, name) VALUES ('" . $_POST['id'] . "','" . $_POST['name'] . "'); ";
	$con->query("SET NAMES 'utf8'");
	$con->query($sql);
	header("Location:subject.php");
?>