<?php
require_once('inc/db.php');
?>



<?php require_once('inc/top.php');?>
  </head>
  <body>
<?php require_once('inc/header.php');?>
    
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1>Contact <span>Us</span></h1>
                <p>We are available 24x7. So Feel Free to Contact Us.</p>
            </div>
        </div>
        <img src="img/a4.jpg" alt="Top Image">
    </div>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCZcB5gZf_adlKbIgXCI4ltdtH4XzVPAm4 '></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmap.org/'>google maps iframe embed</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7398cb24533506b77109ce0a50a7b97f18cc85f9'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(28.349475299999998,77.37273579999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.349475299999998,77.37273579999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Aravali College of Engineering & Management</strong><br>Jasana - Tigaon Road<br> Faridabad<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>
                        <div class="col-md-12 contact-form">
                           <h2>Contact Form</h2><hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="full-name">Full Name*:</label>
                                    <input type="text" id="full-name" name="name"class="form-control" placeholder="Full Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email*:</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                                
                                <div class="form-group">
                                    <label for="website">RollNo:</label>
                                    <input type="text" id="RollNo" name="rollno" class="form-control" placeholder="RollNo">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Messages:</label>
                                    <textarea id="message" cols="30" rows="10" name="message" class="form-control" placeholder="Your Message Should be Here"></textarea>
                                </div>
                                
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </form>
                            <?php
 if(isset($_POST['submit'])){
$n=$_POST['name'];
$e=$_POST['email'];
$r=$_POST['rollno'];
$m=$_POST['message'];
$query="INSERT INTO contact VALUES('$n','$e','$r','$m')";
$data=mysqli_query($con,$query);
if($n!=''&& $e!='' && $r!=''&& $m!=''){

if($data)
{
    echo"Your message has been send";
}
else{
        echo"Sorry, your message is not send ";

}
}
}

?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <?php require_once('inc/sidebar.php');?>                  
                </div>
            </div>
        </div>
    </section>
<?php require_once('inc/footer.php');?>