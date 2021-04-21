<?php
require_once("login.php");
login();
?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="POST">
  
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <input type="submit" value="Submit">
</form>


</body>
</html>
