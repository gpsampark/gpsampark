<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gram Sampark | ZP Add Project</title>
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
<body class="bg">
	<?php include 'navbar.php'; ?>
	<div class="container-fluid">
		<div  class="container" style="width: 70%;background-color: transparent;  color: black; border:solid thin black;border-radius: 10px;">
			<h1 align="center" class="w3-animate-top">Add New Project</h1><br>
			<form  class="form-horizontal w3-animate-zoom" action="addprojectscript.php" method="POST">
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="slno">Serial Number :</label>
					<div class="col-sm-9">
						<input type="text" style="background-color: transparent; color: white" name="slno" class="form-control" required="" id="slno" placeholder="Enter Full Serial Number(eg. 1 or 1a)">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pname">Project Name :</label>
					<div class="col-sm-9">
						<input type="text" name="pname" style="background-color: transparent; color: white" class="form-control" id="pname" placeholder="Enter New Project Name" required="">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="vilibility">Visibility :</label>
					<div class="col-sm-9">
						<input type="number" name="visibility" style="background-color: transparent; color: white" class="form-control" id="visibility" placeholder="Enter visibility(if main project name 1 otherwise 0)" required="">
					</div>
				</div><br>
				
							
				<div class="form-group">
					<div class="container" align="center">
						<button type="submit" class="btn btn-info" name="submit">Assign</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>