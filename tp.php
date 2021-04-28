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
	<title>For Guys</title>
	
</head>
<body>
  <!------>

  <?php
  include("components/header.php");
  ?>
			<div class="wc">
		<h1>Wellcome to TP Fruits Market</h1>
	</div>
  <!------>
		 <div class="row">
		 <!---left---->
			  <div class="leftcolumn">
				<div class="card">
				<div class="font">
				  <h1>Order our deliciously fresh Tropical Fruit Boxes and have them delivered right to your doorstep. Enjoy Free Shipping and our Freshness Guarantee.</h2>
				  <h5>*One of the most common questions we get is about if we can ship to your location. The answer is simple, if you are in the lower 48 and UPS can deliver to your house, you can get your Tropical Fruit Box no problem</h5>
				  </div>
				  <br>
				  <!----->

					<div class="slideshow-container">

								<div class="mySlides fade">
									  <div class="numbertext">1 / 3</div>
										  <img src="images/pixabaybg.jpeg" style="max-width:100%; height:auto">
										  <div class="text">Thinh's Shop</div>
								</div>

								<div class="mySlides fade">
								  <div class="numbertext">2 / 3</div>
								  <img src="images/pixabaybg1.jpeg" style="max-width:100%; height:auto">
								  <div class="text">Thinh's Shop</div>
								</div>

							

					</div>
								<br>

									<div style="text-align:center">
									  <span class="dot"></span> 
									  <span class="dot"></span> 
									  <span class="dot"></span> 
									</div>
				</div><!--end card-->
							<div class= "bk1">
									<div class="gallery">
									  <a target="_blank" href="img_5terre.jpeg">
										<img src="images/engin.jpeg" alt="Cinque Terre" >
									  </a>
									  <div class="desc">$67</div>
									</div>

									<div class="gallery">
									  <a target="_blank" href="img_forest.jpeg">
										<img src="images/kob.jpeg" alt="Forest" >
									  </a>
									  <div class="desc">$55</div>
									</div>

									<div class="gallery">
									  <a target="_blank" href="img_lights.jpeg">
										<img src="images/sunse.jpeg" alt="Northern Lights" >
									  </a>
									  <div class="desc">$45</div>
									</div>

									<div class="gallery">
									  <a target="_blank" href="img_mountains.jpeg">
										<img src="images/sana.jpeg" alt="Mountains">
									  </a>
									  <div class="desc">$77</div>
									</div>
									<div class="gallery">
									  <a target="_blank" href="img_5terre.jpeg">
										<img src="images/bruno.jpeg" alt="Cinque Terre" >
									  </a>
									  <div class="desc">$45</div>
									  </div>
									  <div class="gallery">
									  <a target="_blank" href="2099129_M.jpeg">
										<img src="images/pixabay.jpeg" alt="Cinque Terre">
									  </a>
									  <div class="desc">$23</div>
									  </div>
									  <div class="gallery">
									  <a target="_blank" href="img_5terre.jpeg">
										<img src="images/pixabay1.jpeg" alt="Cinque Terre" >
									  </a>
									  <div class="desc">$76</div>
									  </div>
									  <div class="gallery">
									  <a target="_blank" href="img_5terre.jpeg">
										<img src="images/laker.jpeg" alt="Cinque Terre">
									  </a>
									  <div class="desc">$88</div>
									  </div>
									  <div class="gallery">
									  <a target="_blank" href="img_5terre.jpeg">
										<img src="images/jill.jpeg" alt="Cinque Terre" >
									  </a>
									  <div class="desc">$55</div>
									  </div>
									 

							</div> 
							
								
					
				<!------>
				
			 </div><!--endleft-->
		  <!----right--->
			<div class="rightcolumn">
				<div class="card">
					  <h2>Here are the Fruit Boxes our Tropifruiters absolutely love. As always, they have Free Shipping and our trusted Freshness Guarantee. Shop On!</h2>
					  <img src="images/pango.jpeg" style ="height:400px"></img>
					  <p>Subscribe & Save...!!</p>
				</div>
				<div class="card">
					  <h3>FREE SHIPPING! FRESHNESS GUARANTEED</h3>
					  <img src="images/rodion.jpeg" style ="max-width:100%;">
				</div>
				<div class="card">
						  <h3>Follow Us</h3>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-pinterest"></a>
					<a href="#" class="fa fa-snapchat-ghost"></a>
					<a href="#" class="fa fa-skype"></a>
					<a href="#" class="fa fa-android"></a>   
				</div>
			</div><!--endright-->
		</div><!--endrow-->
		<br><br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<?php
include("components/footer.php");
?>
</body>
</html>