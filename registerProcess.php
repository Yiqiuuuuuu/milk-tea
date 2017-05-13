<?php
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
  echo "Connected to database milkteadata successfully<br>";


 //prepare statement
 $stmt=$conn->prepare("INSERT INTO members (mem_fn, mem_ln, mem_email, mem_pw, mem_points) VALUES(?,?,?,?,?)");
 $stmt->bind_param("ssssi", $firstname, $lastname, $email, $pw, $points);
 
 $firstname=$_POST["firstname"];
 $lastname=$_POST["lastname"];
 $email=$_POST["email"];
 $pw=$_POST["password"];
 $points=0;
 $stmt->execute();

 $conn->close();
 
 //test
   echo "Registed successfully<br>";
   
 //header("Location:members.php");
?>