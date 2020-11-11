<?php
     include_once '../controller/dbconn.php';
    
        $conn=connect();
 
        session_start();
        $N_id=$_SESSION['id'];
        
     
     $query="SELECT * FROM `tutor` JOIN tutor2 ON tutor2.tutor_id=tutor.tutorId where tutor.tutorId='".$N_id."'";
     $result=  mysqli_query($conn, $query);
     $query3="SELECT * FROM `tutor` JOIN highschoolcourses ON tutor.tutorId=highschoolcourses.tutor_id JOIN kgcourses  ON tutor.tutorId=kgcourses.tutor_id JOIN elemntarycourses ON tutor.tutorId=elemntarycourses.tutor_id";
     $result3=  mysqli_query($conn, $query3);
   ?>

<?php 

    $query = "SELECT * FROM rate,client WHERE Clientid=cliId AND tuId ='$N_id'";
    $commentResult = mysqli_query($conn, $query);

?>


<html>
    <head>
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
     <link href="style.css" rel="stylesheet" id="bootstrap-css">
  
  
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
                <a class="nav-link active" href="index1.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about2.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact1.php">Contact</a>
              </li>
            </ul>
       <ul class="navbar-nav absolute-right">
           
               <li class="nav-item">
                   <a class="nav-link" href="index.html">Log out</a>
              </li>
               <li class="nav-item">
                   <a class="nav-link" href="ratingPage.php">Other tutors</a>
              </li>
                       </ul>
          </div>
        </div>
      </nav></header>
         <!--<div class="container">-->
       <!--<div  class="body mt-5 mb-5" style="margin-left:-10%; margin-right: 100px;">-->     
<section class="my-5" style="margin-left: 200px; margin-right: 250px;">
 <div class="container">
  <input type="hidden" id="L_id" name="L_id"/>
  

<table  class="table table-borderless" id="data2" cellspacing="0">
                <thead>
                  
                </thead>
                <tbody>
           <?php while ($row=  mysqli_fetch_array($result)){ ?>
            <tr>
                
                 <?php
                  $query = "SELECT * FROM rate WHERE tuId ='$row[0]'";
                  $rateResult = mysqli_query($conn, $query);
                  $rate = 0;
                  $count = 0;
                  while($raterow = mysqli_fetch_array($rateResult)){
                      $rate += $raterow['value'];
                      $count +=1;
                  }
                  if($count > 0){
                      $rate = round($rate/$count);
                  }
                ?>
                <!--<td><?php echo $row[0];?></td>-->
                <td>
                    <div class="view overlay rounded z-depth-1 mb-4"style="width:400px; height: 300px">
                        <img class="img-fluid" style="width:400px; height:300px;" src="../Files/img/<?php echo $row[9];?>" alt="Sample image">
                    </div>
      
                    
                <div class="rate" style="margin-left:100px">
                    <input type="radio" value="5" <?php if($rate==5) echo 'checked';?>/>
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio"  value="4" <?php if($rate==4) echo 'checked';?>/>
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio"  value="3" <?php if($rate==3) echo 'checked';?>/>
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio"  value="2" <?php if($rate==2) echo 'checked';?>/>
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" value="1" <?php if($rate==1) echo 'checked';?>/>
                    <label for="star1" title="text">1 star</label>
                    
                </div>
             
        <div class="text-center">
          <!--<a href="" class="btn black darken-3 white-text mr-5 btn-rounded my-3" data-toggle="modal" data-target="#modalContactForm"></a>-->
          <button class="btn btn-black btn-sm">Update Your Profile</button>
        </div>
   </td>
    
    <td>
                <h6 style="margin-left:700px;"></h6>
         
                
         <h5 class="font-weight-bold mb-3"  style="font-size:20px">Name: <?php echo $row[1]?></h5>
         
          <h5 class="font-weight-bold mb-3"  style="font-size:20px">About Me</h5>
          <p class="black-text"  style="font-size:20px"> <?php echo $row[8]?>
          </p>
          
          <br/>
          <h5 class="font-weight-bold mb-3">Education</h5>
          <p class="" style="font-size:20px"><?php echo $row[11]?> </p>
          <p class=""  style="font-size:20px"><?php echo $row[13]?> </p>
          
          <br/>
          <h5 class="font-weight-bold">Pay Per Hour</h5>
          <p class="" style="font-size:20px"><?php echo $row[14]?>Birr</p>
        <?php }?>  
          <h5 class="font-weight-bold mb-3">I Tutor</h5>
          <?php
//            $query="SELECT * FROM kgcourses WHERE tutorId =  tutor_id";
            $query="SELECT * FROM `kgcourses` JOIN tutor ON kgcourses.tutor_id=tutor.tutorId where tutor.email = email AND tutor.password = password";
     
            $result=  mysqli_query($conn, $query);
            $kgrow = mysqli_fetch_array($result);
            
            //elementary
//            $query="SELECT * FROM  WHERE tutor_id = '$N_id'";
            $query="SELECT * FROM `elemntarycourses` JOIN tutor ON elemntarycourses.tutor_id=tutor.tutorId where tutor.email = email AND tutor.password = password";
     
            
            $result=  mysqli_query($conn, $query);
            $elemrow = mysqli_fetch_array($result);
            
            //highschool
//            $query="SELECT * FROM highschoolcourses WHERE tutor_id = '$N_id'";
            $query="SELECT * FROM `highschoolcourses` JOIN tutor ON highschoolcourses.tutor_id=tutor.tutorId where tutor.email = email AND tutor.password = password";
     
            
            $result=  mysqli_query($conn, $query);
            $highrow = mysqli_fetch_array($result);?>
          
            <!--kg-->
            <?php if($kgrow['english'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['english'];?></button>
            <?php  }?>
            <?php if($kgrow['maths'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['maths'];?></button>
            <?php  }?>
            <?php if($kgrow['science'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['science'];?></button>
            <?php  }?>
            <?php if($kgrow['art'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['art'];?></button>
            <?php  }?>
            <?php if($kgrow['music'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['music'];?></button>
            <?php  }?>
            <!--elementary-->
            <?php if($elemrow['english'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['english'];?></button>
            <?php  }?>
            <?php if($elemrow['maths'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['maths'];?></button>
            <?php  }?>
            <?php if($elemrow['science'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['science'];?></button>
            <?php  }?>
            <?php if($elemrow['biology'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['biology'];?></button>
            <?php  }?>
            <?php if($elemrow['physics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['physics'];?></button>
            <?php  }?>
            <?php if($elemrow['chemistry'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['chemistry'];?></button>
            <?php  }?>
            <?php if($elemrow['social'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['social'];?></button>
            <?php  }?>
            <?php if($elemrow['civics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['civics'];?></button>
            <?php  }?>
            <?php if($elemrow['IT'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['IT'];?></button>
            <?php  }?>
            <!--High School-->
            <?php if($highrow['english'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['english'];?></button>
            <?php  }?>
            <?php if($highrow['maths'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['maths'];?></button>
            <?php  }?>
            <?php if($highrow['economics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['economics'];?></button>
            <?php  }?>
            <?php if($highrow['biology'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['biology'];?></button>
            <?php  }?>
            <?php if($highrow['physics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['physics'];?></button>
            <?php  }?>
            <?php if($highrow['chemistry'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['chemistry'];?></button>
            <?php  }?>
            <?php if($highrow['civics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['civics'];?></button>
            <?php  }?>
            <?php if($highrow['IT'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['IT'];?></button>
            <?php  }?>
            <?php if($highrow['business'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['business'];?></button>
            <?php  }?>
            <?php if($highrow['geography'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['geography'];?></button>
            <?php  }?>
            <?php if($highrow['history'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['history'];?></button>
            <?php  }?>
            <?php if($highrow['drawing'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['drawing'];?></button>
            <?php  }?>
            </td>
       </tr>
        
</table>
     <!--comment-->
  <div class="comment" style="margin-right: 250px">
  <hr>
  <h5 class="mt-0 font-weight-bold text-dark">Comments</h5>
  <hr>
<?php while($row = $commentResult->fetch_assoc()){ ?>
        <div class="media mb-3">
        <div class="media-body ">
        <h5 class="mt-0 font-weight-bold blue-text"><?php echo $row['Fullname'] ;?></h5>
          <?php echo $row['comment'] ;?>
        </div>
          </div>
    <?php } ?>
  </div>
    </form>
 
 </div>   
    
</section>
                
        
     </body>
     
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
              <div class="text">
                   <h3 class="heading">Up coming Events</h3>
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
              <a href="https://www.facebook.com/profile.php?id=100022472190840" class="fa fa-facebook p-2"></a>
              <a href="@YewoineshetE" class="fa fa-twitter p-2"></a>
              <a href="https://www.linkedin.com/in/meron-alemu-abate-b1b013188/" class="fa fa-linkedin p-2"></a>
              <a href="https://www.instagram.com/lidu_teshe/" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
     
    
          <!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>
    $(window).on('load', function() {
     var id=sessionStorage.getItem('page1');
//     window.location.href="tutorPage.php?uid="+id;
     document.getElementById('L_id').value=id;
     var profile_viewer_uid = 1;

});
</script>
</html>