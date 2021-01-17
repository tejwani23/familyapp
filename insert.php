<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, age, email, password) VALUES('$fname', '$lname', '$age', '$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
