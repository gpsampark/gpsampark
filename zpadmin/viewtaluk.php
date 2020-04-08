<!DOCTYPE html>
<html>
<head>
  <title>Gramsampark | View Taluk</title>
</head>
	<body>
		<?php
			include 'navbar.php';
		?>
		<div class="container-fluid">
			<div class="container" style="border:solid thin black;border-radius: 10px;">
				<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 0 #444;"><b>Taluk List</b></h2><br>
				<div class="table-responsive w3-animate-zoom">
					<table class="table table-striped" style="color: black; font-weight: bold;">
						<thead>
							<tr>
								<th  style="color: #FF69B4;"><b>Tp_code</b></th>
								<th style="color: #FF69B4;"><b>Taluk Name</b></th>
								<th style="color: #FF69B4;"><b>District Name</b></th>
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

								$sql="select tp_code,taluk_name,district_name from taluk_list,district_list where taluk_list.zp_code=district_list.zp_code";
								$result=mysqli_query($conn, $sql);
								if ($result-> num_rows >0) {
									while ($row= $result-> fetch_assoc()) {
										echo "<tr style='background-color:transparent;'><td>".$row["tp_code"]."</td><td>".$row['taluk_name']."</td><td>".$row["district_name"]."</td></tr>";
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
