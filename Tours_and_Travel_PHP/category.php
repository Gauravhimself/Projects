<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href="stylecss.css" rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--js--> 
		<script src="js/jquery.min.js"></script>
		
		<!--/js-->
	</head>
	
	<body>
		<?php include('function.php'); ?>
		<?php include('top.php'); ?>
		<!--/sticky-->
		<br>
		<br>
		<br>
		<div style="height:50px"></div>
		<div style="width:1000px; margin:auto" >
			
			<div style="width:200px; float:left">
				
				<table cellpadding="0" cellspacing="0" width="1000px">
					<tr><td style="font-size:30px; color:#09F"><b>Category</b></td></tr>
					<?php
						
						
						$s="select * from category";
						$result=mysqli_query($cn,$s);
						$r=mysqli_num_rows($result);
						//echo $r;
						
						while($data=mysqli_fetch_array($result))
						{
							
							echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";
							
						}
						mysqli_close($cn);
					?>
					
				</table>
				
			</div>
			
			<div style="width:500px; float:left">
				<table cellpadding="0px" cellspacing="0" width="1000px">
					<tr><td class="headingText">Welcome to Go Travel & Tourism Ltd</td></tr>
					<tr><td class="paraText" width="900px">Go Travel & Tourism is one of best tour planner in middle east, we have team of best travel agents to help you to design domestic and international tour packages as per your requirements our team always taking care that holiday package should be very economical and at a pocket friendly price.
						
						We also provide all kind of hotel accommodation packages at very low-cost cross world, also serve taxi services at cost effective price.
						<br>
						Go Travel & Tourism provide online Travel solutions, having first of its Door Step Services. Our expert travel consultant will help you to plan your journey and to make best out from your tour. We have expertise in International and Domestic tours, we provide Group and Customize packages (Budget & Luxury) we are determined to deliver leisure voyage excursion to customers.<br> We are determined to guide customers in selecting a trips based on pre-defined holiday criteria, we have Tie with Top Class service providing Hotels in India and Abroad.
						We fully realize that success of business depends upon customer satisfaction, At Go Travels & Tourism we have been committed to provide high standard of services and making our commitment true. We provide 24*7 support during your tour, personalized tour assistance.
						At Go Travels & Tourism we are always working towards what we say.
						
						
					</td><td style="background-image:url(); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="500px" height="150px" >< &nbsp;&nbsp;&nbsp; </div	></td></tr></table>
					
				</div>
				
			</div>
			
			<div style="clear:both"></div>
			
			<?php include('bottom.php'); ?>
		</body>
	</html>	