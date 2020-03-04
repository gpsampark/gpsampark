<?php
ini_set('display_errors', 1);
error_reporting (E_ALL);
include '../config.php';
$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "gramsampark";
$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: " .mysqli_connect_error());
}
if (isset($_POST['submit'])) {
$project_id=($_POST['pid']);
$rem_processing=($_POST['rem_processing']);
$cur_processing=($_POST['cur_processing']);
$rem_completed=($_POST['rem_completed']);
$cur_completed=($_POST['cur_completed']);
$date=($_POST['date']);

$query="select * from admin where id like '".$id."'";
$sql=mysqli_query($conn,$query);
$row1= mysqli_fetch_assoc($sql);
$pcode=$row1['pcode'];

$sql="select * from admin";
$result=mysqli_query($conn, $sql);
if ($result-> num_rows >0) {
	
}

$query="insert into expenditure(user_id,gp_code,project_id,rem_processing,cur_processing,rem_completed,cur_completed,date) values('$id','$pcode','$project_id','$rem_processing','$cur_processing','$rem_completed','$cur_completed','$date')";
$res = mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)>0) {
	?><br><br><br>
	<div class="alert alert-success">
  		<strong>Success!</strong> Your Expenditure Details has been successfully recorded.Thank you.
		<meta http-equiv="refresh" content="6;url=updatedata.php" />
	</div>

	<?php
}
else {
	?>
	<br><br><br>
	<div class="alert alert-danger">
  		<strong>Sorry!</strong> Please try to re enter your details.
  		<meta http-equiv="refresh" content="7;url=index.php" />
	</div>
	<?php
} 

}
?>