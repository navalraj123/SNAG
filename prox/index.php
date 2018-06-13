<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
     <link rel="icon" type="img/png" href="img/log2.jpg">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
      <style>
         body{
           background-image: url(img/aa4.jpg); 
         }
          h4{
              color: #ffffff;
          }
          a{
              color:#10ac84;
              font-size: 26px;
          }
          h2{
              color: #ffffff;
              margin-top:50px;
          }
          th{
              color: #ffffff;
          }
          tbody{
              opacity: 0.5;
             
              
          }
          label{
               color: #ffffff;
              opacity: 0.8;
          }
          .form-control{
              border: 2px solid #1e90ff;
          }
          table{
              
              border:0px;
          }
     </style>
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="height:0%">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            
             <audio controls autoplay hidden>
  <source src="futurestranger.ogg" type="audio/ogg">
  Your browser does not support the audio tag.
</audio>
          <a class="navbar-brand" href="index.php" ><img src="img/logoo1.jpg" alt="Logo" width="40px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li class="active"><a href="../indexr.php"style="font-size:15px;">Home</a></li>
               
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container"><br>
    <h2>For Students</h2>
    <h4>Click here for <a href="student1.php">Student Dashboard</a></h4>
    <hr>
     <h2>For Faculty</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div> <br><br>
    <table class="table table-bordered table-striped"style="margin-left:25%;width:40%;">
      <thead>
        <tr>
          <th>Login</th>
        </tr>
        <tr>
          <th>
            <form id="login">
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
              <center><button class="btn btn-primary" style="opacity:1.0;">Login</button></center>
            </form>
          </th>
        </tr>
      </thead>
    </table>
  </div>
     <!-- FOOTER -->
      <footer style="background:; height:120%;">
        <br><br>
        <p style=" color: #ffffff;">&copy;SNAG Creations 2018&middot;  developed by SNAG Team
     </footer>

    </div><!-- /.container -->

 </body>
</html>
