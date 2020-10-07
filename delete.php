<?php
  require_once 'dp.php';
  $class=$_POST["class"];
  $sql="TRUNCATE TABLE `$class`";
  if(mysqli_query($con,$sql))
  {
    echo"<script>

    alert('Data Deleted successfully');

    window.location.href='/Teacher.php';

    </script>";
  }
  else
  {
    echo"<script>

    alert('Data Not Deleted');

    window.location.href='/Teacher.php';

    </script>";
  }
?>