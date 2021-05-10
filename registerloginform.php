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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">

</head>
<body>
<?php include("components/header.php"); ?>
<main>
<h1>Thinh Fruits Market application page: </h1>
    <p><a href="registerloginform.php?formtype=register">Create User</a> <a href="registerloginform.php?formtype=login">Login</a> <a href="tp.php">Go to my project</a><a href="database.php">View DB</a></p>

<?php
 $formtype = $_GET['formtype'];
 if($formtype == "register") //if it new user
 {
    echo'<h2> Register a new account </h2>';
    echo'<p> Please put in your user name and password here. The system will create your account for you. If you already have an account, <a href="loginform.php">Login here</a></p>';
 }
 else //if loging in
{
    echo '<h2> Please Login to your account </h2>';
}
?>
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
<!--add a fiel for nickname later-->
<div class="bg-img">
<form action="" method="POST" class="container">
        <label for="fullname">fullname:</label><br>
        <input type="text" id="fullname" name="fullname"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <input type="submit" value="Submit">
    	<input type="hidden" value="<?php echo $formtype; ?>" id="formtype" name="formtype">
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
