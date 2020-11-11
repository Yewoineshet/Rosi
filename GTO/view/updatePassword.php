<?php

//session_start();
//include_once('./template/adminheader.php');
include_once '../controller/dbconn.php';
if(isset($_POST[btnChange]))
{
	$sql = "UPDATE `tutor` SET `password`='$_POST[nPassword]'WHERE email = $emai";
        
	$qsql= mysqli_query($con,$sql);
	if($qsql)
	{
		$output = "Successfully Changed";
	}
	else
	{
		$output = "Failed To Change";
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>contact us </title>
    
        
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link href="uni/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="uni/css/style.css" rel="stylesheet">
   <!-- Theme Style -->
  <link rel="stylesheet" href="uni/css/style.css">
  
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="uni/css/bootstrap.css">
    <link rel="stylesheet" href="uni/css/animate.css">
    <link rel="stylesheet" href="uni/css/owl.carousel.min.css">

    <link rel="stylesheet" href="uni/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="uni/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="uni/fonts/flaticon/font/flaticon.css">
     <link href="uni/css/bootstrap.min.css" rel="stylesheet">
     </head>
  <body>
    
     <header role="banner">       
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            
       <a class="nav-link p-0" href="#">
          <img src="..\view\img\ulogo.PNG" class="rounded-circle z-depth-0"
               alt="avatar image" height="60" width="60"> </a> 
            <a class="navbar-brand absolute" href="index.html">ROSI,Get tutor here!</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                          <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about1.html">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
         </div>
        </div>
      </nav>
    </header>
  
    <section class="site-section element-animate" style="text-align:center">
      <div class="container text-align:center">
        <div class="row">
          <div class="col-md-8 pr-md-5">
              <form id="contact-form" action="updatePassword.php" method="post" novalidate>
    <div style="text-align:center">
        <h3 class="heading mb-5 ">Change Password</h3></div>
  <div class="form-group row">
   
    <!-- Default input -->
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="Email" class="form-control " id="inputEmail3" placeholder="Enter your Email">
    </div>
  </div>
 <div class="form-group row">
    <!-- Default input -->
    <label for="Name" class="col-sm-2 col-form-label">New Password</label>
    <div class="col-sm-10">
        <input type="password" name="oPassword" class="form-control" id="inputPassword3" placeholder="new password">
    </div>
  </div>

 <div class="form-group row">
    <!-- Default input -->
    <label for="Name" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
        <input type="password" name="cPassword" class="form-control" id="inputPassword3" placeholder="confirm password">
    </div>
  </div>

     <button name="btnChange"  type="submit" class="btn btn-black" style="background-color:whitesmoke;text-color:white;margin-left:auto;margin-right:auto;display:block;margin-bottom:0%">submit</button>
  <p style="color:green;"><?php echo $output;?></p>
 </form>
          </div>
          
        </div>

      </div>
    </section>
      <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
         
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about1.html">About Us</a></li>
                  <li><a href="registration.php">Registration</a></li>
                                   <li><a href="contact.php">Contact</a></li>
                  <!-- <li><a href="#">Pages</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
    
            <div class="block-21 d-flex mb-4">
<!--                <h3 class="heading">Up coming</h3>-->
              <div class="text">
                   <h3 class="heading">Up coming</h3>
                <h3 class="heading mb-0"><a href="#">Registration and service providers training </a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> September  29, 201</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Selection  </a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> October  12, 201</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">AAIT. ARADA SUB CITY, ADDIS ABAB, ETHIOIA,</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+251 3883 6996</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">Rosi2019@gmail.com</span></a></li>
                <!-- <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li> -->
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="index.php" target="_blank" class="text-primary">ROSI</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END section -->
    <script src="uni/js/jquery-3.2.1.min.js"></script>
    <script src="uni/js/jquery-migrate-3.0.0.js"></script>
    <script src="uni/js/popper.min.js"></script>
    <script src="uni/js/bootstrap.min.js"></script>
    <script src="uni/js/owl.carousel.min.js"></script>
    <script src="uni/js/jquery.waypoints.min.js"></script>
    <script src="uni/js/jquery.stellar.min.js"></script>
    <script src="uni/js/jquery.animateNumber.min.js"></script>    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="uni/js/google-map.js"></script>    
    <script src="uni/js/main.js"></script>
  </body>
</html>

