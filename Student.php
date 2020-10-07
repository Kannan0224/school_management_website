<?php
    require_once 'db.php';
    require_once 'timetable.php';
    $username=$_POST["username"];
    $password=date_format( new DateTime($_POST["password"]) ,"Y-m-d");
    $sql="SELECT `Rollno`, `dob` FROM `login` WHERE Rollno='$username' &&  dob='$password'";
    $row=mysqli_query($con,$sql);
    if(mysqli_num_rows($row)>0)
    {
       $sql1="SELECT `Rollno`,`name`, `dob`, `father`, `phone`, `address`, `class`, `teacher`, `photo`, `id` FROM `details` WHERE Rollno='$username'";
       $result=mysqli_query($con,$sql1);
       $rows=mysqli_fetch_assoc($result);
       $sql2="SELECT `rollno`, `tamil`, `english`, `maths`, `science`, `social`, `total` FROM `xmark` WHERE `Rollno`='$username'";
       $result1=mysqli_query($con,$sql2);
       $mark=mysqli_fetch_assoc($result1);
    }
    else
    {
        echo"<script>alert('Login failed');window.location.href='/ksschool/Student.html';</script>";
    }
?>

<html>
    <head>
        <title>Student page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
    </head>  
    <style>
        body{
            background-color:lightpink;
        }
        </style>
    <body>
<header>
    <nav class="navbar navbar-expand-md navbar-light">
            <img src="images/06_preview.jpg" id="img" class="img-fluid" width="120px">
               <a href="#"  class="navbar-brand m-2">G.V.C Higher Secondary School<br>
                   <span class="fa fa-envelope"> Gvs@123gmail.com</span><br>
               <span class="fa fa-phone"> +04172 2355 2533</span></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navb">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navb">
                       <ul class="navbar-nav">
                           <li class="nav-item">
                               <a class="nav-link" href="/ksschool/Student.html">
                                  <span class="fa fa-sign-out"> Logout</span></a>
                           </li>
                       </ul>
                   </div>
          </nav>
</header>
          <section>
              <div class="container bg-white" id="listdetails">
                  <div class="navbar navbar-light bg-primary mt-2">
                          <a href="#profile" class="nav-link" onclick="clk(1)">Profile</a>
                          <a href="#timetable" class="nav-link" onclick="clk(2)">Time Table</a>
                          <a href="#notify" class="nav-link"onclick="clk(3)">Notification</a>
                          <a href="#results" class="nav-link" onclick="clk(4)">Exam Result</a>
                          <a href="#progress" class="nav-link"onclick="clk(5)">Progess Report</a>
                  </div>
                   <div id="profile">
                   <br>
                     <h3 class="text-primary text-center">Student profile</h3>
                     <hr>
                     <br>
                     <table width="100%" class="table table-striped">
                         <tr>
                             <th>Photo</th>
                             <th><img src=images/<?php print($rows['photo'])?> width="200" height="150"></th>
                         </tr>
                         <tr>
                             <th>Name</th>
                             <th><?php print($rows['name']) ?></th>
                         </tr>
                         <tr>
                             <th>FatherName</th>
                             <th><?php print($rows['father']) ?></th>
                         </tr>
                         <tr>
                             <th>Mobile No</th>
                             <th><?php print($rows['phone']) ?></th>
                         </tr>
                         <tr>
                             <th>Class</th>
                             <th><?php print($rows['class']) ?></th>
                         </tr>
                         <tr>
                             <th>D.O.B</th>
                             <th><?php print($rows['dob']) ?></th>
                         </tr>
                         <tr>
                             <th>Address</th>
                             <th><?php print($rows['address'])?></th>
                         </tr>
                     </table>
                  </div>
                  
                  <div id="timetable" class="d-none">
                      <h3 class="text-danger text-center">Time Table</h3>
                      <hr>
                      <table class="table table-striped table-responsive-sm table-responsive-md" width="100%">
                         <thead class="bg-secondary">
                             <tr>
                                 <th>Days</th>
                                 <th>I</th>
                                 <th>II</th>
                                 <th>III</th>
                                 <th>IV</th>
                                 <th>V</th>
                                 <th>VI</th>
                                 <th>VII</th>
                                 <th>VIII</th>
                             </tr>
                         </thead>
                         <tbody>
                            <tr>
                                <th>monday</th>
                                <?php 
                                foreach($mdata as $key=>$values)
                                {
                                    echo "<th>".$values."</th>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <th>Tuesday</th>
                                <?php 
                                foreach($tdata as $key=>$values)
                                {
                                    echo "<th>".$values."</th>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <th>Wednesday</th>
                                <?php 
                                foreach($wdata as $key=>$values)
                                {
                                    echo "<th>".$values."</th>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <th>Thursday</th>
                                <?php 
                                foreach($thdata as $key=>$values)
                                {
                                    echo "<th>".$values."</th>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <th>Friday</th>
                                <?php 
                                foreach($fdata as $key=>$values)
                                {
                                    echo "<th>".$values."</th>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <th>Staurday</th>
                                <?php 
                                foreach($sdata as $key=>$values)
                                {
                                    echo "<th>".$values."</th>";
                                }
                                ?>
                            </tr>
                        </tbody>
                      </table>
                      <br>
                    </div>

                    <div id="notify" class="d-none">
                        <h3 class="text-primary text-center">Notification</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li>* tommorw we have conduct a small program </li>
                            <li>* 12-06-2000 Wednesday parents meeting</li>
                            <li></li>
                            <li></li>
                       </ul>
                    </div>

                    <div id="results" class="d-none">
                        <h3 class="text-primary text-center">Exam Result</h3>
                        <hr>
                        <h3 class="text-secondary text-center">
                            Name: <?php print($rows['name'])?> / RollNo: <?php print($mark['rollno'])?>
                        </h3>
                         <table class="table table-hover table-bordered">
                             <tr class="bg-secondary text-white">
                                 <th>subject</th>
                                 <th>mark</th>
                             </tr>
                             <tr>
                                 <th>Maths</th>
                                 <th><?php print($mark['maths'])?>/100 </th>
                             </tr>
                             <tr>
                                 <th>Science</th>
                                 <th><?php print($mark['science'])?>/100</th>
                             </tr>
                             <tr>
                                 <th>social</th>
                                 <th><?php print($mark['social'])?>/100</th>
                             </tr>
                             <tr>
                                 <th>English</th>
                                 <th><?php print($mark['english'])?>/100</th>
                             </tr>
                             <tr>
                                 <th>Tamil</th>
                                 <th><?php print($mark['tamil'])?>/100</th>
                             </tr>
                             <tr>
                                 <th>Total</th>
                                 <th rowspan="2" class="text-success"> 
                                 <?php print($mark['total'])?> out of 500
                                    </th>
                             </tr>
                        </table>
                        <br>
                        <button class="btn btn-secondary text-center offset-4 offset-md-5 mb-4" onclick="printer()">
                            <span class="fa fa-print"></span> Print</button>
                        <br>
                    </div>

                    <div id="progress" class="d-none">
                        <h3 class="text-primary text-center">Progress Result</h3>
                        <br>
                         <table class="table table-hover table-bordered">
                             <tr style="background-color: gray;color:white">
                                 <th>Progress</th>
                                 <th>Report</th>
                            </tr>
                            <tr>
                                <th>Rank</th>
                                <th>4th</th>
                            </tr>
                            <tr>
                                <th>Attendence percentage</th>
                                <th>22/25 (days) </th>
                            </tr>
                            <tr>
                                <th>Student status</th>
                                <th><span class="fa fa-check"></span> Good</th>
                            </tr>
                        </table>
                    </div>
              </div>

          </section>
    </body>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script>
      var profile=document.getElementById("profile");
      var timetable=document.getElementById("timetable");
      var notify=document.getElementById("notify");
      var progress=document.getElementById("progress");
      var result=document.getElementById("results");
      function printer()
      {
          window.print();
      }
       function clk(value)
       {
           switch(value)
           {
               case 1:
                 profile.classList.remove("d-none");
                 timetable.classList.add("d-none");
                 notify.classList.add("d-none");
                 progress.classList.add("d-none");
                 result.classList.add("d-none");
                 break;

               case 2:
                 profile.classList.add("d-none");
                 timetable.classList.remove("d-none");
                 notify.classList.add("d-none");
                 progress.classList.add("d-none");
                 result.classList.add("d-none");
                 break;

               case 3:
                 profile.classList.add("d-none");
                 timetable.classList.add("d-none");
                 notify.classList.remove("d-none");
                 progress.classList.add("d-none");
                 result.classList.add("d-none");
                 break;

               case 5:
                 profile.classList.add("d-none");
                 timetable.classList.add("d-none");
                 notify.classList.add("d-none");
                 progress.classList.remove("d-none");
                 result.classList.add("d-none");
                 break;

               case 4:
                 profile.classList.add("d-none");
                 timetable.classList.add("d-none");
                 notify.classList.add("d-none");
                 progress.classList.add("d-none");
                 result.classList.remove("d-none");
                 break;
              default:
                  alert("Wrong choose ");
                  break;
           }
       }
    </script>
</html>