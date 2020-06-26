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
				$i=$_POST['i'];
				$expid=$_POST['expid'];
				$rem_processing=$_POST['rem_processing'];
				$cur_processing=$_POST['cur_processing'];
				$rem_completed=$_POST['rem_completed'];
				$cur_completed=$_POST['cur_completed'];
				$j=0;
				$flag=0;
				while ($j<=$i) {
					
					$eid=$expid[$j];
					$rp=$rem_processing[$j];
					$cp=$cur_processing[$j];
					$rc=$rem_completed[$j];
					$cc=$cur_completed[$j];
							
					$query="UPDATE expenditure SET rem_processing = '".$rp."', cur_processing = '".$cp."', rem_completed = '".$rc."', cur_completed = '".$cc."' WHERE exp_id = '".$eid."';";
					$res = mysqli_query($conn,$query);
					$j=$j+1;
				}
				?>
					<div class="alert alert-success">
						<strong>Success!</strong> Your response has been successfully recorded.Thank you.
						<meta http-equiv="refresh" content="2;url=editexpenditure.php" />
					</div>
				<?php
			}
		?>
	</header>
</body>
</html>