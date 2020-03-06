<?php 
require_once("connection.php");
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql = "INSERT INTO users VALUES(NULL,'$username','$password','$email')";
mysqli_query($con,$sql);
header('Location: afterRegister.php');