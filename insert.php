<?php
	include "connection.php";
	$sql = "INSERT INTO user (id, userName, pwd) VALUES ('" . $_POST['id'] . "', '" . $_POST['userName'] . "', '" . $_POST['pwd'] . "'); ";
	$con->query($sql);
	header("Location:user.php");
?>