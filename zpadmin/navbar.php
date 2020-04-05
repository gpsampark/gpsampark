<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		include './links.php';
	?>
</head>
<body>
	<?php
		include ('../config.php');
	?>
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
		 			<li><a href="assignpassword.php">Password Permission</a></li>
		 			<li class="dropdown">
		 				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 15px">Add
		 					<span class="caret"></span>
		 				</a>
		 				<ul class="dropdown-menu" style="background-color: transparent;">
		 					<li><a href="adduser.php" style="font-size: 15px;color: black;"><b>Add User</b></a></li>
		 					<li><a href="addtaluk.php" style="font-size: 15px;color: black;"><b>Taluk</b></a></li>
		 					<li><a href="addvillage.php" style="font-size: 15px;color: black;"><b>Village</b></a></li>
		 					<!-- <li><a href="addproject.php" style="font-size: 15px;color: black;"><b>Project</b></a></li> -->
		 				</ul>
		 			</li>
		 			<li class="dropdown">
		 				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 15px">View
		 					<span class="caret"></span>
		 				</a>
		 				<ul class="dropdown-menu" style="background-color: transparent;">
		 					<li><a href="viewuser.php" style="font-size: 15px;color: black;"><b>Users</b></a></li>
		 					<li><a href="viewtaluk.php" style="font-size: 15px;color: black;"><b>Taluk</b></a></li>
		 					<li><a href="viewvillage.php" style="font-size: 15px;color: black;"><b>Village</b></a></li>
		 					<li><a href="viewprojects.php" style="font-size: 15px;color: black;"><b>Project</b></a></li>
		 					<li><a href="viewreport.php" style="font-size: 15px;color: black;"><b>Monthly report</b></a></li>
		 				</ul>
		 			</li>
		 			<li class="dropdown">
		 				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 15px"><b>Hello <?php echo $username; ?>
		 					</b>
		 					<span class="caret"></span>
		 				</a>
		 				<ul class="dropdown-menu" style="background-color: transparent;">
		 					<li><a href="editprofile.php" style="font-size: 15px;color: black;"><b>Edit Profile</b></a></li>
		 					<li><a href="changepassword.php" style="font-size: 15px;color: black;"><b>Change Password</b></a></li>
		 					<li><a href="logout.php" style="font-size: 15px;color: black;"><span class="glyphicon glyphicon-log-out"></span><b>Logout</b></a></li>
		 				</ul>
		 			</li>
		 		</ul>
		 	</div>
		 </div>
	</nav>
</body>
</html>