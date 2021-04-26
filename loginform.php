<?php
require_once ("registerlogin.php");
//login();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/newtoc.css">
</head>
<body>
<?php include("components/header.php"); ?>
<main>
<h2> Please Login to your account </h2> 
<p>Use the user name and password you create before or go back to <a href="newuserform.php">the register page</a></p>
<form action="" method="POST">  
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <input type="submit" value="Submit">
		<input type="hidden" value="login" id="formtype" name="formtype">
</form>
</main>
<?php
include("components/footer.php");
?>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
