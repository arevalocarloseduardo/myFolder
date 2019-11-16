<?php

include 'conn.php';

$name = $_POST['Name'];
$password=$_POST['Password'];
$email=$_POST['Email'];

$conn ->query("insert into users(Name,Password,Email) values('".$name."','".$password."','".$email."')");

?>