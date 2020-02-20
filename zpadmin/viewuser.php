<!DOCTYPE html>
<html>
<head>
  <title>iNFOsHARE</title>
</head>
	<body>
		<?php
			include 'navbar.php';
		?>
		<div class="container-fluid" style="background-color: #abcdab">
			<div class="container" style="border:solid thin black;border-radius: 10px;">
				<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 0 #444; color: white"><b>User Details</b></h2><br>
				<!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
				<div class="table-responsive w3-animate-zoom">
					<table class="table table-striped" style="color: black; font-weight: bold;">
						<thead>
							<tr>
								<th  style="color: #FF69B4;"><b>ID</b></th>
								<th style="color: #FF69B4;"><b>Ptype</b></th>
								<th style="color: #FF69B4;"><b>Pcode</b></th>
								<th style="color: #FF69B4;"><b>Designation</b></th>
								<th  style="color: #FF69B4;"><b>Name</b></th>
								<th  style="color: #FF69B4;"><b>Gender</b></th>
								<th  style="color: #FF69B4;"><b>Email</b></th>
								<th  style="color: #FF69B4;"><b>Phone</b></th>
								<th  style="color: #FF69B4;"><b>Address</b></th>
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

								$sql="select * from admin";
								$result=mysqli_query($conn, $sql);
								if ($result-> num_rows >0) {
									while ($row= $result-> fetch_assoc()) {
										if ($row["privilege"]==1) {
											$ptype="GP";
										}
										elseif ($row["privilege"]==2) {
											$ptype="TP";
										}
										else{
											$ptype="ZP";
										}
										echo "<tr style='background-color:transparent;'><td>".$row["id"]."</td><td>".$ptype."</td><td>".$row["pcode"]."</td><td>".$row["desig"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td></tr>";
									}
									echo "</table>";
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
