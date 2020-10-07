            <?php

            require_once 'db.php';

            ?>

<html>

    <head>

        <title>Dashboard</title>

        <meta charset="en-us">

        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="styles.css">

    </head>

    <style>

    body{

        background-color: #f1f3f6;

        box-sizing: border-box;

    }

    a:hover

    {

        text-decoration: none;

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

                            <li class="nav-item active">

                                <a class="nav-link" href="javascript:void(0)">

                                    <span class="fa fa-home"></span> Home</a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" href="/Aboutus.html">

                                  <span class="fa fa-calendar-o"></span> About us</a>

                          </li>

                          <li class="nav-item">

                              <a class="nav-link" href="/Galary.html">

                                  <span class="fa fa-file-image-o"></span> Galary</a>

                          </li>

                          <li class="nav-item">

                              <a class="nav-link" href="/Student.html">

                                  <span class="fa fa-user"></span> Student</a>

                          </li>

                          <li class="nav-item">

                              <a class="nav-link" href="/Admin.html">

                                  <span class="fa fa-lock"></span> Admin</a>

                          </li>

                        </ul>

                    </div>

           </nav>



        <div class="container-fluid">

            <div class="container mt-3">

                <div class="row">

                    <div class="col-12  col-md-4">

                          <div class="name">

                             <div class="row">

                                <div class="col-3">

                                  <img src="images/adminlogo.jpg" class="img-fluid img-rounded">

                                </div>

                                <div class="col-9">

                                   <h4><small>Hello</small></h4>

                                   <h3>KANNAN A</h3>

                                </div>

                             </div>

                          </div>

                          <hr>

                          <div class="dashlist">

                             <div class="row">

                                 <h5 class="text-center text-primary"><span class="fa fa-info-circle" onclick="display('status')"><a href="javascript:void(0)">Status</a></span>

                                </h5>

                             </div>

                             <hr>

                             <div class="row">

                                 <h5 class="text-center text-primary"><span class="fa fa-info-circle" onclick="display('student')"><a href="javascript:void(0)">Student</a></span></h5>

                             </div>

                             <hr>

                             <div class="row">

                                 <h5 class="text-center text-primary"><span class="fa fa-info-circle" onclick="display('teacher')"><a href="javascript:void(0)">Teacher</a></span></h5>

                             </div>

                          </div>

                     </div>

                    <div class="col-12 col-md-8 dashboard mt-3">

                       <div class="mt-3" id="admissionform">

                            <h4 class="text-primary text-center">Student Admission Form</h4>

                            <hr>

                           <form method="post" action="admincontrol.php" enctype="multipart/form-data">

                               <div class="form-group">

                                   <div class="row">

                                       <div class="col-6">

                                       <label for="firstname">FirstName</label>

                                       <input type="text" class="form-control" id="firstname"name="firstname" placeholder="John">

                                       </div>

                                       <div class="col-6">

                                       <label for="lastname">LastName</label>

                                       <input type="text" class="form-control" id="lastname" name="lastname" placeholder="R">

                                       </div>

                                   </div>

                               </div>

                               <div class="form-group">

                                       <label for="dob">D.O.B</label>

                                       <input type="date" class="form-control" id="date"name="dob">

                               </div>

                               <div class="form-group">

                                       <label for="firstname">FatherName</label>

                                       <input type="text" class="form-control" id="fathername"name="fathername" placeholder="James">

                               </div>

                               <div class="form-group">

                                       <label for="firstname">MotherName</label>

                                       <input type="text" class="form-control" id="mothername"name="mothername" placeholder="Faina">

                               </div>

                               <div class="form-group">

                                       <label for="option">Class</label>

                                       <select class="form-control" name="class" id="select">

                                           <option value="x">X</option>

                                           <option value="xi">XI</option>

                                           <option value="xii">XII</option>

                                       </select>

                               </div>

                               <div class="form-group">

                                   <label for="textarea">Address</label>

                                   <textarea row="5" class="form-control" name="address"></textarea>

                               </div>

                               <div class="form-group">

                                       <label for="firstname">MobileNumber</label>

                                       <input type="number" min="0" class="form-control" id="phonenumber"name="phone" placeholder="9876543210">

                               </div>

                               <div class="form-group">

                                    <label for="photo">Photo</label>

                                    <input type="file" class="form-control" id="photo"name="photo">

                               </div>

                               <div class="form-group">

                                    <label for="Fees">Fees Paid:</label>

                                     <input type="number" id="fees" name="fees" class="form-control">

                                </div>

                                <div class="form-group">

                                   <button class="btn btn-success form-control m-1" name="form1">Upload</button>

                               </div>

                             </form>

                        </div>

                        <div class="mt-3 d-none" id="teacher">

                        <h4 class="text-primary text-center">Teacher Admission From</h4>

                            <hr>

                           <form method="post" action="admincontrol.php" enctype="multipart/form-data">

                               <div class="form-group">

                                   <div class="row">

                                       <div class="col-6">

                                       <label for="firstname">FirstName</label>

                                       <input type="text" class="form-control" id="firstname"name="firstname" placeholder="John">

                                       </div>

                                       <div class="col-6">

                                       <label for="lastname">LastName</label>

                                       <input type="text" class="form-control" id="lastname" name="lastname" placeholder="R">

                                       </div>

                                   </div>

                               </div>

                               <div class="form-group">

                                       <label for="dob">D.O.B</label>

                                       <input type="date" class="form-control" id="date"name="dob">

                               </div>

                               <div class="form-group">

                                       <label for="firstname">FatherName</label>

                                       <input type="text" class="form-control" id="fathername"name="fathername" placeholder="James">

                               </div>

                               <div class="form-group">

                                       <label for="firstname">MotherName</label>

                                       <input type="text" class="form-control" id="mothername"name="mothername" placeholder="Faina">

                               </div>

                               <div class="form-group">

                                       <label for="option">Degree</label>

                                      <input type="text" name="degree" class="form-control">

                               </div>

                               <div class="form-group">

                                   <label for="textarea">Address</label>

                                   <textarea row="5" class="form-control" name="address"></textarea>

                               </div>

                               <div class="form-group">

                                       <label for="firstname">MobileNumber</label>

                                       <input type="number" min="0" class="form-control" id="phonenumber"name="phone" placeholder="9876543210">

                               </div>

                               <div class="form-group">

                                    <label for="photo">Photo</label>

                                    <input type="file" class="form-control" id="photo"name="photo">

                               </div>

                               <div class="form-group">

                                    <label for="password">password:</label>

                                    <input type="text" class="form-control" id="password"name="password">

                               </div>

                                <div class="form-group">

                                   <button class="btn btn-success form-control m-2">Upload</button>

                               </div>

                             </form>

                        </div>



                        <div class="mt-3 d-none" id="status">

                            <div class="row">

                                <div class="col-12">

                                    <h3 class="text-primary text-center">Student Status</h3>

                                    <hr>

                                </div>

                                <div class="col-12">

                                    <canvas id="mycanvas"></canvas>

                                </div>

                            </div>

                            <hr>

                            <div class="row">

                                <div class="col-12">

                                    <h3 class="text-primary text-center">Teacher Status</h3>

                                    <hr>

                                </div>

                                <div class="col-12">

                                    <canvas id="mycanvas1"></canvas>

                                </div>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>



        <div class="row bg-dark mt-3">

            <div class="offset-5">

              <p class="text-white">Copyright &copy; KS </p>

            </div>

        </div>



    </body>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="node_modules/popper.js/dist/popper.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>

    <script>

        var admission=document.getElementById("admissionform");

        var teacher=document.getElementById("teacher");

        var student=document.getElementById("status");

        function display(data)

        {

            switch(data)

            {

                case "teacher":

                        teacher.classList.remove("d-none");

                        admission.classList.add("d-none");

                        student.classList.add("d-none");

                        break;

                case "student":

                        teacher.classList.add("d-none");

                        admission.classList.remove("d-none");

                        student.classList.add("d-none");

                        break;

                case "status":

                        teacher.classList.add("d-none");

                        admission.classList.add("d-none");

                        student.classList.remove("d-none");

                        break;       

            }

        }

    </script>

    <script src="canvas.js"></script>

</html>

