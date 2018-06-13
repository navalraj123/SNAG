<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
     <link rel="icon" type="img/png" href="img/log2.jpg">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
     <style>
         body{
             height: 0%;
             background-image: url(img/so.jpg);
         }
          label{
               
         color:#ffffff;
          }
          input[placeholder]{
              color:#2f3542;
          }
          .help-block{
             color:#ffffff;  
          }
          .form-group{
              width:50%;
              margin-left: 10px;
          }
          button{
               margin-left: 10px;
          }
     </style>
 </head>
 <body>
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logoo1.jpg" alt="Logo" width="40px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../indexr.php">Home</a></li>
        
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br></br></br></br>
 <div class="container">
  <div id="output" style="color:#ffffff;"></div>
  <form id="getAttendance">
    <div class="form-group">
      <label>Year of course</label>
      <select name="year" class="form-control">
        <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
      </select>
    </div>
    <div class="form-group">
      <label>Section</label>
      <select name="section" class="form-control">
      <option>1</option><option>2</option>	
    </select>
    </div>
    <div class="form-group">
      <label>Subject Code of Course</label>
      <input type="text" class="form-control" name="code" placeholder="Eg - CSE-216">
      <span class="help-block">DDD-NNN where D : Department , N : Number</span>
    </div>
    <div class="form-group">
      <label>Roll Number</label>
      <input type="text" class="form-control" name="roll" placeholder="Eg - 262/CS/12">
      <span class="help-block">NNN/DD/YY where N : Number, D : Department , Y : Year</span>
    </div>
    <button class="btn btn-primary">Get Results</button>
  </form>
  </div>
<!-- /.container -->
   <!-- FOOTER -->
      <footer style="background:; height:120%;">
        <br><br> <br><br> <br>
        <p>&copy;SNAG Creations 2018&middot;  developed by SNAG Team
     </footer>

    <!-- /.container -->


    
 </body>
</html>
