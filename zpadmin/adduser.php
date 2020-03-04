<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gram Sampark | ZP Add User</title>
</head>
<style type="text/css">
  
label
{
  color: #000000;
  font-weight: bold;
}

h1
{
  color: #000000;
  font-weight: bold;
}

</style>
<body>
	<?php include 'navbar.php'; ?>
	<div class="container-fluid" style="background-color: #abcdab" ng-app="">
		<div  class="container" style="width: 70%;background-color: transparent;  color: black; border:solid thin black;border-radius: 10px;">
			<h1 align="center" class="w3-animate-top">Add User Details</h1><br>
			<form  class="form-horizontal w3-animate-zoom" action="useradd.php" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2" for="branch">Panchayat Type</label>
					<div class="col-sm-9">
						<select name="ptype" class="form-control" id="ptype" required="" style="background-color: transparent;" ng-model="ptype" onchange="send(this.value)">
							<option value="" disabled selected> SELECT PANCHAYAT TYPE</option>
							<option value="gp">Gram Panchayat</option>
							<option value="tp">Taluk Panchayat</option>
							<option value="zp">Zilla Panchayat</option>
						</select>
					</div>
				</div><br>				
				<!-- <?php 
    				$ptype="{{ptype}}" ;
    				echo $ptype;
					$servername ="localhost";
					$username= "root";
					$password= "password";
					$dbname = "gramsampark";
					$conn = mysqli_connect($servername, $username, $password,$dbname );
					if ($conn->connect_error) {
						die("Connection failed: " .mysqli_connect_error());
					}
					if ($ptype=="zp") {
						echo $ptype;
						$query="select zp_code,district_name from district_list";
						$res = mysqli_query($conn,$query);
						echo $res;
						if(mysqli_affected_rows($conn)>0) {
                            echo "<select name='pcode'>";
                            while ($row = mysqli_fetch_array($res)){
                                echo "<option value='".$row['zp_code']."'>".$row['district_name'].$row['zp_code']."</option>" ;
                            }
                            echo "</select>" ;                     
						}
					}
					elseif ($ptype=="tp") {
						echo "tp";
						$query="select tp_code,taluk_name from taluk_list";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
                            echo "<select name='pcode'>";
                            while ($row = mysqli_fetch_array($res)){
                                echo "<option value='".$row['tp_code']."'>".$row['taluk_name'].$row['tp_code']."</option>" ;
                            }
                            echo "</select>" ;                     
						}
					}
					elseif ($ptype=="gp") {
						echo "gp";
						$query="select gp_code,village_name from village_list";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
                            echo "<select name='pcode'>";
                            while ($row = mysqli_fetch_array($res)){
                                echo "<option value='".$row['gp_code']."'>".$row['village_name'].$row['gp_code']."</option>" ;
                            }
                            echo "</select>" ;                     
						}
					}	
				?> -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="pcode">Panchayat Code:</label>
					<div class="col-sm-9">
						<input type="number" style="background-color: transparent; color: white" name="pcode" class="form-control" required="" id="pcode" placeholder="Enter Panchayat Code">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="desig">Designation:</label>
					<div class="col-sm-9">
						<input type="text" name="desig" style="background-color: transparent; color: white" class="form-control" id="desig" placeholder="Enter Designation" required="">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-9">
						<input type="text" name="name" style="background-color: transparent; color: white" class="form-control" id="name" placeholder="Enter Name" required="">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="Gender">Gender:</label>
					<div class="container" style="padding-left: 17%">
						<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
						<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-9">
						<input type="email" name="email" style="background-color: transparent; color: white" class="form-control" required="" id="email" placeholder="Enter email">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="phone">Phone Number:</label>
					<div class="col-sm-9">
						<input type="Number" name="phone" style="background-color: transparent; color: white" class="form-control" required="" id="phone" placeholder="Enter Phone Number" pattern="[789][0-9]{9}" value="<?php echo $Phone; ?>">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="address">Address</label>
					<div class="col-sm-9">
						<textarea name="address" style="background-color: transparent;color: white" class="form-control" required="" id="address" placeholder="Enter Your Address">
						</textarea>
					</div>
				</div><br>
				<div class="form-group">
					<div class="container" align="center">
						<button type="submit" class="btn btn-info" name="submit"> Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>