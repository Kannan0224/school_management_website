<?php


    require_once'db.php';

    $rollno=$_POST["rollno"];

    $name=$_POST["name"];

    $class=$_POST["class"];

    $maths=$_POST["maths"];

    $science=$_POST["science"];

    $social=$_POST["social"];

    $english=$_POST["english"];

    $tamil=$_POST["tamil"];

    $total=$maths+$social+$english+$science+$tamil;

    $sql="INSERT INTO  `$class`(`rollno`,`name`, `tamil`, `english`, `maths`, `science`, `social`, `total`) 

    values ('$rollno','$name','$tamil','$english','$maths','$science','$social','$total')";

    if(mysqli_query($con,$sql))

    {
      echo"<script>

      alert('Data Insert successfully');

      window.location.href='/Teacher.php';

      </script>";

    }

    else

    {

         if(mysqli_errno($con)==1062)

           {

            echo"<script>

      alert('Data already exists');

      window.location.href='/Teacher.php';

      </script>";

           }

           else

           {
            echo"<script>

            alert('Data Not Insert');
      
            window.location.href='/Teacher.php';
      
            </script>";
           }

    }

?>