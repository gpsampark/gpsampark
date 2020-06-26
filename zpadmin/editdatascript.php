<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header class="header">
		<?php
			
			ini_set('display_errors', 1);
			error_reporting (E_ALL);
			error_reporting(E_ERROR | E_WARNING | E_PARSE);

			$servername ="localhost";
			$username= "root";
			$password= "password";
			$dbname = "gramsampark";

			$conn = mysqli_connect($servername,$username,$password,$dbname);

			if ($conn->connect_error) {
				die("Connection failed: ");
			}
			if (isset($_POST['submit'])) {
				
			}
		?>
	</header>
</body>
</html>