<!DOCTYPE html>
<html>


<form action="registerProcess.php" method="post" autocomplete="on">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname" autocomplete="on" placeholder="First name" required>
    <br>
    Last name:<br>
    <input type="text" name="lastname" autocomplete="on" placeholder="Last name" required>
    <br>
    Email:<br>
    <input type="email" name="email" autocomplete="on" placeholder="john@example.com" required>
    <br>
    Password:<br>
    <input type="password" name="password" required>
    <br><br>
    
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </fieldset>
</form>






</html>