function evenorodd() {
    var firstName = document.getElementById("fname").value;
    var middleName = document.getElementById("mname").value;
	var lastName = document.getElementById("lname").value;
	var fullName = firstName + " " + middleName + " " + lastName;
	if(firstName == '' || lastName== ''){	
	alert("please enter your name");
	}
	document.getElementById("welcome").innerHTML ="Hello " + fullName + ", Welcome to TP Fruits Market" ;
	var userInput = prompt('How high do you want to count, '+firstName);
	if(isNaN(userInput))
	{
		alert('Please enter number');
		return false;
	}
	else{
		var shownumber = '';
		for(var i=1;i<=userInput;i++)
		{
			if(i%2 === 0)
				shownumber += i+ "<br>" + " The number is even" + "<br>";
			else
				shownumber += i+ "<br>" + " The number is odd" + "<br>";
		}
	}
	document.getElementById('show2').innerHTML = shownumber;

}