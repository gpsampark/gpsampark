<!DOCTYPE html>
<html>
<head>
	<title>Dropdown</title>
</head>
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function gettaluk(dist_code) {
		$.ajax({
			type: "POST",
			url: "gettaluk.php",
			data: 'dist_id='+dist_code,
			success:function(data){
				$("#taluk").html(data);
				getvillage();
			}
		});
	}

	function getvillage(taluk_code) {
		$.ajax({
			type: "POST",
			url: "getvillage.php",
			data: 'taluk_id='+taluk_code,
			success:function(data){
				$("#village").html(data);
			}
		});
	}
</script>
<body>
	<div>
		<h2>Dependent</h2>
		<div>
			<label>dist :</label><br>
			<select name="dist" id="dist" onChange="gettaluk(this.value);">
				<option value="" disabled selected="">Select District</option>
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
                    $sql="select * from district_list order by zp_code";
                    $result=mysqli_query($conn, $sql);
                    if ($result-> num_rows >0) {
                      while ($row= $result-> fetch_assoc()) {
                        echo "<option value=".$row["zp_code"].">".$row["zp_code"].". ".$row["district_name"]."</option>";
                      }
                    }
                    else{
                      echo "0 result";
                    }
                    $conn-> close();
                  ?>
			</select>
		</div>

		<div>
			<label>taluk :</label><br>
			<select name="taluk" id="taluk" onChange="getvillage(this.value);">
				<option value="">Select taluk</option>
			</select>
		</div>

		<div>
			<label>village :</label><br>
			<select name="village" id="village">
				<option value="">Select village</option>
			</select>
		</div>
	</div>
</body>
</html>