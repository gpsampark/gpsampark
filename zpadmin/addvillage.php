<!DOCTYPE html>
<html>
<head>
  <title>Mock Test | Add Test</title>
</head>
<body>
  <header class="header" style="background-color: #abcdab">
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
              <h1 align="center" class="w3-animate-top">Add Village Detail</h1><br>
              <form  class="form-horizontal w3-animate-zoom" action="addvillagescript.php" method="POST">
                <div class="form-group">
                   <label class="control-label col-sm-2" for="tp_code">Taluk Code(TP_code):</label>
                       <div class="col-sm-9">
                  <select name="tp_code" class="form-control" id="tp_code" required="" style="background-color: transparent;">
                    <option disabled selected>Choose Taluk</option>
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
                    $sql="select * from taluk_list order by tp_code";
                    $result=mysqli_query($conn, $sql);
                    if ($result-> num_rows >0) {
                      while ($row= $result-> fetch_assoc()) {
                        echo "<option value=".$row["tp_code"].">".$row["tp_code"].". ".$row["taluk_name"]."</option>";
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
                  <label class="control-label col-sm-2" for="gp_code">Village Code:</label>
                  <div class="col-sm-9">
                    <input type="text" name="gp_code" style="background-color: transparent;" class="form-control" id="gp_code" placeholder="Enter Village Code(gp_code)" required="">
                  </div>
                </div><br>
                  <div class="form-group">
                  <label class="control-label col-sm-2" for="village_name">Village Name:</label>
                  <div class="col-sm-9">
                    <input type="text" name="village_name" style="background-color: transparent;" class="form-control" id="village_name" placeholder="Enter village Name" required="">
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