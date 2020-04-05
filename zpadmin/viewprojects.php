<!DOCTYPE html>
<html>
<head>
  <title>Gramsampark | View Projects</title>
</head>
	<body class="bg">
		<?php
			include 'navbar.php';
		?>
		<div class="container-fluid">
			<div class="container" style="border:solid thin black;border-radius: 10px;">
				<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 0 #444; color: white"><b>Project List</b></h2><br>
				<div class="table-responsive w3-animate-zoom">
					<table class="table table-striped" style="color: black; font-weight: bold;">
						<thead>
							<tr>
								<th  style="color: #FF69B4;"><b>Serial Number</b></th>
								<th style="color: #FF69B4;"><b>Project Name</b></th>
							</tr>
						</thead>
						<tbody style="background-color: transparent;">
							<?php 
								ini_set('display_errors', 1);
								error_reporting (E_ALL);
								$servername ="localhost";
								$username= "root";
								$password= "password";
								$dbname = "gramsampark";

								$conn = mysqli_connect($servername, $username, $password,$dbname );
								if ($conn->connect_error) {
				    			die("Connection failed: ");
								}

								$sql="select * from project_list order by pid";
								$result=mysqli_query($conn, $sql);
								if ($result-> num_rows >0) {
									while ($row= $result-> fetch_assoc()) {
										echo "<tr style='background-color:transparent;'><td>".$row["slno"]."</td><td>".$row['project_name']."</td></tr>";
									}
								}
								else
								{
									echo "0 result";
								}
								$conn-> close();
							 
							?>
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
