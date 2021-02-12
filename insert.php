<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$email = $_POST["email"];
$mother = $_POST["mother"];
$father = $_POST["father"];
$dob = $_POST["dob"];
$address = $_POST["address"];
$pin = $_POST["pin"];
$fb = $_POST["fb"];
$insta = $_POST["insta"];
$linkedin = $_POST["linkedin"];
$twitter = $_POST["twitter"];
$pwd = $_POST["pwd"];
//$pwd=md5($pwd);

if($mysqli->query("INSERT INTO users (fname, lname, age, email, mother, father, Address, pin, fb, insta, linkedin, twitter, password) VALUES('$fname', '$lname', '$age', '$email', '$mother' , '$father' , '$address' , '$pin' , '$fb' , '$insta' , '$linkedin', '$twitter', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
