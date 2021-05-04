
<?php include 'components/header.php' ?>
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
</div>

  
<?php include 'components/footer.php' ?>