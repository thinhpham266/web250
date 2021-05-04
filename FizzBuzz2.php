<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/newtoc.css">
</head>
<body>
<?php
include("components/header.php");
?>
<main>
<script src="scripts/fizz2.js"></script>
<h2 id = "welcome">"The most delicious Fruits in Charlotte "</h2>
<div class="f1">
	  <form>
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
		<br>
		<br>
		<label for="mname">Middle Initial</label>
		<input type="text" id="mname" name="mname" placeholder="Your Middle Initial.." required > 
		<br>
		<br>
		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
		<br>
		<br>
		<button type="button" onclick="evenorodd()">Submit</button>
		<p id = "show2"></p>
	  </form>
</div>
</br>
</main>

  
<?php include 'components/footer.php' ?>
</body>
</html>