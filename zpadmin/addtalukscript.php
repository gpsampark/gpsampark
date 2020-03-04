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
$zp_code =($_POST['zp_code']);
$tp_code =($_POST['tp_code']);
$taluk_name =($_POST['taluk_name']);

						$query="insert into taluk_list(tp_code,zp_code,taluk_name) values('$tp_code','$zp_code','$taluk_name')";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
							?><br><br><br>
							<div class="alert alert-success">
						  		<strong>Success!</strong> New Taluk Added.
								<meta http-equiv="refresh" content="6;url=index.php" />
							</div>

							<?php
						}
						else {
							?>
							<br><br><br>
							<div class="alert alert-danger">
						  		<strong>Sorry!</strong> Please try to re enter your details. Please make sure your credentials.
						  		<meta http-equiv="refresh" content="7;url=addtest.php" />
							</div>
							<?php
						} 
				}
?>