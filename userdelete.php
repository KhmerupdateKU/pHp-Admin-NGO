<?php
	include "connection.php";
	$sql = "delete from user where id='" . $_GET['id'] . "';";
	$con->query($sql);
	header("Location:user.php");
?>