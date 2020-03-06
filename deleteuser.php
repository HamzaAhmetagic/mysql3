<?php
$id = $_GET["id"];
require_once("connection.php");
$sql = "DELETE FROM users WHERE id=$id";
$query = mysqli_query($con,$sql);
header("Location: users.php");
?>