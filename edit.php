<?php
	include "connection.php";
	$sql = "UPDATE user SET username='" . $_POST['username'] . "', password='" . $_POST['password'] . "' where id='" . $_POST['id'] . "'; ";
	$con->query($sql);
	header("Location:user.php");
?>