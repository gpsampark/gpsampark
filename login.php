<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gram Sampark | Login</title>
</head>
<body class="bg">
	<?php include 'navbar.php'; ?>

	<div class="content w3-animate-top " style="padding-top: 2%">
		<div class="w3-card-4" style="padding-top: 8%;border:solid thin black;border-radius: 10px;border-color: green;box-shadow: 1px 1px 90px #fff;">
			<div class="w3-container" align="center">
		    	<h2><b style="color: #ffffff">LOGIN</b></h2><br><br>
		  	</div>

		  	<form action="logincheck.php" method="POST">
		 		<div class="input-group" style="padding-left: 25px;padding-right: 25px">
		    		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    		<input  type="text" class="form-control input-lg" name="username" placeholder="Username" id="username" required="" style="background-color: transparent; color: white" <?php if (isset($_get['error'])) {
		                 $username=$_POST['error'];
		                 echo "value='".$username."'";
		            } ?> />
		  		</div><br><br><br>
				<div>
					<?php if (isset($_POST['error'])) {
						echo "<label class='error'>Wrong username/password</label>";
					}
		  			?>
				</div>

		  		<div class="input-group" style="padding-left: 25px;padding-right: 25px">
		    		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		    		<input id="password" type="password" class="form-control input-lg" name="password"  placeholder="Password" required="" style="background-color: transparent; color: white">
		  		</div><br><br><br>
		  		<div align="center">
		    		<button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button><br><br><br>
		  		</div>
			</form> 

		</div>
	</div>
	<?php include 'footer.php'; ?>	
</body>
</html>