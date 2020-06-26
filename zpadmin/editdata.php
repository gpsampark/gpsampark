<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
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
	<form  class="form-horizontal w3-animate-zoom" method="POST" action="editdatascript.php">
		<div class="table-responsive w3-animate-zoom" id="printableArea">
			<style type="text/css">
				table, th, td {
					border: 1px solid black;
				}
			</style>
			<?php
				if (isset($_POST['submit'])) {
					$month =($_POST['month']);
					$year =($_POST['year']);
					$gp_code=($_POST['gp_code']);
					$sql="select * from expenditure,project_list,village_list where expenditure.gp_code=village_list.gp_code and project_id=pid and expenditure.gp_code='".$gp_code."' and month='".$month."' and year='".$year."' ORDER BY project_list.pid";
					$result=mysqli_query($conn, $sql);
					if ($result-> num_rows >0) {
						?>
						<table class="table table-bordered" style="color: black; font-weight: bold;">
							<thead  style="text-align: center;">
								<tr><td colspan="6">Monthly Progress Report of Projects implemented under Mahatma Gandhi National Rural Employment Scheme</td></tr>
								<tr><td colspan="2"></td><td colspan="4">Rupees in Lakhs</td></tr>
								<tr><td rowspan="3">Sl.No</td><td rowspan="3">Project Name</td><td colspan="4">Progress until</td></tr>
								<tr><td colspan="2">Processing</td><td colspan="2">Completed</td></tr>
								<td>Remaining(Cont projects)</td><td>Current(New Projects)</td><td>Remaining(Cont. projects)</td><td>Current(New Projects)</td>
							</thead>
							<tbody>
						<?php
						$i = -1;
						while ($row= $result-> fetch_assoc()) {
							$i++;
							
							?>
							<tr><td><?php echo $row['slno']; ?></td><td><?php echo $row['project_name']; ?></td>
								<td><input type="hidden" value="<?php echo "".$row['exp_id']."" ?>" name="expid[<?php echo $i; ?>]" id="expid[<?php echo $i; ?>]">
									<input type="hidden" value="<?php echo "".$i."" ?>" name="i" id="i">
									<input type="Number" value="<?php echo "".$row['rem_processing']."" ?>" name="rem_processing[<?php echo $i; ?>]" required="" id="rem_processing[<?php echo $i; ?>]"></td>
								<td><input type="Number" value="<?php echo "".$row['cur_processing']."" ?>" name="cur_processing[<?php echo $i; ?>]" required="" id="cur_processing[<?php echo $i; ?>]"></td>
								<td><input type="Number" value="<?php echo "".$row['rem_completed']."" ?>" name="rem_completed[<?php echo $i; ?>]" required="" id="rem_completed[<?php echo $i; ?>]"></td>
								<td><input type="Number" value="<?php echo "".$row['cur_completed']."" ?>" name="cur_completed[<?php echo $i; ?>]" required="" id="cur_completed[<?php echo $i; ?>]"></td>
							</tr>
							<?php
						}
						echo "</tbody></table>";?>
						<div class="container" align="center">
		                 	<button type="submit" class="btn btn-info" name="submit">Update</button>
		                </div>
						<?php
					}
					else{
						echo "000 result";
					}
					$conn-> close();
				}
			?>
		</div>	
	</form>

</body>
</html>