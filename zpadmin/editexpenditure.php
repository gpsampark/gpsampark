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
				<form  class="form-horizontal w3-animate-zoom" action="editdata.php" method="POST">

				<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 0 #444;text-align: center;"><b>MONTHLY VILLAGE EXPENDITURE</b></h2><br>
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
					<!-- <div class="form-group">
						<label class="control-label col-sm-2" for="gp_code">Panchayat Code:</label>
						<div class="col-sm-9">
							<input type="number" style="background-color: transparent;" name="gp_code" class="form-control" required="" id="gp_code" placeholder="Enter Panchayat Code">
						</div>
					</div><br> -->
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Select Taluk : </label>
							<select class="col-sm-9" name="taluk" class="form-control" required="">
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
				        	<label class="control-label col-sm-2" for="title">Select Village:</label>
			        		<select class="col-sm-9" name="gp_code" class="form-control" style="width:350px" required="">
			        			
			        		</select>
				        </div>
				    </div>
					<div class="form-group">
		                <div class="container" align="center">
		                 	<button type="submit" class="btn btn-info" name="submit">View</button>
		                </div>
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
-<!DOCTYPE html>
<html>
<head>
	<title>Edit Expenditure</title>
</head>
<body>

</body>
</html>