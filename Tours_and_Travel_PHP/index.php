	<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar(), 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } 
		</script> -->
		<!--js--> 
		<!-- <script src="js/jquery.min.js"></script> -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
		
		
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<style>
			.carousel-inner img {
			width:100%;
			height: 100%;
			}
			.nav-bg{
			background-color:white;
			}
		</style>
		<script>
					$(document).ready(function() {
					$('#enquiryform').submit(function(e) {
						e.preventDefault(); // Prevent form submission

						// Serialize form data
						var formData = $(this).serialize();

						// Send Ajax request
						$.ajax({
							url: 'sbmt_contactus.php', 
							type: 'POST',
							data: formData,
							success: function(response) {
								// Handle successful submission
								//alert(response); // Show response from PHP script
								alert("Record Save");
							},
							error: function(xhr, status, error) {
								// Handle error
								console.error(xhr.responseText);
							}
						});
					});
				});

			
		</script>
	</head>
				
	<body class="">
		<!-- header -->
		<!-- sticky -->
		<?php include('function.php'); ?>
		<?php include('top.php'); ?>
		<!-- /sticky -->
		<?php include('slider.php'); ?> 
		
		
		<!-- About -->
		<div class="container">
			<div class="about section" id="section-2">
				<div class="about-head text-center">
					<h3 class="text-secondary lead font-weight-bold">About Us</h3>
				</div>
				<hr>
				
				<div class="row p-md-4 m-md-4">
					
					<div class="col-md-4 bg-light p-md-4">
						<h3>Our Vision</h3>
						<p>we seek to enhance the corporate management tools to improve the service while reducing your travel costs. We manage almost every type of travel needs, from simplest to the complex, and create an unparalleled experience that our customers could rely on. We aim to maintain our vision of high class travel services at reasonable prices through consistent leadership, controlled growth and excellent commitment.As a travel company, we exist to bring people together. When people come together, they create opportunities for shared experience, dialogue and growth.  We help our clients travel smart and achieve more.</p>
					</div>
					<div class="col-md-4 bg-light p-md-4">
						<h3>Our Mission</h3>
						<p>We are seeking excellence in service and will provide quality service at a cost that will enable us to remain competitive. We are expanding our relations with airlines, charter flight operators, hotels, tour operators and travel agents all over the world. We seeks to manage the travel requirements and add value to your travel spend. We tend to focus on the customers’ requirements to come up with effective strategies for meeting their demands in an efficient manner. Our mission is to offer corporate travel solutions and become the biggest travel agency in the Middle East.</p>
					</div>
					<div class="col-md-4 bg-light p-md-4">
						<h3>Safety Information</h3>
						<p>We give travelers innovative tools that keep them safe and productive, and help them make good choices on the road.
							<br>
						In the wake of COVID-19, cleanliness and sanitation are now inextricably linked with traveler safety. Our company have a network of local guides who can respond quickly to the needs of the group and individual travelers.</p>
					</div>
				</div>
				</div>
			</div>
			<!--/About-->
			
			
			<!--top-tours-->
			<div class="container">
				<div  class="section" id="section-3">
					<div id="portfolio" class="portfolio">
						<div class="top-tours-head text-center">
							<h3 class="text-secondary lead font-weight-bold">Gallery</h3>		 
						</div>
						<div id="demo" class="carousel slide" data-ride="carousel">
							
							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
								<li data-target="#demo" data-slide-to="3"></li>
								<li data-target="#demo" data-slide-to="4"></li>
								<li data-target="#demo" data-slide-to="5"></li>
								<li data-target="#demo" data-slide-to="6"></li>
								<li data-target="#demo" data-slide-to="7"></li>
							</ul>
							
							<!-- The slideshow -->
							<div style=".carousel-inner;  text-shadow: 2px 2px black;">
								<div class="carousel-item active">
									<img src="images/crousal/kashmir.jpg" class="img-responsive" alt="toronto" style="width:100%">
									<div class="carousel-caption">
										<h2>Kashmir valley</h2>
										<p class="lead">There are some cities that you go to that bring something out of you. Kashmir is one of them.</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/greece.jpg" class="img-responsive" alt="greece" style="width:100%;">
									<div class="carousel-caption">
										<h2>Greece</h2>
										<p class="lead">Since we cannot change reality, let us change the eyes which see reality.</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/italy.jpg" class="img-responsive" alt="italy" style="width:100%;">
									<div class="carousel-caption">
										<h2>Italy</h2>
										<p class="lead">Italy, and the spring and first love all together should suffice to make the gloomiest person happy.</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/spain.jpg" class="img-responsive" alt="spain" style="width:100%;">
									<div class="carousel-caption">
										<h2 >Spain</h2>
										<p class="lead">Spain- a great whale stranded on the shores of Europe.</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/switzerland.jpg" class="img-responsive" alt="switzerland" style="width:100%;">
									<div class="carousel-caption">
										<h2>Switzerland</h2>
										<p class="lead">The heaven on Earth.</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/paris.jpg" class="img-responsive" alt="paris" style="width:100%;">
									<div class="carousel-caption">
										<h2>Paris</h2>
										<p class="lead">Paris exists to remind you that all your dreams are real.</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/maldives.jpg" class="img-responsive" alt="maldives" style="width:100%;">
									<div class="carousel-caption">
										<h2>Maldives</h2>
										<p class="lead">Welcome to paradise.</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/moscow.jpg" class="img-responsive" alt="moscow" style="width:100%;">
									<div class="carousel-caption">
										<h2>Moscow</h2>
										<p class="lead">Thank you. Moscow!</p>
									</div>
								</div>
								
								<div class="carousel-item">
									<img src="images/crousal/bali.jpg" class="img-responsive" alt="bali" style="width:100%;">
									<div class="carousel-caption">
										<h2>Bali</h2>
										<p class="lead">Life, religion, and art all converge in Bali. </p>
									</div>
								</div>
							</div>
							
							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>
				</div>
				
				<!--/top-tours-->
				
				<div id="section-5" class="contact section container">
					<div class="contact-head text-center">
						<h3 class="text-secondary lead font-weight-bold">Contact Us</h3>
					</div><hr>
					<h4>
						If you have any questions please do not hesitate to contact us directly. Our team will come back to you within
						a matter of hours to help you.
					</h4>
					<br>
					<br>
					
					<?php
						if(FALSE)
						{
							$cn=makeconnection();
							$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
							mysqli_query($cn,$s);
							mysqli_close($cn);
							echo "<script>alert('Record Save');</script>";
						}
					?>
					<form id="enquiryform" method="post">
						
						<div class="form-group row pt-4">
							<label for="" class="col-sm-3 col-form-label">
								Name:
							</label>
							<div class="col-sm-8">
								<input type="text" class="form-control form-check-input text" value="Enter your name" name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-Z1 _]{1,50}" title="Please enter only characters and numbers between 1 to 50 for name">
							</div>
						</div>
						
						<div class="form-group row pt-4">
							<label for="" class="col-sm-3 col-form-label">
								Contact no.:
							</label>
							<div class="col-sm-8">
								<input type="text" class="form-control form-check-input text" value="Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact No';}" required pattern="[0-9]{10,12}" title="Please enter only numbers between 10 to 12 for contact no">
							</div>
						</div>
						
						<div class="form-group row pt-4">
							<label for="" class="col-sm-3 col-form-label">
								Email:
							</label>
							<div class="col-sm-8">
								<input type="text" class="form-control form-check-input text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if(this.value == '') {this.value = 'Your mail';}" required>
							</div>
						</div>
						
						<div class="form-group row pt-4">
							<label for="" class="col-sm-3 col-form-label">
								Message:
							</label>
							<div class="col-sm-8">
								<textarea class="form-control form-check-input" onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required>
								</textarea>
							</div>
						</div>
						<br><br><br><br><br><br><br>
						<label class="col-sm-3"></label>
						<button type="submit" class="btn btn-dark col-sm-8 text-light" name="sbmt">send message</button>
						<div class="clearfix"></div>
					</div>
				</div>
			</form><hr>
			<div class="clearfix"></div>
			
			<?php include('bottom.php'); ?>
		</body>
	</html>