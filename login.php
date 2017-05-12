<!DOCTYPE html>
<html>

<head>

</head>



<body>

<form action="loginProcess.php" method="post" autocomplete="on">
<fieldset>
    <legend>Login:</legend>

    
    Email:<br>
    <input type="email" name="email" placeholder="john.doe@example.com" required>
    <br>
    
    Password:<br>
    <input type="password" name="password" required>
    <br><br>
    
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    <button>Register</button>
    
        
    <?php
    if(!empty($_GET['error'])){
    	$error=$_GET['error'];
    	if($error==1){
    		echo "<p>Invalid email address! Your first time visit us? Join us! Click Register!</p>";
    	}
    }
    ?>
    
</fieldset>
</form>

</body>


</html>