function myFunction() {
	var divisor_One = document.getElementById('divisor_One').value;
	var divisor_two = document.getElementById('divisor_two').value;
	var divisor_three = document.getElementById('divisor_three').value;
	var first_Word = document.getElementById('first_Word').value;
	var second_Word = document.getElementById('second_Word').value;
	var third_Word = document.getElementById('third_Word').value;
	var wordDefault = document.getElementById('wordDefault').value;
	var countAmount = document.getElementById('countAmount').value;
	var output ="<br><table>" ;
   var firstName = document.getElementById("fname").value;
    var middleName = document.getElementById("mname").value;
	var lastName = document.getElementById("lname").value;
	var fullName = firstName + " " + middleName + " " + lastName;
	if(firstName == '' || lastName== ''){	
	alert("please enter your name");
	}
	document.getElementById("welcome").innerHTML ="Hello " + fullName + ", Welcome to TP Fruits Market" ;
	
	for (var i = 1; i <= countAmount; i++) {
		if((i%divisor_One===0) && (i%divisor_two===0) && (i%divisor_three===0)){
			output += "<tr><td>"+i + ') '+ first_Word+second_Word+third_Word + "</td></tr>"; 
		}
		else if ((i%divisor_One===0) && (i%divisor_two===0)){
			output +="<tr><td>"+ i + ') '+first_Word+second_Word + "</td></tr>"; 
		}	
		else if((i%divisor_One===0) && (i%divisor_three===0)){
			output +="<tr><td>"+ i + ') '+first_Word+third_Word+ "</td></tr>"; 
		}
		else if((i%divisor_two===0) && (i%divisor_three===0)){
			output +="<tr><td>"+ i + ') '+second_Word+third_Word+ "</td></tr>"; 
		}
		else if((i%divisor_One===0)){
			output += "<tr><td>"+i + ') '+first_Word + "<br>";
		}
		else if((i%divisor_two===0)){
			output += "<tr><td>"+i + ') '+second_Word+ "</td></tr>"; 
		}
		else if((i%divisor_three===0)){
			output += "<tr><td>"+i + ') '+third_Word+ "</td></tr>"; 
		}
		else{
			output += "<tr><td>"+i + ') '+wordDefault+ "</td></tr>"; 
		}
	}
			output+="</table>";
			document.getElementById("fb").innerHTML =output;
}