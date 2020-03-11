<?php
ini_set('display_errors', 1);
error_reporting (E_ALL);
include '../config.php';
$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "gramsampark";
include 'links.php';
$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: " .mysqli_connect_error());
}
if (isset($_POST['submit'])) {
$slno=($_POST['slno']);
$pname=($_POST['pname']);
$visibility=($_POST['visibility']);

$query="insert into project_list(slno,project_name,visibility,uid) values('$slno','$pname','$visibility','$id')";

$res = mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0) {
	?><br><br><br>
	<div class="alert alert-success">
  		<strong>Success!</strong> Your response has been successfully recorded.Thank you.
		<meta http-equiv="refresh" content="6;url=addproject.php" />
	</div>

	<?php
}
else {
	?>
	<br><br><br>
	<div class="alert alert-danger">
  		<strong>Sorry!</strong> Please try to re enter your details. Please make sure credentials such as id is unique
  		<meta http-equiv="refresh" content="7;url=index.php" />
	</div>
	<?php
} 

}
?>