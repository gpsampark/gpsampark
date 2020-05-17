<?php
			              if (isset($_POST['submit'])) {
			                $month =($_POST['month']);
			                $year =($_POST['year']);
			                $tp_code;

			                $sql="SELECT * FROM admin where id='".$id."'";
			                $result=mysqli_query($conn,$sql);
			                if ($result->num_rows>0)
			                  while ($row= $result-> fetch_assoc())
			                    $tp_code=$row['pcode'];

			                $sql="SELECT * FROM project_list where visibility=1 order by pid";
			                $result=mysqli_query($conn,$sql);
			                if ($result->num_rows>0) {
			                  ?>
			                  <table class="table table-bordered" style="color: black; font-weight: bold;">
			                    <thead  style="text-align: center;">
			                      <tr><td colspan="7">Monthly Progress Report of Projects implemented under Mahatma Gandhi National Rural Employment Scheme</td></tr>
			                      <tr><td colspan="2"></td><td colspan="5">Rupees in Lakhs</td></tr>
			                      <tr><td rowspan="3">Sl.No</td><td rowspan="3">Project Name</td><td colspan="5">Progress until</td></tr>
			                      <tr><td colspan="2">Processing</td><td colspan="2">Completed</td><td rowspan="2">Total Expenditure(Rupees in Lakhs)</td></tr>
			                      <td>Remaining(Cont projects)</td><td>Current(New Projects)</td><td>Remaining(Cont. projects)</td><td>Current(New Projects)</td>
			                    </thead>
			                    <tbody>
			                  <?php
			                  while ($row= $result-> fetch_assoc()) {
			                    $code=$row['pid'];
			                    $sql="select * from expenditure,project_list,village_list,taluk_list where expenditure.gp_code=village_list.gp_code and village_list.tp_code=taluk_list.tp_code and project_id=pid and taluk_list.tp_code='".$tp_code."' and project_list.pid='".$code."' and month='".$month."' and year='".$year."'";
			                    $result1=mysqli_query($conn, $sql);
			                    if ($result1-> num_rows >0) {
			                      $slno;
			                      $pname;
			                      $pr=0;
			                      $pc=0;
			                      $cr=0;
			                      $cc=0;
			                      while ($row1= $result1-> fetch_assoc()) {
			                        $slno=$row1['slno'];
			                        $pname=$row1['project_name'];
			                        $pr+=$row1['rem_processing'];
			                        $pc+=$row1['cur_processing'];
			                        $cr+=$row1['rem_completed'];
			                        $cc+=$row1['cur_completed'];
			                      }
			                      $tt=$pr+$pc+$cr+$cc;
			                      echo "<tr><td>".$slno."</td><td>".$pname."</td><td>".$pr."</td><td>".$pc."</td><td>".$cr."</td><td>".$cc."</td><td style='text-align:right;'>".$tt."</td></tr>";
			                    }
			                    else{
			                      echo "000 result";
			                    }
			                  }
			                }
			                echo "</table>";
			                $conn-> close();
			              }
			            ?>