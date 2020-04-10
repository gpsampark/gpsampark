<!DOCTYPE html>
<html>
<head>
  <title>Gramsampark | View report</title>
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
				<form  class="form-horizontal w3-animate-zoom" action="viewreport.php" method="POST">

				<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 0 #444;text-align: center;"><b>MONTHLY EXPENDITURE</b></h2><br>
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
					</div>
					<!-- <div class="form-group">
						<label class="control-label col-sm-2" for="gp_code">Panchayat Code:</label>
						<div class="col-sm-9">
							<input type="number" style="background-color: transparent;" name="gp_code" class="form-control" required="" id="gp_code" placeholder="Enter Panchayat Code">
						</div>
					</div><br> -->
					<div class="panel-body">
						<div class="form-group">
							<label for="title">Select Taluk:</label>
							<select name="taluk" class="form-control">
								<option value="">--- Select Taluk ---</option>
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

				                        $sql = "SELECT * FROM taluk_list order by tp_code"; 

				                        $result = $conn->query($sql);

				                        while($row = $result->fetch_assoc()){

				                            echo "<option value='".$row['tp_code']."'>".$row['taluk_name']."</option>";

				                        }
				                    ?>
				            </select>
				        </div>
				        <div class="form-group">
				        	<label for="title">Select Village:</label>
			        		<select name="gp_code" class="form-control" style="width:350px">
			        			
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
								$gp_code=($_POST['gp_code']);
								$sql="select * from expenditure,project_list,village_list where expenditure.gp_code=village_list.gp_code and project_id=pid and expenditure.gp_code='".$gp_code."' and month='".$month."' and year='".$year."' ORDER BY project_list.pid";
								$result=mysqli_query($conn, $sql);
								if ($result-> num_rows >0) {
									?>
									<table class="table table-bordered" style="color: black; font-weight: bold;">
										<thead  style="text-align: center;">
											<tr><td colspan="7">Monthly Progress Report of Projects implemented under Mahatma Gandhi National Rural Employment Scheme</td></tr>
											<tr><td colspan="2"></td><td colspan="5">Rupees in Lakhs</td></tr>
											<tr><td rowspan="3">Sl.No</td><td rowspan="3">Project Name</td><td colspan="5">Progress until</td></tr>
											<tr><td colspan="2">Processing</td><td colspan="2">Completed</td><td rowspan="2">Total Expenditure(Rupees in Lakhs)</td></tr>
											<td>Remaining(Cont projects)</td><td>Current(New Projects)</td><td>Remaining(Cont. projects)</td><td>Current(New Projects)</td>
										</thead>
										<tbody>
									<?php
									while ($row= $result-> fetch_assoc()) {
										$total=$row['rem_processing']+$row['rem_completed']+$row['cur_processing']+$row['cur_completed'];
										echo "<tr><td>".$row['slno']."</td><td>".$row['project_name']."</td><td>".$row['rem_processing']."</td><td>".$row['cur_processing']."</td><td>".$row['rem_completed']."</td><td>".$row['cur_completed']."</td>
												<td style='text-align:right;'>".$total."</td></tr>";
											}
										echo "</tbody></table>";
								}
								else{
									echo "000 result";
								}
								$conn-> close();
							}
						?>
					</div>
				</form>
			</div>
		</div>
		<script>

$( "select[name='taluk']" ).change(function () {

    var tp_code = $(this).val();


    if(tp_code) {


        $.ajax({

            url: "ajaxpro.php",

            dataType: 'Json',

            data: {'tp_code':tp_code},

            success: function(data) {

                $('select[name="gp_code"]').empty();

                $.each(data, function(key, value) {

                    $('select[name="gp_code"]').append('<option value="'+ key +'">'+ key +". "+ value +'</option>');

                });

            }

        });


    }else{

        $('select[name="gp_code"]').empty();

    }

});

</script>
		<?php include 'footer.php'; ?>
	</body>
</html>
