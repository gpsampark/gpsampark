<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		include './links.php';
	?>
</head>
<body>
	<nav class="navbar navbar-inverse">
		 <div class="container-fluid">
		 	<div class="navbar-header">
		 		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 		</button>
		 		<a class="nabar-brand" href="#"><img src="../img/gpslogo.png"></a>
		 	</div>
		 	<div class="collapse navbar-collapse" id="myNavbar">
		 		<ul class="nav navbar-nav navbar-right">
		 			<li class="active"><a href="index.php">Home</a></li>
		 			<li><a href="adduser.php">Add User</a></li>
		 			<li><a href="viewuser.php">View User</a></li>
		 			<li><a href="assignpassword.php">Password Permission</a></li>
		 			<li><a href="#">Update Data</a></li>
		 			<li><a href="#">View Report</a></li>
		 			<li class="dropdown">
		 				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 15px"><b>Hello
		 					</b>
		 					<span class="caret"></span>
		 				</a>
		 				<ul class="dropdown-menu" style="background-color: transparent;">
		 					<li><a href="#" style="font-size: 15px"><b>Edit Profile</b></a></li>
		 					<li><a href="#" style="font-size: 15px"><b>Change Password</b></a></li>
		 					<li><a href="../index.php" style="font-size: 15px"><span class="glyphicon glyphicon-log-out"></span><b>Logout</b></a></li>
		 				</ul>
		 			</li>
		 		</ul>
		 	</div>
		 </div>
	</nav>
</body>
</html>