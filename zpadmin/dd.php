<!DOCTYPE html>

<html>

<head>

    <title>PHP - How to make dependent dropdown list using jquery Ajax?</title>

    <script src="../js/jquery.js"></script>

    <script src="../js/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>


<div class="container">

    <div class="panel panel-default">

      <div class="panel-heading">Select State and get bellow Related City</div>

      <div class="panel-body">

            <div class="form-group">

                <label for="title">Select Taluk:</label>

                <select name="taluk" class="form-control">

                    <option value="">--- Select Taluk ---</option>


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

                        $sql = "SELECT * FROM taluk_list order by tp_code"; 

                        $result = $conn->query($sql);

                        while($row = $result->fetch_assoc()){

                            echo "<option value='".$row['tp_code']."'>".$row['taluk_name']."</option>";

                        }

                    ?>


                </select>

            </div>


            <div class="form-group">

                <label for="title">Select Village:</label>

                <select name="village" class="form-control" style="width:350px">

                </select>

            </div>


      </div>

    </div>

</div>


<script>

$( "select[name='taluk']" ).change(function () {

    var tp_code = $(this).val();


    if(tp_code) {


        $.ajax({

            url: "ajaxpro.php",

            dataType: 'Json',

            data: {'tp_code':tp_code},

            success: function(data) {

                $('select[name="village"]').empty();

                $.each(data, function(key, value) {

                    $('select[name="village"]').append('<option value="'+ key +'">'+ key +". "+ value +'</option>');

                });

            }

        });


    }else{

        $('select[name="village"]').empty();

    }

});

</script>


</body>

</html>