    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="indexr.php">
              <div class="col-xs-3"><img src="img/logoo1.jpg" alt="Logo" width="50px"></div>
              <div class="col-xs-2"></div>
              <div class="col-xs-3">SNAG</div>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="indexr.php"><i class="fa fa-home"></i>
 Home</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt"></i>
 Categories <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <?php
                  $query = "SELECT * FROM categories ORDER BY id DESC";
                  $run = mysqli_query($con,$query);
                  if(mysqli_num_rows($run) > 0){
                      while($row = mysqli_fetch_array($run)){
                          $category = ucfirst($row['category']);
                          $id = $row['id'];
                          echo "<li><a href='indexr.php?cat=".$id."'>$category</a></li>";
                      }
                  }
                  else{
                      echo "<li><a href='#'>No Categories Yet</a></li>";
                  }
                  ?>
              </ul>
            </li>
              <li><a href="news.php"><i class="glyphicon glyphicon-globe"></i>
 World News</a></li>
            <li><a href="downloads.php"><i class="fa fa-download"></i>
 Downloads</a></li>
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-pencil-square-o"></i>
 Attendance <span class="caret"></span></a>
              <ul class="dropdown-menu">
            <li><a href="prox/student1.php"><i class="fa fa-graduation-cap"></i>
                       Student</a></li>
                        <li><a href="prox/teacher.php"><i class="fa fa-user"></i>
                             Teacher</a></li>
                  
                  
            </ul>
              
              
              </li>
           
              <li><a href="admin/login.php"><i class="fa fa-key"></i>
 Admin Login</a></li>
               <li><a href="contact-us.php"><i class="fa fa-phone"></i>
 Contact Us</a></li>
              
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>