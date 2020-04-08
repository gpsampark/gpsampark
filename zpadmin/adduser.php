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
<script type="text/javascript">
	function validate()
	{

		var input = document.getElementById('pcode').value;
		var aRGEX = /^(([0-9]{10})|([0-9]{4}))$/;
		var Result = aRGEX.test(input);
		if (Result == false) {
			alert("Enter Valid Panchayat Code:"+Result );
			return Result;
		}

		var input = document.getElementById('desig').value;
		var aRGEX = /^[a-zA-Z]{1}[a-zA-Z ]*$/;
		var Result = aRGEX.test(input);
		if (Result == false) {
			alert("Enter Valid Designation:"+Result );
			return Result;
		}

		var input = document.getElementById('name').value;
		var aRGEX = /^[a-zA-Z]{1}[a-zA-Z ]*$/;
		var Result = aRGEX.test(input);
		if (Result == false) {
			alert("Enter Valid Name:"+Result );
			return Result;
		}

		/*var input = document.getElementById('email').value;
		var aRGEX = /^w+[+.w-]*@([w-]+.)*w+[w-]*.([a-z]{2,4}|d+)$/i;
		var Result = aRGEX.test(input);
		if (Result == false) {
			alert("Enter Valid Email Address:"+Result );
			return Result;
		}*/

		var input = document.getElementById('phone').value;
		var aRGEX = /^[6-9][0-9]{9}$/;
		var Result = aRGEX.test(input);
		if (Result == false) {
			alert("Enter Valid Phone Number :"+Result );
			return Result;
		}		
	}
</script>
<body class="bg">
	<?php include 'navbar.php'; ?>
	<div class="container-fluid" ng-app="">
		<div  class="container" style="width: 70%;background-color: transparent;  color: black; border:solid thin black;border-radius: 10px;">
			<h1 align="center" class="w3-animate-top">Add User Details</h1><br>
			<form  class="form-horizontal w3-animate-zoom" action="useradd.php" method="POST" onsubmit="return validate()">
				<div class="form-group">
					<label class="control-label col-sm-2" for="branch">Panchayat Type</label>
					<div class="col-sm-9">
						<select name="ptype" class="form-control" id="ptype" required="" style="background-color: transparent;" ng-model="ptype" onchange="send(this.value)">
							<option value="" disabled selected> SELECT PANCHAYAT TYPE</option>
							<option value="gp">Gram Panchayat</option><!-- 
							<option value="tp">Taluk Panchayat</option> -->
							<option value="zp">Zilla Panchayat</option>
						</select>
					</div>
				</div><br>				
		
				<div class="form-group">
					<label class="control-label col-sm-2" for="pcode">Panchayat Code:</label>
					<div class="col-sm-9">
						<input type="number" style="background-color: transparent;" name="pcode" class="form-control" required="" id="pcode" placeholder="Enter Panchayat Code">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="desig">Designation:</label>
					<div class="col-sm-9">
						<input type="text" name="desig" style="background-color: transparent;" class="form-control" id="desig" placeholder="Enter Designation" required="">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-9">
						<input type="text" name="name" style="background-color: transparent;" class="form-control" id="name" placeholder="Enter Name" required="">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="Gender">Gender:</label><div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
						<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-9">
						<input type="email" name="email" style="background-color: transparent;" class="form-control" required="" id="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="phone">Phone Number:</label>
					<div class="col-sm-9">
						<input type="Number" name="phone" style="background-color: transparent;" class="form-control" required="" id="phone" placeholder="Enter Phone Number">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="address">Address</label>
					<div class="col-sm-9">
						<textarea name="address" style="background-color: transparent;" class="form-control" required="" id="address" placeholder="Enter Your Address"></textarea>
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