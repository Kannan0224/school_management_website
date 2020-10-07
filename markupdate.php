 <?php
 require_once 'db.php';
 $rollno=$_POST["rollno"];

 $name=$_POST["name"];

 $class=$_POST["class"];

 $maths=$_POST["maths"];

 $science=$_POST["science"];

 $social=$_POST["social"];

 $english=$_POST["english"];

 $tamil=$_POST["tamil"];

 $total=$maths+$social+$english+$science+$tamil;

     $sql1="UPDATE `$class` SET `rollno`='$rollno',`name`='$name',`tamil`='$tamil',`english`='$english',`maths`='$maths',`science`='$science',`social`='$social',`total`='$total' WHERE 1 ";

         if(mysqli_query($con,$sql1))

         {

            echo"<script>alert('data updated successfully');

            window.location.href='/Teacher.php';</script>";

         }

                 

               else{

                echo "<script>alert('data not updated');

                </script>";

               }

               

?>