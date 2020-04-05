<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gram Sampark | GP Update Data</title>
</head>
<style type="text/css">
  
label
{
  color: #000000;
  font-weight: bold;
}

h1
{
  color: #000000;
  font-weight: bold;
}
.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}

</style>
<body class="bg">
	<?php include 'navbar.php'; ?>
	<div class="container-fluid">
		<div  class="container" style="width: 70%;background-color: transparent;  color: black; border:solid thin black;border-radius: 10px;">
			<h1 align="center" class="w3-animate-top">Add Expenditure</h1><br>
			<form  class="form-horizontal w3-animate-zoom" action="updatedatascript.php" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2" for="month">Month:</label>
					<div class="col-sm-9">
						<select name="month" class="form-control" id="month" required="" style="background-color: transparent;color: white;">
							<option disabled selected>Choose Month</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="year">Year:</label>
					<div class="col-sm-9">
						<select name="year" class="form-control" id="year" required="" style="background-color: transparent;color: white;">
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
				</div><br>
				<div class="info">
				  <p><strong>Info!</strong> Enter All The Expenditure of selected Month...</p>

				</div>
				<div>
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
						$sql="select * from project_list where visibility=1 order by pid";
						$result=mysqli_query($conn, $sql);
						if ($result-> num_rows >0) {
							while ($row= $result-> fetch_assoc()) {
								echo "<h4 class='well well-sm' style='background-color:transparent;text-shadow:1px 1px 0 #444; color: white'><b>".$row["slno"]." ".$row["project_name"]."</b></h4>";
								?>
								<div class="form-group">
									<label class="control-label col-sm-2" for="rem_processing">Remaining(Cont projects):</label>
									<div class="col-sm-4">
										<input type="Number" name="rem_processing" style="background-color: transparent;color: white;" class="form-control" required="" id="rem_processing" placeholder="Continued projects still Processing">
									</div>
									<label class="control-label col-sm-2" for="cur_processing">Current(New Projects):</label>
									<div class="col-sm-4">
										<input type="Number" name="cur_processing" style="background-color: transparent;color: white;" class="form-control" required="" id="cur_processing" placeholder="Current projects still Processing">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="rem_completed">Remaining(Cont. projects):</label>
									<div class="col-sm-4">
										<input type="Number" name="rem_completed" style="background-color: transparent;color: white;" class="form-control" required="" id="rem_completed" placeholder="Continued projects Completed">
									</div>
									<label class="control-label col-sm-2" for="cur_completed">Current(New Projects):</label>
									<div class="col-sm-4">
										<input type="Number" name="cur_completed" style="background-color: transparent;color: white;" class="form-control" required="" id="phone" placeholder="Current projects Completed">
									</div>
								</div><br><br>
								<?php
							}
						}
						else
						{
							echo "0 result";
						}
						$conn-> close();
					 
					?>
				</div>
				<div class="form-group">
					<div class="container" align="center">
						<button type="submit" class="btn btn-info" name="submit"> Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>