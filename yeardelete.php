<?php
	include "connection.php";
	$sql = "delete from year where id='" . $_GET['id'] . "';";
	$con->query($sql);
	header("Location:subject.php");
?>