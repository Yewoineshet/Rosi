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
          <img src="..\view\img\logo.PNG" class="rounded-circle z-depth-0"
                alt="avatar image" height="60" width="60"> </a> 
            <a class="navbar-brand absolute" href="index.html">Get tutor here!</a>
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
<section class="my-5" style="margin-left: 200px; margin-right: 250px;">

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
      
                    
                
             
        <div class="text-center">
          <!--<a href="" class="btn black darken-3 white-text mr-5 btn-rounded my-3" data-toggle="modal" data-target="#modalContactForm"></a>-->
          <button class="btn btn-black btn-sm">Change profile photo</button>
        </div>
   </td>
    
    <td>
                <h6 style="margin-left:700px;"></h6>
         
                
                <h5 class="font-weight-bold mb-4"  style="font-size:20px">Name:</h5>  <input  name= "fullname" required="fullname" type="text" id="name" class="form-control py-2" value="<?php echo $row[1]?>">
               
                <br>
                
          <h5 class="font-weight-bold mb-4"  style="font-size:20px">About Me</h5>
          
           <textarea name="story" required="story" class="form-control" id="exampleFormControlTextarea3" rows="7" ><?php echo $row[8]?></textarea>
       
          
          <br/>
          <h5 class="font-weight-bold mb-4">Education</h5>
          <select name="eduStatus" required="Education Status" class="browser-default custom-select">
                        
                        <option selected><?php echo $row[11]?> <span aria-hidden="true" style="color:red" >*</span></option>
                        <option value="Highschool">High School</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Bachelor Degree">BSc</option>
                        <option value="Masters Degree">MSc</option>
                        <option value="Postgraduate Doctoral Degree">PHd</option>
                      
                    </select>
               <div class="row">
                <div class="col-md-12 mt-3 form-group">
                    <h5 class="font-weight-bold mb-4">Name of School, And Field of Study</h5> 
                    <input name="school" required="Name of School, And Field of Study" type="text" id="name" class="form-control py-2" value="<?php echo $row[13]?>">
               
                </div> 
                </div>
        
          
          <br/>
          <h5 class="font-weight-bold">Pay Per Hour</h5>
           <input name="pay" required="Pay Per Hour" type="text" id="pay" class="form-control py-2" value="<?php echo $row[14]?>">
               
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
            
            <button class="btn btn-sm  btn-outline-success" data-toggle="modal" data-target="#add" id="add"><i class="fa fa-plus"></i> Add</button>
          
            </td>
       </tr>
        
</table>
     <!--comment-->
    <!-- Button trigger modal -->


<!-- Modal -->
<
 
    
    
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
                  <li><a href="home.php">Home</a></li>
                  <li><a href="about1.html">About Us</a></li>
                  <li><a href="registertration.html">Registration</a></li>
                                   <li><a href="contact.html">Contact</a></li>
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
     
    
          <!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="MDB-Free_4.8.2/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="MDB-Free_4.8.2/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="MDB-Free_4.8.2/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="MDB-Free_4.8.2/js/mdb.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>
<script>
    $('#add').click(function(){
        alert('alert');
    });
        
    
</script>
<script>
    $(window).on('load', function() {
     var id=sessionStorage.getItem('page1');
//     window.location.href="tutorPage.php?uid="+id;
     document.getElementById('L_id').value=id;
     var profile_viewer_uid = 1;

});
</script>
</body>
</html>