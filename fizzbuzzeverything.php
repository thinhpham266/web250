<!DOCTYPE html>
<html lang =en>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/test.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/tshop.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="scripts/fizzbuzzeverything.js"></script>

	<title>TP Fruits Market</title>
	
</head>
<body>
  <!------>

  <?php
  include("components/header.php");
  ?>
  	<main>
	  <h2 id = "welcome">"Tp Fruits Market"</h2>
		<h2>Fizz Bizz IV</h2>
		<form onsubmit="return false;">
			<table>
			<tr><td><label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Please enter your first name.."></td>
			<td><label for="mname">Middle Initial</label>
			<input type="text" id="mname" name="mname" placeholder="Please Enter Your Middle Initial.." required ></td>
			<td><label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Please Enter Your last name.."></td></tr>
			</table>
			<table>
			<tr><td><p>First Divisor:</p>
			<input  name="divisor_One" id="divisor_One" type="number" placeholder="Enter First Divisor" value="3" required ></td>
			<td><p>Second Divisor:</p> 
			<input type="number" name="divisor_two" id="divisor_two" placeholder="Enter Second Divisor" value="5" required ></td>
			<td><p>Third Divisor:</p>
			<input type="number" name="divisor_three" id="divisor_three" placeholder="Enter Third Divisor" value="7" required ></td></tr>
			</table>
			<table>
			<tr><td><p>First Word:</p>
			<input type="text" name="first_Word" id="first_Word" value="Banana" required ></td>
			<td><p>Second Word:</p>
			<input type="text" name="second_Word" id="second_Word" value="Orange" required ></td>
			<td><p>Third Word:</p>
			<input type="text" name="third_word" id="third_Word" value="Mango" required ></td></tr></table>
			<p>Default word:</p>
			<input type="text" name="wordDefault" id="wordDefault" value="Blueberry">
			<p>How high do you want to count?</p>
			<input type="text" name="countAmount" id="countAmount" value="125">
			<p style="text-align: center;">
			<button type="button" onclick="myFunction()">Please Submit</button>
			</p>
		</form>
		<p id = "fb"> </p>
	</main>
  <?php
include("components/footer.php");
?>
</body>
</html>