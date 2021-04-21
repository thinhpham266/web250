<?php

require_once ("register.php");
register();
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/newtoc.css">

</head>
<body>
<div id ="logo">
  <img src = "images/logo.png"></div>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  

</div>
<h1> Register a new account </h1>
<p> Please put in your user name and password here. The system will create your account for you. If you already have an account, <a href="loginform.php">Login here</a></p>
<!--add a fiel for nickname later-->
<form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <input type="submit" value="Submit">
		<input type="hidden" value="createuser" id="createuser" name="formtype">
</form>
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
<footer>
				Designed by Thinh Pham &copy; 2021 
				<br>
				The images do not belong to me. I use them for my project purpose
				<br>
					<a href="http://students.cpcc.edu/~tpham019" target="_blank">Webspace</a> &#9553;
				<a href="https://github.com/thinhpham266" target="_blank">Github</a> &#9553;
				<a href="https://thinhpham266.github.io/">Github Website</a> &#9553;
				<a href="https://www.khanacademy.org/profile/kaid_618721559974171339464542/" target="_blank">Khan Academy</a> &#9553;
				<a href="https://www.codecademy.com/profiles/ThinhPham2606" target="_blank">Codecademy</a> &#9553;
				<a href="https://jsfiddle.net/user/fiddles/all/">JSFiddle </a> &#9553;
				<a href="https://profile.edx.org/u/tpham019" target="_blank">EdX</a>&#9553;
				<a href="https://www.linkedin.com/in/thinh-pham-71b925192/" target="_blank">LinkedIn</a>&#9553;
				<a href="https://www.freecodecamp.org/tpham019" target="_blank">FreeCodeCamp</a>&#9553;
				<br>
				<br>
			   <a href="http://validator.w3.org/check?uri=referer">
				<img class = "validation" src="images/validation_button_html5.gif"  alt="Valid HTML 5" 
				height="31" width="88" style="border:0px;" /></a>
			   
			   <a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img  class = "validation" src="images/validation_button_css.gif" alt="Valid CSS!"
				height="31" width="88" style="border:0px;" /></a>
	
</footer>
</body>
</html>
