<?php

session_start();

if($_SESSION["name"]==null)

{

    $name=$_SESSION["name"];

    require_once'db.php';

    $sql="SELECT `name`, `photo` FROM `teacherdetails` WHERE `name`='$name';";

    $result=mysqli_query($con,$sql);

    $row=mysqli_fetch_assoc($result);

?>

<html>

<head>

    <title>Teacher</title>

    <meta charset="en-us">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles.css">

</head>

<style>

  .center{

     display:block;

     margin-left: auto;

     margin-right: auto;

     width:250px;

     height:150px;

     top:12px;

  }

</style>

<body>



<nav class="navbar navbar-expand-md navbar-light">

             <img src="images/06_preview.jpg" id="img" class="img-fluid d-none d-sm-block" width="120px">

                <a href="#"  class="navbar-brand m-2">G.V.C Higher Secondary School<br>

                    <span class="fa fa-envelope"> Gvs@123gmail.com</span><br>

                <span class="fa fa-phone"> +04172 2355 2533</span></a>

                     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navb">

                         <span class="navbar-toggler-icon"></span>

                     </button>

                     <div class="collapse navbar-collapse justify-content-end" id="navb">

                        <ul class="navbar-nav">

                            <li class="nav-item">

                                <a class="nav-link" href="/logout.php">

                                    <span class="fa fa-sign-out"></span> Logout </a>

                            </li>

                        </ul>

                    </div>

           </nav>



    <div class=" mt-2 container dashboard">

        <div class="img">

            <img src=images<?php print($row['photo']) ?> height="100" width="200" class=" center rounded-circle" alt=<?php print($row['photo']) ?>>

            <h3 class="text-center text-primary">Welcome <?php echo $_SESSION["name"]; ?></h3>

        </div>

        <hr>

    <form method="post" action="/dashboard.html" id="myform">

     <div class="form-group">

             <label for="rolllno">Rollno</label>

             <input type="number" class="form-control" name="rollno">

     </div>

     <div class="form-group">

             <label for="name">Name</label>

             <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">

     </div>

     <div class="form-group">

             <label for="class">Class</label>

             <select class="form-control" name="class" id="select">

                <option value=x>X</option>

                <option value="xi">XI</option>

                <option value="xii">XII</option>

             </select>

     </div>

     <div class="form-group">

             <label for="maths">Maths</label>

             <input type="number" class="form-control" name="maths">

     </div>

     <div class="form-group">

             <label for="English">English</label>

             <input type="number" class="form-control" name="english">

     </div>

     <div class="form-group">

             <label for="Tamil">Tamil</label>

             <input type="number" class="form-control" name="tamil">

     </div>

     <div class="form-group">

             <label for="Science">Science</label>

             <input type="number" class="form-control" name="science">

     </div>

     <div class="form-group">

             <label for="Social">Social</label>

             <input type="number" class="form-control" name="social">

     </div>

      <div class="form-group">
          <div class="row">
         <div class="col-4">
         <button class="btn btn-success form-control m-2" onclick="insertdata()">
             <span class="fa fa-database"> Insert</button>
         </div>
         <div class="col-4">
         <button class="btn btn-primary form-control m-2"onclick="updatedata()">
         <span class="fa fa-wrench"></span> Update</button>
         </div>
         <div class="col-4">
         <button class="btn btn-danger form-control m-2"onclick="deletedata()">
         <span class="fa fa-trash"></span> Delete</button>
         </div>
          </div>
     </div>

   </form>

    </div>

</body>

<script src="node_modules/jquery/dist/jquery.min.js"></script>

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="node_modules/popper.js/dist/popper.js"></script>
     <script>
         var form=document.getElementById("myform");
         function insertdata()
         {
            document.getElementById("myform").action="/ksschool/update.php";
            document.getElementById("myform").onsubmit(); 
         }
         function updatetdata()
         {
           document.getElementById("myform").action="/ksschool/markupdate.php";
           document.getElementById("myform").onsubmit(); 
         }
         function deletedata()
         {
           document.getElementById("myform").action="/index.html";
           document.getElementById("myform").onsubmit(); 
         }
     </script>
</html>

<?php 

}

else

{ header("location:/Admin.html");}

?>