<!DOCTYPE html>
<html>


<form action="memberFormTest.php" method="post" autocomplete="on">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname" autocomplete="on" placeholder="First name" required>
    <br>
    Last name:<br>
    <input type="text" name="lastname" autocomplete="on" placeholder="Last name" required>
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br>
    Email:<br>
    <input type="email" name="email" autocomplete="on" placeholder="john.doe@example.com" required>
    <br>
    Birthday:<br>
    <input type="date" name="bday">
    <br>
    Telephone:<br>
    <input type="tel" name="tel" autocomplete="on">
    
    <br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </fieldset>
</form>






</html>