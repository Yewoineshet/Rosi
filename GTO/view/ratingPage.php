<?php 
     include_once '../controller/dbconn.php'; 
    
     $conn=connect();
     $query="SELECT * FROM `tutor` JOIN tutor2 ON tutor2.tutor_id=tutor.tutorId";
     $result=  mysqli_query($conn, $query);
     
?>

<html>
        
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
    
  <style>
     td:nth-of-type(1) {
display: none;
}
/*.view{
    margin: -15%;
}*/
 </style>
 
    </head>
    
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
                          <a class="nav-link active" href="shome.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="sabout.php">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="scontact.php">Contact</a>
              </li>
<!--              <li class="nav-item">
                  <a class="nav-link" href="ratingPage.php">Tutors</a>
              </li>-->
            </ul>
               <ul class="navbar-nav absolute-right">
           
               <li class="nav-item">
                   <a class="nav-link" href="index.html">Log out</a>
              </li>
                <li class="nav-item">
                   <a class="nav-link" href="ratingPage.php">view tutor</a>
              </li>
          </ul>
          </div>
        </div>
      </nav>    </header>
  

      <body>
          <div class="container">
              <div class="view">
         <form action="../model/passtest.php" method="post" id="bb">
             <input type="hidden" id="N_id" name="N_id"/>
        <div  class="body mt-5 mb-5" style="margin-left:-10%; margin-right: 100px;">  
            
           <table  class="table ml-5 table-borderless" id="data2" cellspacing="0">
                <thead>
                    <tr hidden="true">
                        <th>dsa</th> 
                         <th>dsa</th> 
                         <th>dsa</th> 
                    </tr>
                </thead>
               
           <?php while ($row=  mysqli_fetch_array($result)){?>
                 <tbody>
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
                <td><?php echo $row[0];?></td>
                <td>
                    
                    <div class="view overlay rounded z-depth-1 mb-4" style="width:300px; height: 200px; margin-left: 150px;">
                        <img class="img-fluid" style="width:300px; height:200px;" src="../Files/img/<?php echo $row[9];?>" alt="Sample image">
                    </div>
                </td>
            
                <td>
                    
                    <div class="" >
                    <h6 style="margin-left:700px;"  ></h6>
                    <h6 class="font-weight-bold"  style="font-size:20px"><?php echo $row[1]?></h6>
                    <h6 class="" style="font-size:20px"><?php echo $row[11]?></h6>
                    <h6 class="" style="font-size:20px"><?php echo $row[13]?></h6>
                    <h6 class="font-weight-bold" class="" style="font-size:20px">Birr <?php echo $row[14]?></h6>
                    
                 <div class="rate">
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
                    <br/>  <button class="btn btn-black btn-sm">See detail</button>
                  </div>  
                    </td> 
                   </tr>
                   </tbody>
                <?php }?>
             </table>
        </div>
            </form>
      </div>
          </div>
    </body>
    
        <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
         
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="shome.php">Home</a></li>
                  <li><a href="sabout.php">About Us</a></li>
                  <!--<li><a href="registertration.html">Registration</a></li>-->
                                   <li><a href="scontact.php">Contact</a></li>
                  <!-- <li><a href="#">Pages</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
    
            <div class="block-21 d-flex mb-4">
<!--                <h3 class="heading">Up coming</h3>-->
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
<script src="js/addons/rating.js"></script>
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

 
  <script>
        // Rating Initialization
    $(document).ready(function() {
      $('#rateMe4').mdbRate();

    });
  </script>
  <script>
      $(document).ready(function () {
          
$('#data2').DataTable();
$('.dataTables_length').addClass('bs-select');
});
 

  </script>
  <script>
 var row1=document.getElementById('data2'),rIndex;
 for(var i=0;i<row1.rows.length;i++){
     row1.rows[i].onclick=function (){
         rIndex=this.rowIndex;
//            console.log(rIndex);
           var name=this.cells[0].innerHTML;
           //sessionStorage.setItem("page1",name);
           document.getElementById('N_id').value=name;
         

     };
 }
//
                  </script>
  
</html>