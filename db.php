<?php
    $con=mysqli_connect("host","username","password","databasename");
    if(!$con)
    {
        echo"<script>alert('connection failed');</script>";
    }
   
?>
