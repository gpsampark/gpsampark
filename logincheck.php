<?php 

ini_set('display_errors', 1);
error_reporting (E_ALL);
echo "My first PHP script!";
$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "gramsampark";



$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: ");
}
//echo "connected suceessfully";
  if(isset($_POST['submit'])) { 
$username=$_POST['username'];
$password=$_POST['password'];
echo "$username";
$sql="select * from login where username like '$username'";
mysqli_select_db($conn,$dbname);
$query=mysqli_query($conn, $sql);
            if($query){
                $row= mysqli_fetch_assoc($query);
                $dbusername=$row['username'];
                $privilege=$row['privilege'];
                $dbpassword=$row['password'];
                $id=$row['id'];
            }

            if($username== $dbusername && $password== $dbpassword){
                session_start();
                  $_SESSION['expire'] = time() + 15*60;
                  $_SESSION['login_user']=$username;
                  $_SESSION['prev'] = $privilage;
                  $_SESSION['logged']= true;
                  if ($privilege==1) {
                  header('Location:gpadmin/index.php');
                  echo "successful";
                  }
                  elseif ($privilege==2) {
                   header('Location:tpadmin/index.php');
                    echo "successful";
                  }
                  else{
                    header('Location:zpadmin/index.php');
                    echo "successful";
                  }
              
              }

              else{
                $_SESSION['logged']=false;
                header("location:login.php?error=".$username."");
              
              }
      }

 ?>