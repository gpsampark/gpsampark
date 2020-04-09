<?php 
	if (!empty($_POST["dist"])) {
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
			<option disabled selected></option>
		<?php
		$query = "SELECT * FROM taluk_list WHERE zp_code = '".$_POST["dist_id"]."' order by tp_code ";
		$result=mysqli_query($conn, $query);
		while ($row= $result-> fetch_assoc()) {
			?>
			<option value="<?php echo $row['tp_code']; ?>"><?php echo $row['tp_code']." ".$row['taluk_name']; ?></option>
			<?php
		}
	}
?>