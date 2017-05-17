<!DOCTYPE>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "sarahwang5811666";
$dbname = "milkteadata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//test
echo "Connected to database milkteadata successfully<br>";

//create table
$sql="CREATE TABLE members(
      member_id int primary key,
      member_fn varchar(225),
      member_ln varchar(225),
      member_email varchar(225),
      member_pw varchar(225),
      member_points int)";
if($conn->query($sql)===TRUE) {
	echo "Table created sucessfully!";
}else {
	echo"Error".$conn->error;
}


//prepare statement
$stmt=$conn->prepare("INSERT INTO members (member_id,member_fn,member_ln,member_email, member_pw, member_points) VALUES(?,?,?,?,?,?)");
$stmt->bind_param("issssi", $member_id,$member_fn, $member_ln, $member_email, $member_pw, $member_points);

for($x=1;$x<21;$x++) {
	
	$member_id=$x;
	$member_fn="fn".(string)$x;
	$member_ln="ln".(string)$x;
	$member_email="fn".(string)$x."@example.com";
	$member_pw="fn".(string)$x;
	$member_points=0;
	$stmt->execute();
}

$conn->close();

?>

<!-- DONT forget to "DROP TABLE members".  -->

</body>
</html>


<!-- 

mysql> select * from members;
+-----------+-----------+-----------+------------------+-----------+---------------+
| member_id | member_fn | member_ln | member_email     | member_pw | member_points |
+-----------+-----------+-----------+------------------+-----------+---------------+
|         1 | fn1       | ln1       | fn1@example.com  | fn1       |             0 |
|         2 | fn2       | ln2       | fn2@example.com  | fn2       |             0 |
|         3 | fn3       | ln3       | fn3@example.com  | fn3       |             0 |
|         4 | fn4       | ln4       | fn4@example.com  | fn4       |             0 |
|         5 | fn5       | ln5       | fn5@example.com  | fn5       |             0 |
|         6 | fn6       | ln6       | fn6@example.com  | fn6       |             0 |
|         7 | fn7       | ln7       | fn7@example.com  | fn7       |             0 |
|         8 | fn8       | ln8       | fn8@example.com  | fn8       |             0 |
|         9 | fn9       | ln9       | fn9@example.com  | fn9       |             0 |
|        10 | fn10      | ln10      | fn10@example.com | fn10      |             0 |
|        11 | fn11      | ln11      | fn11@example.com | fn11      |             0 |
|        12 | fn12      | ln12      | fn12@example.com | fn12      |             0 |
|        13 | fn13      | ln13      | fn13@example.com | fn13      |             0 |
|        14 | fn14      | ln14      | fn14@example.com | fn14      |             0 |
|        15 | fn15      | ln15      | fn15@example.com | fn15      |             0 |
|        16 | fn16      | ln16      | fn16@example.com | fn16      |             0 |
|        17 | fn17      | ln17      | fn17@example.com | fn17      |             0 |
|        18 | fn18      | ln18      | fn18@example.com | fn18      |             0 |
|        19 | fn19      | ln19      | fn19@example.com | fn19      |             0 |
|        20 | fn20      | ln20      | fn20@example.com | fn20      |             0 |
+-----------+-----------+-----------+------------------+-----------+---------------+

 -->
