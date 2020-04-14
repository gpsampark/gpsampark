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
		<div  class="container" style="width: 90%;background-color: transparent;  color: black; border:solid thin black;border-radius: 10px;">
			<h1 align="center" class="w3-animate-top">Add Expenditure</h1><br>
			<form  class="form-horizontal w3-animate-zoom" action="updatedatascript.php" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2" for="month">Month:</label>
					<div class="col-sm-9">
						<select name="month" class="form-control" id="month" required="" style="background-color: transparent;">
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

						$sql1="select village_name,village_list.gp_code from village_list,admin where village_list.gp_code=admin.pcode and admin.id='".$id."'";
						$result1=mysqli_query($conn, $sql1);
						$row1= $result1-> fetch_assoc();
						$gp_code=$row1['gp_code'];
						$village=$row1['village_name'];

						$sql="select * from project_list where visibility=1 order by pid";
						$result=mysqli_query($conn, $sql);
						if ($result-> num_rows >0) {
							?>
							<div class="table-responsive w3-animate-zoom">
								<table class="table table-bordered" style="color: black; font-weight: bold;">
									<thead  style="text-align: center;">
										<tr><td colspan="6">Monthly Progress Report of Projects implemented under Mahatma Gandhi National Rural Employment Scheme</td></tr>
										<tr><td colspan="2"><?php echo $village ?></td><td colspan="4">Rupees in Lakhs</td></tr>
										<tr><td rowspan="2">Sl.No</td><td rowspan="2">Project Name</td><td colspan="2">Processing</td><td colspan="2">Completed</td></tr>
										<td>Remaining(Cont projects)</td><td>Current(New Projects)</td><td>Remaining(Cont. projects)</td><td>Current(New Projects)</td>
									</thead>
									
									<tbody>
							<?php
							$i = 1;
							while ($row= $result-> fetch_assoc()) {
								echo "<tr><td>".$row['slno']."</td><td>".$row['project_name']."</td><td>"?><input type="Number" name="rem_processing[<?php echo $i; ?>]" style="background-color: transparent;" required="" id="rem_processing[<?php echo $i; ?>]"><?php echo "</td><td>"; ?><input type="Number" name="cur_processing[<?php echo $i; ?>]" style="background-color: transparent;" required="" id="cur_processing[<?php echo $i; ?>]"><?php echo "</td><td>"; ?><input type="Number" name="rem_completed[<?php echo $i; ?>]" style="background-color: transparent;"required="" id="rem_completed[<?php echo $i; ?>]"><?php echo "</td><td>"; ?><input type="Number" name="cur_completed[<?php echo $i; ?>]" style="background-color: transparent;" required="" id="cur_completed[<?php echo $i; ?>]"><?php echo "</td></tr>"; ?><?;

								/*echo "<h4 class='well well-sm' style='background-color:transparent;text-shadow:1px 1px 0 #444;'><b>".$row["slno"]." ".$row["project_name"]."</b></h4>";*/
								?>
								<?php
								$i++;
							}
							?>
							</tbody>
							</table>
							<?php
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