    <?php
    if(isset($_POST["form1"]))
    {
    require_once 'db.php';
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $dob=date("Y/m/d",strtotime($_POST["dob"]));
    $class=$_POST["class"];
    $fathername=$_POST["fathername"];
    $mothername=$_POST["mothername"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $photo=$_FILES["photo"]["name"];
    $fees=$_POST["fees"];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["form1"])) {
      $check = getimagesize($_FILES["photo"]["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
      } else {
        $uploadOk = 0;
      }
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "<script>alert('file not inserted');</script>";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "<script>alert('file inserted');</script>";
      } else {
        echo "<script>alert('file not inserted');</script>";
      }
    }
    $sql1="INSERT INTO `login`(`Rollno`, `dob`) VALUES (null,'$dob')";
    mysqli_query($con,$sql1);
    $sql="INSERT INTO `details`(`Rollno`, `name`, `dob`, `father`, `mothername`, `phone`, `address`,`balancefees`, `class`, `photo`) VALUES (null,'$firstname.$lastname','$dob','$fathername','$mothername','$phone','$address','$fees','$class','$photo')";
    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('data inserted');
        window.location.href='/Dashboard.php';</script>";
    }
    else
    {
        echo"<script>alert('data not inserted');
        window.location.href='/Dashboard.php';</script>";
        echo mysqli_error($con);
    }
}
else
{
    require_once 'db.php';
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $dob=date("Y/m/d",strtotime($_POST["dob"]));
    $degree=$_POST["degree"];
    $fathername=$_POST["fathername"];
    $mothername=$_POST["mothername"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $photo=$_FILES["photo"]["name"];
    $password=$_POST["password"];
    $sql1="INSERT INTO `adminlogin`(`name`,`password`)VALUES('$firstname','$password')";
    mysqli_query($con,$sql1);
    $sql="INSERT INTO `teacherdetails`(`Rollno`, `name`, `dob`, `father`, `mothername`, `phone`, `address`, `degree`, `photo`) VALUES (null,'$firstname.$lastname','$dob','$fathername','$mothername','$phone','$address','$degree','$photo')";
    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('teacher data inserted')
        window.location.href='/Dashboard.php';</script>";
    }
    else
    {
        echo"<script>alert('data not inserted');
        window.location.href='/Dashboard.php';</script>";
    }
}
?>