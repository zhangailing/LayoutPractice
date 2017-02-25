<?php
$name = $_GET["name"];
$id = $_GET["id"];
$email = $_GET["email"];
$message = $_GET["message"];

$com = mysql_connect('localhost','root','1234');
$sql = "INSERT INTO users (name,id,email,message)";
mysql_close($con);
?>
