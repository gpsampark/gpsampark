<!DOCTYPE html>
<html>
<head>
  <title>Mock Test | Add Test</title>
</head>
<script type="text/javascript">
  function validate()
  {

    var input = document.getElementById('tp_code').value;
    var aRGEX = /^[0-9]{7}$/;
    var Result = aRGEX.test(input);
    if (Result == false) {
      alert("Enter Valid Taluk Code:"+Result );
      return Result;
    }

    var input = document.getElementById('taluk_name').value;
    var aRGEX = /^[a-zA-Z]{1}[a-zA-Z ]*$/;
    var Result = aRGEX.test(input);
    if (Result == false) {
      alert("Enter Valid Taluk Name:"+Result );
      return Result;
    }
  
  }
</script>
<body class="bg">
  <header class="header">
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
              <h1 align="center" class="w3-animate-top">Add Taluk Detail</h1><br>
              <form  class="form-horizontal w3-animate-zoom" action="addtalukscript.php" method="POST" onsubmit="return validate()">
                <div class="form-group">
                   <label class="control-label col-sm-2" for="zp_code">District Code(ZP_code):</label>
                       <div class="col-sm-9">
                  <select name="zp_code" class="form-control" id="zp_code" required="" style="background-color: transparent;">
                    <option disabled selected>Choose District</option>
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
                   </div><br>
                   <div class="form-group">
                  <label class="control-label col-sm-2" for="tp_code">Taluk Code:</label>
                  <div class="col-sm-9">
                    <input type="text" name="tp_code" style="background-color: transparent;" class="form-control" id="tp_code" placeholder="Enter Taluk Code(tp_code)" required="">
                  </div>
                </div><br>
                  <div class="form-group">
                  <label class="control-label col-sm-2" for="taluk_name">Taluk Name:</label>
                  <div class="col-sm-9">
                    <input type="text" name="taluk_name" style="background-color: transparent;" class="form-control" id="taluk_name" placeholder="Enter Taluk Name" required="">
                  </div>
                </div><br>
                <div class="form-group">
                <div class="container" align="center">
                  <button type="submit" class="btn btn-info" name="submit"> Submit</button>
                </div>
              </div>
            </form>
          </div>
          <?php 
            include 'footer.php';
          ?>
        </header>
      </body>
</html>