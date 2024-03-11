<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href="stylecss.css" rel='stylesheet' type='text/css'/>	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--js--> 
		<script src="js/jquery.min.js"></script>
		
		<!--/js-->
		
		<body>
			<?php include('function.php'); ?>
			<?php
				if(isset($_POST["sbmt"]))
				{
					$cn=makeconnection();
					$s="insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["r1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."','Pending')";	
					
					
					mysqli_query($cn,$s);
					
					echo "<script>alert('Record Save');</script>";
				}
			?>
			
			<?php include('top.php'); ?>
			<br>
			<br>
			<br>
			<!--/sticky-->
			<div style="height:50px"></div>
			<div style="width:1000px; margin:auto"  >
				
				<div style="width:200px; font-size:18px; color:#09F; float:left">
					
					<table cellpadding="0" cellspacing="0" width="1000px">
						<tr><td style="font-size:18px" color="#09F">Category</td></tr>
						<?php
							
							$s="select * from category";
							$result=mysqli_query($cn,$s);
							$r=mysqli_num_rows($result);
							//echo $r;
							
							while($data=mysqli_fetch_array($result))
							{
								
								echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";
								
							}
						?>
						
					</table>
					
				</div>
				
				<div style="width:800px; float:left">
					<table cellpadding="0px" cellspacing="0" width="1000px">
						<tr><td class="headingText">Enquiry</td></tr>
						<tr><td class="paraText" width="900px">
							<table cellpadding="0" cellspacing="0" width="900px">
								<td>
									
									<table border="0"; width="600px" height="400px" align="center" >
										<?php
											
											$s="select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";
											
											$result=mysqli_query($cn,$s);
											$r=mysqli_num_rows($result);
											//echo $r;
											$n=0;
											$data=mysqli_fetch_array($result);
											mysqli_close($cn);
										?>
										
										<form method="post" enctype="multipart/form-data">
											<tr><td colspan="3" class="middletext">Package Id:&nbsp;&nbsp;&nbsp;<?php echo $data[0];?></td></tr>
											<tr><td colspan="3" class="middletext">Pack Name:&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
											<tr><td class="lefttxt">Name:</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"/></td></tr><br/>
											<tr><td class="lefttxt">Gender:</td><td><input type="radio" name="r1" value="Male" checked="checked" />Male<input type="radio" name="r1"  value="Female"/>Female</td></tr><br/>
											<tr><td class="lefttxt">Mobile No.</td><td><input type="text" name="t2" required pattern="[0-9]{10,12}" title"Please Enter Only numbers between 10 to 12 for Mobile No"/></td></tr><br/>
											<tr><td class="lefttxt">Email:</td><td><input type="email" name="t3" required /></td><td><br/>
												<tr><td class="lefttxt">No.of Days:</td><td><input type="number" name="t4" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No. oF Days"/></td><td><br/>
													<tr><td class="lefttxt">No.of Children:</td><td><input type="number" name="t5" required pattern="[1 _]{1,10}" title"Please Enter Only numbers between 1 to 10 for Children"/></td><td><br/>
														<tr><td class="lefttxt">No.of Adults:</td><td><input type="number" name="t6" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No.Of Adults"/></td><td><br/>
															<tr><td class="lefttxt">Enquiry Message:</td><td><textarea name="t7" required="required"/></textarea></td><td><br/>
																<tr><td>&nbsp;</td><td ><input type="submit" value="Submit" name="sbmt" /></td></tr>
																
															</form></td></tr>
													</table>
													</td>
												</table>
												</td></tr>
											</table>
											
										</div>
										
									</div>
									
									<div style="clear:both"></div>
									
									<?php include('bottom.php'); ?>
								</body>
							</html>
							
												