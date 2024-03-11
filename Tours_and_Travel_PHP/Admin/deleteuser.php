<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		
		
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<!--/js-->
	</head>
	<body>
		<!--header-->
		<!--sticky-->
		<?php
			if($_SESSION['loginstatus']=="")
			{
				header("location:loginform.php");
			}
		?>
		
		<?php include('function.php'); ?>
		<?php
			if(isset($_POST["sbmt"]))
			{
				$cn=makeconnection();
				$s="delete from users  where Username='" . $_POST["t1"] . "'";
				mysqli_query($cn,$s);
				mysqli_close($cn);
				echo "<script>alert('Record Delete');</script>";
				if($_SESSION["Username"]==$_POST["t1"]){
					$_SESSION['loginstatus']="";
				}
				
				if($_SESSION['loginstatus']==""){
					header("location:loginform.php");
				}
			}
		?>
		
		
		<?php include('top.php'); ?>
		<!--/sticky-->
		<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
			<div class="row">
				<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
				<?php include('left.php'); ?>
			</div>
			<div class="col-sm-9">
				
				
				
				
				
				<form method="post">
					<table border="0" width="400px" height="200px" align="center" class="tableshadow">
						<tr><td colspan="2" class="toptd">Delete User</td></tr>
						<tr><td class="lefttxt">Select User</td><td><select name="t1" required/><option value="">Select</option>
							
							<?php
								$cn=makeconnection();
								$s="select * from users";
								$result=mysqli_query($cn,$s);
								$r=mysqli_num_rows($result);
								//echo $r;
								
								while($data=mysqli_fetch_array($result))
								{
									
									echo "<option value=$data[0]>$data[0]</option>";
									
								}
								mysqli_close($cn);
								
								
								
							?>
							
						</select>
						
						<?php
							if(isset($_POST["show"]))
							{
								$cn=makeconnection();
								$s="select * from users where Username='" .$_POST["t1"] ."'";
								$result=mysqli_query($cn,$s);
								$r=mysqli_num_rows($result);
								//echo $r;
								
								$data=mysqli_fetch_array($result);
								$Username=$data[0];
								$Pass=$data[1];
								$Usertype=$data[2];
								
								mysqli_close($cn);
								
							}
							
						?>
						
						</td></tr>
						
						<tr><td>&nbsp;</td><td ><input type="submit" value="Delete" name="sbmt" /></td></tr>
					</table>
				</form>
			</div>
			
			
		</div>
		</div>
		<?php include('bottom.php'); ?>
	</body>
</html>

