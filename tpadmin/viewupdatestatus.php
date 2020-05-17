<!DOCTYPE html>
<html>
<head>
  <title>Gramsampark | View Taluk report</title>
</head>

	<body class="bg">
		<?php
			include 'navbar.php';
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
		?>
		<div class="container-fluid">
			<div class="container" style="border:solid thin black;border-radius: 10px;">
				<form  class="form-horizontal w3-animate-zoom" action="viewupdatestatus.php" method="POST">

					<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 0 #444;text-align: center;"><b>MONTHLY TALUK EXPENDITURE</b></h2><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="month">Month:</label>
						<div class="col-sm-9">
							<select name="month" class="form-control" id="month" required="" style="background-color: transparent;">
								<option disabled selected>Choose Month</option>
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>
						</div>
					</div><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="year">Year:</label>
						<div class="col-sm-9">
							<select name="year" class="form-control" id="year" required="" style="background-color: transparent;">
								<option disabled selected>Choose Year</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
								<option value="2028">2028</option>
								<option value="2029">2029</option>
								<option value="2030">2030</option>
							</select>
						</div>
					</div>
					<div class="form-group">
		                <div class="container" align="center">
		                 	<button type="submit" class="btn btn-info" name="submit">View</button>
		                </div>
		            </div>
					<div class="table-responsive w3-animate-zoom">
			            <?php
			            	if (isset($_POST['submit'])) {
				                $month =($_POST['month']);
				                $year =($_POST['year']);
				                $tp_code;

				                $sql="SELECT * FROM admin where id='".$id."'";
				                $result=mysqli_query($conn,$sql);
				                if ($result->num_rows>0)
				                  while ($row= $result-> fetch_assoc())
				                    $tp_code=$row['pcode'];

				                $sql="SELECT * FROM village_list where tp_code='".$tp_code."' order by village_name";
				                $result=mysqli_query($conn,$sql);
				                $i=1;
				                if ($result->num_rows>0) {
				                	?>
				                  	<table class="table table-bordered" style="color: black; font-weight: bold;text-align: center;">
				                    <thead>
				                      <tr><td colspan="7">Monthly Status of Project expenditure under Mahatma Gandhi National Rural Employment Scheme</td></tr>
				                      <tr><td>SL.No.</td><td>GP_CODE</td><td>Village Name</td><td>Status</td></tr>
				                    </thead>
				                    <tbody>
				                    <?php 
				                    	while ($row= $result-> fetch_assoc()) {
				                    		?>
				                    		<tr><td><?php echo $i;?></td><td><?php echo $row['gp_code']; ?></td><td><?php echo $row['village_name']; ?></td><td>
				                    			<?php
				                    				$sql1="SELECT * FROM expenditure where gp_code='".$row['gp_code']."' and month='".$month."' and year='".$year."' ";
									                $result1=mysqli_query($conn,$sql1);
									                if ($result1->num_rows>0)
									                	echo "Updated";
									                else
									                	echo "Not Updated";
				                    			?>
				                    		</td></tr>
				                    		<?php
				                    		$i+=1;
				                    	}
				                    echo "</tbody></table>";
					            }
			            	}

			            ?>
			        </div>
				</form>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
