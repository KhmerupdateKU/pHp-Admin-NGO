<?php
	include "connection.php";
	$sql = "delete from subject where id='" . $_GET['id'] . "';";
	$con->query($sql);
	header("Location:subject.php");
?>