<?php
ini_set('display_errors', 1);
error_reporting (E_ALL);

$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "gramsampark";
$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: " .mysqli_connect_error());
}

if (isset($_POST['submit'])) {
$gp_code =($_POST['gp_code']);
$tp_code =($_POST['tp_code']);
$village_name =($_POST['village_name']);

						$query="insert into village_list(gp_code,tp_code,village_name) values('$gp_code','$tp_code','$village_name')";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
							?><br><br><br>
							<div class="alert alert-success">
						  		<strong>Success!</strong> New Village Added.
								<meta http-equiv="refresh" content="6;url=index.php" />
							</div>

							<?php
						}
						else {
							?>
							<br><br><br>
							<div class="alert alert-danger">
						  		<strong>Sorry!</strong> Please try to re enter your details. Please make sure your entered details are correct. Do not repeat village Code.
						  		<meta http-equiv="refresh" content="7;url=addvillage.php" />
							</div>
							<?php
						} 
				}
?>