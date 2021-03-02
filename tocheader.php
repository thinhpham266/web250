<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  /* Style the header with a grey background and some padding */
  .header {
      overflow: hidden;
      background-color: #f6fafab7;
      padding: 20px 10px;
    }
    
    /* Style the header links */
    .header a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
    }
    
    /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
    .header a.logo {
      font-size: 25px;
      font-weight: bold;
      background-color: rgb(240, 229, 234);
    }
    
    /* Change the background color on mouse-over */
    .header a:hover {
      background-color: #ddd;
      color: black;
    }
    
    /* Style the active/current link*/
    .header a.active {
      background-color: dodgerblue;
      color: white;
    }
    
    /* Float the link section to the right */
    .header-right {
      float: right;
    }
    
    /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }
      .header-right {
        float: none;
      }
    }
    
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


footer{
    text-align: center;
    padding: 15px;
}  
h1{
    font-family:Copperplate Gothic;
	font-size: 4em;
    color: white;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
  text-align: left;
} 
th{
    width:30px;
}
#t1 tr:nth-child(even) {
  background-color: #eee;
}
#t1 tr:nth-child(odd) {
 background-color: #fff;
}
body{
    background-image: url("hn.jpg");
}
    </style>
<body>
<div class="header">
        <a href="#default" class="logo">TP Farmer Market</a>
        <div class="header-right">
          <a class="active" href="#home">Home</a>
          <a href="tropical.php">Tropical Fruits</a>
          <a href="#about">About</a>
        </div>
      </div>  
      <!---->
      <div class="bg-image"></div>
