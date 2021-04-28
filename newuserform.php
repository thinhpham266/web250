<?php
require_once ("registerlogin.php");
//registerlogin();
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
<h2> Register a new account </h2>
<p> Please put in your user name and password here. The system will create your account for you. If you already have an account, <a href="loginform.php">Login here</a></p>
<!--add a fiel for nickname later-->
<form action="" method="POST">
        <label for="fullname">fullname:</label><br>
        <input type="text" id="fullname" name="fullname"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <input type="submit" value="Submit">
		<input type="hidden" value="createuser" id="formtype" name="formtype">
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
