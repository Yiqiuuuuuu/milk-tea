<?php

$email=$_POST['email'];
echo $email."<br>";
$pw=$_POST['password'];
$email=$_POST['email'];
echo $pw."<br>";

//test
/* if ($email=="aaa@example.com" && $password=="aaa") {
	header("Location:members.php");
	exit();
}else{
	header("Location:login.php?error=1");
	exit();
	} */

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "milkteadata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//test
echo "Connected successfully<br>";

$sqle="SELECT emp_pw FROM employees WHERE emp_email='$email'";
$rese = $conn->query($sqle) or die($conn->error);
//test
//print_r($rese);

$sqlm="SELECT mem_pw FROM members WHERE mem_email='$email'";
$resm=$conn->query($sqlm) or die($conn->error);
//test
//print_r($resm);



if ($rowe=$rese->fetch_assoc()) { //email is found in table-employees
	
 	if($rowe["emp_pw"]==md5($pw)) { //password is correct
		header("Location:members.php");
		exit();
	}else { //password is wrong
		header("Location:login.php?error=2");
		exit();
	}
	
}elseif($rowm=$resm->fetch_assoc()) { //email is found in table-members
	
	if($rowm["mem_pw"]==md5($pw)) { //password is correct
		header("Location:members.php");
		exit();
	}else { //password is wrong
		header("Location:login.php?error=2");
		exit();
	}
	
}else { //invalid email

	header("Location:login.php?error=1");
	exit();
	 
}



$conn->close();

?>
