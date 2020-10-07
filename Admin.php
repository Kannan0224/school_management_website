<?php

    session_start();

    if(require_once 'db.php')

    {

    $username=$_POST["username"];

    $password=$_POST["password"];

    $_SESSION["adminname"]=$username;

    $date=date("Y/m/d");

    $time=date(" h:i:sa");

    $sql="SELECT `name`,`password` from adminlogin where name='$username'&& password='$password'";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0)

    {

       if($username=='Kannan')

       {

        echo"

        <script>

        alert('Welcome Admin');

        window.location.href='/Dashboard.php';

        </script>";

       }

       else

       {   

        $_SESSION["name"]=$username;

        $sqlinsert="INSERT INTO `logindetails`(`name`, `time`,`date`) VALUES('$username','$time','$date')";

        if(mysqli_query($con,$sqlinsert))

        {header("location:/Teacher.php");}

        else

        {
           echo"

            <script>

            alert('Server Problem Try Again Later');

            window.location.href='/Admin.html';

            </script>";

        }

      }

    }

    else

    {

        echo"

        <script>

        alert('Login failed');

        window.location.href='/Admin.html';

        </script>";

    }

}

else

{

    echo"

    <script>

    alert('Login failed');

    window.location.href='/Admin.html';

    </script>";

}

?>