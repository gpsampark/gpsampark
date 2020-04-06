<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
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
				$rem_processing=$_POST['rem_processing'];
				$cur_processing=$_POST['cur_processing'];
				$rem_completed=$_POST['rem_completed'];
				$cur_completed=$_POST['cur_completed'];
				$month=($_POST['month']);
				$year=($_POST['year']);


				$query="select * from admin where id like '".$id."'";
				$sql=mysqli_query($conn,$query);
				$row1= mysqli_fetch_assoc($sql);
				$pcode=$row1['pcode'];



				$sql="select * from expenditure where gp_code='".$pcode."' and month='".$month."' and year='".$year."' ";
				$result=mysqli_query($conn, $sql);
				if ($result-> num_rows >0) {
					?>
					<br><br><br>
					<div class="alert alert-danger">
						<strong>Sorry!</strong> Expenditure for this project is entered.
						<meta http-equiv="refresh" content="7;url=index.php" />
					</div><?php
				}
				else{
					$i=1;
					$sql="select * from project_list where visibility=1 order by pid";
					$result=mysqli_query($conn, $sql);
					while ($row= $result-> fetch_assoc()) {
						$pid=$row['pid'];
						$rp=$rem_processing[$i];
						$cp=$cur_processing[$i];
						$rc=$rem_completed[$i];
						$cc=$cur_completed[$i];
						echo $id."\n\n";
						echo $pcode."\n\n";
						echo $pid."\n\n";
						echo $rp."\n\n";
						echo $cp."\n\n";
						echo $rc."\n\n";
						echo $cc."\n\n";
						echo $month."\n\n";
						echo $year."\n\n";

						$query="insert into expenditure(user_id, gp_code, project_id, rem_processing, cur_processing, rem_completed, cur_completed, month, year) values('".$id."','".$pcode."','".$pid."','".$rp."','".$cp."','".$rc."','".$cc."','".$month."','".$year."')";

						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
							$flag=1;
							?>
							<div class="alert alert-success">
								<strong>Success!</strong> Your response has been successfully recorded.Thank you.
								<!-- <meta http-equiv="refresh" content="6;url=index.php" /> -->
							</div>
							<?php
						}
						else{
							?>
							<br><br><br>
							<div class="alert alert-danger">
								<strong>Sorry!</strong> Please try to re enter your details.
								<meta http-equiv="refresh" content="10;url=index.php" />
							</div>
							<?php
						}
						$i+=1;
					}
				}
			}
		?>
	</header>
</body>
</html>