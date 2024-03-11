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
					<tr><td class="headingText">Packages</td></tr>
					<tr><td class="paraText" width="900px">
						
						
						
						
						<table cellpadding="0" cellspacing="0" width="900px">
							
							
							<?php
								$s="select * from package where package.subcategory='" . $_GET["subcatid"] ."'";
								$result=mysqli_query($cn,$s);
								$r=mysqli_num_rows($result);
								//echo $r;
								$n=0;
								while($data=mysqli_fetch_array($result))
								{
									
									if($n%3==0)
									{
									?>
									
									
									
									<tr>
										<?php
											
										}?>
										<td>
											
											<table border="0" width="100px">
												
												<tr><td align="center" style="background-color:#60B0E6; font-size:20px; font-family:Lucida Calligraphy; color:#FFF"><?php echo $data[1]; ?></td></tr>
												<tr><td class="image"><img src="Admin/packimages/<?php echo $data[5];?>" width="250px" height="250px" /></td></tr>
												<tr><td align="center" style="background-color:#60B0E6; font-size:20px; font-family:Lucida Calligraphy; color:#09F"><a href="detail.php?pid=<?php echo $data[0];   ?>"><font color="#FFFFFF">View Detail</font></a></td></tr>
											</table>
										</td>
										<?php
											
											if($n%3==2)
											{
											?>
										</tr>
										
										<?php
										}
										$n=$n+1;
								}
								mysqli_close($cn);
							?>
							
						</table>
						
						
						
						
					</td></tr></table>
					
			</div>
			
		</div>
		
		<div style="clear:both"></div>
		
		<?php include('bottom.php'); ?>
	</body>
</html>
