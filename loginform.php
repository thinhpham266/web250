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
<!--form-->
<style>
* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("images/bg1.jpg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  margin: 40px;
  width: 600px;
  height:400px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<main>
<h1> Please Login to your account </h1> 
<p>Use the user name and password you create before or go back to <a href="newuserform.php">the register page</a></p>
<div class="bg-img">

<form action="" method="POST" class="container">  
        <label for="fullname">fullname:</label><br>
        <input type="text" id="fullname" name="fullname"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <input type="submit" value="Submit">
		<input type="hidden" value="login" id="formtype" name="formtype">
</form>
</div>
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
