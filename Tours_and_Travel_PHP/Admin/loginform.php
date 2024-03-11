<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href="style.css" rel="stylesheet" type="text/css" />	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<style>  
			div {  
			width: auto;     
			}  
			  
			
			/* parallax */
			body, html {
			height: 95%;
			width: 100%;
			}
			.parallax {
			/* The image used */
			background-image: url('travel2.jpg');
			position:relative;
			opacity: 0.99;
			
			/* Full height */
			height: 100%; 
			
			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			}
			.caption{
			max-width: 100%;  
			height: 700px;
			}
			/* /parallax */
			
		</style>  
	</head>
	<body>
		<?php include('function.php'); ?>
		<?php include('top.php'); ?>
		
		
		<div class="parallax">
			<div id="section-1" class="section">
				<div id="top" class="callbacks_container align-center">
					
					<?php
						$_SESSION['loginstatus']="";
						if(isset($_POST["sbmt"]))
						{
							$cn=makeconnection();
							$s="select * from users where Username='" . $_POST["t1"] . "' and Pwd='" . $_POST["t2"] ."'";
							
							$q=mysqli_query($cn,$s);
							$r=mysqli_num_rows($q);
							$data=mysqli_fetch_array($q);
							mysqli_close($cn);
							if($r>0)
							{
								$_SESSION["Username"]= $_POST["t1"];
								$_SESSION["usertype"]=$data[2];
								$_SESSION['loginstatus']="loggedin";
								header("location:index.php");
							}
							else
							{
								echo "<script>alert('Invalid User Name or Password');</script>";
							}
						}
					?>
					<?php include('topforlogin.php'); ?>
					<!--/sticky-->
					<div class="mt-5">
						
						
						<div class="container p-5 text-center">
							<form method="post">
								
								<div class="form-group row pt-4">
									<label for="" class="col-form-label font-weight-bold">Username:</label>
									<div class="col-sm-8 mx-5">
										<input type="text" class="form-control form-check-input text" name="t1" required pattern="[a-zA-z1-9_]{1,50}" title="Please Enter Only Characters between 1 to 50 for User Name" />
									</div>
								</div>
								
								<div class="form-group row pt-4">
									<label for="" class="col-form-label font-weight-bold">Password:</label>
									<div class="col-sm-8 mx-5">
										<input type="password" class="form-control form-check-input text" name="t2" required pattern="[a-zA-z0-9]{1,10}" title="Please Enter Only Characters between 1 to 10 for Password" />
									</div>
								</div>
								
								<div class="form-group row pt-4">
									<label for="" class="col-form-label col-sm-7"></label>
									
									<button type="submit" value="LOGIN" class="btn btn-dark col-sm-2 text-light" name="sbmt">LOGIN</button>
									
								</div>
								
							</form>
							
						</div>
						
					</div>
					
					
				</div>
				</div>
				</div>
				<?php include('bottom.php'); ?>
			</body>
		</html>		