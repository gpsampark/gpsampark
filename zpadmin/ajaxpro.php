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


   $sql = "SELECT * FROM village_list

         WHERE tp_code LIKE '%".$_GET['tp_code']."%'"; 


   $result = $conn->query($sql);


   $json = [];

   while($row = $result->fetch_assoc()){

        $json[$row['gp_code']] = $row['village_name'];

   }


   echo json_encode($json);

?>