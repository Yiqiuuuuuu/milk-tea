<?php

$email=$_POST['email'];
$password=$_POST['password'];

//test
if ($email=="aaa@example.com" && $password=="aaa") {
	header("Location:members.php");
	exit();
}else{
	header("Location:login.php?error=1");
	exit();
	}






?>