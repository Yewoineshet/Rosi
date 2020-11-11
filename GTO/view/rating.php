<?php
include_once '../controller/dbconn.php';
session_start();
$pho = $_SESSION['pho'];
$conn = connect();
$query = "select * from tutor where phoneno='" . $pho . "'";
$result = mysqli_query($conn, $query);




$output = "";
if (isset($_POST['regBtn'])) {
    include_once('../Controller/KgController.php');
    include_once('../Controller/ElemntaryController.php');
    include_once('../Controller/GradeController.php');
    include_once('../Controller/HighSchoolController.php');
    include_once('../Controller/Tutor2Controller.php');

    include_once('../Model/Tutor2.php');
    include_once('../Model/TutorA.php');
    include_once('../Model/TutorB.php');
    include_once('../Model/TutorC.php');
    include_once('../Model/TutorD.php');

    $kgController = new KgController();
    $elemntaryController = new ElemntaryController();
    $highSchoolController = new HighSchoolController();
    $gradeController = new GradeController();
    $tutor2Controller = new Tutor2Controller();

    $target = "../Files/doc/" . basename($_FILES['cv']['name']);
    
    $result = mysqli_query($conn, $query);
        while ($row1 = mysqli_fetch_array($result)) {
          
    
    $tutor2 = new Tutor2(0, $_POST['eduStatus'], $_POST['experience'], $_POST['school'], $_POST['pay'], $_FILES['cv']['name'], $row1[0]);
        }
        $output = $tutor2Controller->addTutor2($tutor2);   

//                 $_POST['elemntary']
    //$_POST['highschool']


    // if ($_POST['kg_hidden'] == 1 && $_POST['elem_hidden'] == 2 && $_POST['high_hidden'] == 3) {

    
    //     if (!isset($_POST['KG_english']))
    //         $_POST['KG_english'] = "";
    //     if (!isset($_POST['KG_maths']))
    //         $_POST['KG_maths'] = "";
    //     if (!isset($_POST['KG_science']))
    //         $_POST['KG_science'] = "";
    //     if (!isset($_POST['KG_art']))
    //         $_POST['KG_art'] = "";
    //     if (!isset($_POST['KG_music']))
    //     $_POST['KG_music'] = "";
        
         
   
    //     if (!isset($_POST['EL_english']))
    //         $_POST['EL_english'] = "";
    //     if (!isset($_POST['EL_maths']))
    //         $_POST['EL_maths'] = "";
    //     if (!isset($_POST['EL_science']))
    //         $_POST['EL_science'] = "";
    //     if (!isset($_POST['EL_civics']))
    //         $_POST['EL_civics'] = "";
    //     if (!isset($_POST['EL_social']))
    //         $_POST['EL_social'] = "";
    //     if (!isset($_POST['EL_biology']))
    //         $_POST['EL_biology'] = "";
    //     if (!isset($_POST['EL_physics']))
    //         $_POST['EL_physics'] = "";
    //     if (!isset($_POST['EL_chemistry']))
    //         $_POST['EL_chemistry'] = "";
    //     if (!isset($_POST['EL_computer']))
    //       $_POST['EL_computer'] = "";
    
    
    //     if (!isset($_POST['HI_maths']))
    //         $_POST['HI_maths'] = "";
    //     if (!isset($_POST['HI_computer']))
    //         $_POST['HI_computer'] = "";
    //     if (!isset($_POST['HI_english']))
    //         $_POST['HI_english'] = "";
    //     if (!isset($_POST['HI_biology']))
    //         $_POST['HI_biology'] = "";
    //     if (!isset($_POST['HI_physics']))
    //         $_POST['HI_physics'] = "";
    //     if (!isset($_POST['HI_chemistry']))
    //         $_POST['HI_chemistry'] = "";
    //     if (!isset($_POST['HI_economics']))
    //         $_POST['HI_economics'] = "";
    //     if (!isset($_POST['HI_business']))
    //         $_POST['HI_business'] = "";
    //     if (!isset($_POST['HI_geography']))
    //         $_POST['HI_geography'] = "";
    //     if (!isset($_POST['HI_history']))
    //         $_POST['HI_history'] = "";
    //     if (!isset($_POST['HI_civics']))
    //         $_POST['HI_civics'] = "";
    //     if (!isset($_POST['HI_drawing']))
    //       $_POST['HI_drawing'] = "";

    


    //     while ($row1 = mysqli_fetch_array($result)) {
    //         $tutora = new TutorA(0, $_POST['KG_english'], $_POST['KG_maths'], $_POST['KG_science'], $_POST['KG_art'], $_POST['KG_music'], $row1[0]);
    //         $tutorc = new TutorC(0, $_POST['HI_maths'], $_POST['HI_english'], $_POST['HI_computer'], $_POST['HI_biology'], $_POST['HI_physics'], $_POST['HI_chemistry'], $_POST['HI_economics'], $_POST['HI_business'], $_POST['HI_geography'], $_POST['HI_history'], $_POST['HI_civics'], $_POST['HI_drawing'], $row1[0]);
    //         $tutorb = new TutorB(0, $_POST['EL_english'], $_POST['EL_maths'], $_POST['EL_science'], $_POST['EL_civics'], $_POST['EL_social'], $_POST['EL_biology'], $_POST['EL_physics'], $_POST['EL_chemistry'], $_POST['EL_computer'], $row1[0]);
    //         $tutor2 = new Tutor2(0, $_POST['eduStatus'], $_POST['experience'], $_POST['school'], $_POST['pay'], $_FILES['cv']['name'], $row1[0]);
    //     }
    //     $tutord = new TutorD(0, $_POST['kg'], $_POST['elemntary'], $_POST['highschool']);
    //     $output = $gradeController->addTutorD($tutord);
    //     $output = $kgController->addTutorA($tutora);

    //     $output = $elemntaryController->addTutorB($tutorb);
    //     $output = $highSchoolController->addTutorC($tutorc);
    //     $output = $tutor2Controller->addTutor2($tutor2);
        
    //    } 

    if ($_POST['elem_hidden'] == 2) {

        if (!isset($_POST['EL_english']))
            $_POST['EL_english'] = "";
        if (!isset($_POST['EL_maths']))
            $_POST['EL_maths'] = "";
       if (!isset($_POST['EL_biology']))
            $_POST['EL_biology'] = "";
       if (!isset($_POST['EL_physics']))
            $_POST['EL_physics'] = "";
       if (!isset($_POST['EL_chemistry']))
            $_POST['EL_chemistry'] = "";
        if (!isset($_POST['EL_science']))
            $_POST['EL_science'] = "";
       if (!isset($_POST['EL_social']))
            $_POST['EL_social'] = "";
        if (!isset($_POST['EL_civics']))
            $_POST['EL_civics'] = "";
       if (!isset($_POST['EL_computer']))
            $_POST['EL_computer'] = "";
        $result = mysqli_query($conn, $query);
        while ($row1 = mysqli_fetch_array($result)) {
            $tutorb = new TutorB(0, $_POST['EL_english'], $_POST['EL_maths'], $_POST['EL_biology'], $_POST['EL_physics'], $_POST['EL_chemistry'], $_POST['EL_science'], $_POST['EL_social'], $_POST['EL_civics'], $_POST['EL_computer'], $row1[0]);

//            $tutor2 = new Tutor2(0, $_POST['eduStatus'], $_POST['experience'], $_POST['school'], $_POST['pay'], $_FILES['cv']['name'], $row1[0]);
        }
        $tutord = new TutorD(0, 0, $_POST['elemntary'], 0);
        $output = $gradeController->addTutorD($tutord);
        $output = $elemntaryController->addTutorB($tutorb);
//        $output = $tutor2Controller->addTutor2($tutor2);
    }
    if ($_POST['kg_hidden'] == 1) {
        if (!isset($_POST['KG_english']))
            $_POST['KG_english'] = '';
        if (!isset($_POST['KG_maths']))
            $_POST['KG_maths'] = "";
        if (!isset($_POST['KG_science']))
            $_POST['KG_science'] = "";
        if (!isset($_POST['KG_art']))
            $_POST['KG_art'] = "";
        if (!isset($_POST['KG_music']))
            $_POST['KG_music'] = "";
            $result = mysqli_query($conn, $query);
        while ($row1 = mysqli_fetch_array($result)) {
            $tutora = new TutorA(0, $_POST['KG_english'], $_POST['KG_maths'], $_POST['KG_science'], $_POST['KG_art'], $_POST['KG_music'], $row1[0]);

//            $tutor2 = new Tutor2(0, $_POST['eduStatus'], $_POST['experience'], $_POST['school'], $_POST['pay'], $_FILES['cv']['name'], $row1[0]);
        }
        $tutord = new TutorD(0, $_POST['kg'], 0, 0);
        $output = $gradeController->addTutorD($tutord);
        $output = $kgController->addTutorA($tutora);
//        $output = $tutor2Controller->addTutor2($tutor2);
    } 
    
//        $tutord = new TutorD(0, 0, $_POST['elemntary'], 0);
//        $output = $gradeController->addTutorD($tutord);
//        $output = $elemntaryController->addTutorB($tutorb);
//        $output = $tutor2Controller->addTutor2($tutor2);
    
    if ($_POST['high_hidden'] == 3) {

        if (!isset($_POST['HI_maths']))
            $_POST['HI_maths'] = "";
        if (!isset($_POST['HI_computer']))
            $_POST['HI_computer'] = "";
        if (!isset($_POST['HI_english']))
            $_POST['HI_english'] = "";
        if (!isset($_POST['HI_biology']))
            $_POST['HI_biology'] = "";
        if (!isset($_POST['HI_physics']))
            $_POST['HI_physics'] = "";
        if (!isset($_POST['HI_chemistry']))
            $_POST['HI_chemistry'] = "";
        if (!isset($_POST['HI_economics']))
            $_POST['HI_economics'] = "";
        if (!isset($_POST['HI_business']))
            $_POST['HI_business'] = "";
        if (!isset($_POST['HI_geography']))
            $_POST['HI_geography'] = "";
        if (!isset($_POST['HI_history']))
            $_POST['HI_history'] = "";
        if (!isset($_POST['HI_civics']))
            $_POST['HI_civics'] = "";
        if (!isset($_POST['HI_drawing']))
            $_POST['HI_drawing'] = "";
            $result = mysqli_query($conn, $query);
        while ($row1 = mysqli_fetch_array($result)) {
            $tutorc = new TutorC(0, $_POST['HI_maths'], $_POST['HI_english'], $_POST['HI_computer'], $_POST['HI_biology'], $_POST['HI_physics'], $_POST['HI_chemistry'], $_POST['HI_economics'], $_POST['HI_business'], $_POST['HI_geography'], $_POST['HI_history'], $_POST['HI_civics'], $_POST['HI_drawing'], $row1[0]);

//            $tutor2 = new Tutor2(0, $_POST['eduStatus'], $_POST['experience'], $_POST['school'], $_POST['pay'], $_FILES['cv']['name'], $row1[0]);
        }
        $tutord = new TutorD(0, 0, 0, $_POST['highschool']);
        $output = $gradeController->addTutorD($tutord);
        $output = $highSchoolController->addTutorC($tutorc);
//        $output = $tutor2Controller->addTutor2($tutor2);


        move_uploaded_file($_FILES['cv']['tmp_name'], $target);
    }
}
?>
<html>
    <head>
        
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="uni/css/bootstrap.css">
    <link rel="stylesheet" href="uni/css/animate.css">
    <link rel="stylesheet" href="uni/css/owl.carousel.min.css">

    <link rel="stylesheet" href="uni/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="uni/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="uni/fonts/flaticon/font/flaticon.css">
     <link href="uni/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="uni/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="uni/css/style.css" rel="stylesheet">

    <!-- Theme Style -->
    <link rel="stylesheet" href="uni/css/style.css">
  
    </head>
    <style>
      .site-section  { margin-top: -25%;
                }
  </style>
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
                <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
       
        </ul>

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
 <ul class="navbar-nav absolute-right">
                     <!--<li class="nav-item dropdown">-->
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Login</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Client</a>
          <a class="dropdown-item" href="login2.php">Tutor</a>
              </div>
      
                 <!--<li class="nav-item dropdown">-->
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Register</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="reg1.php">Client</a>
          <a class="dropdown-item" href="../view/tutorSignUp.php">Tutor</a>
              <!--</div>-->
        </li></ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/bb.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">  
                </div>
        </div>
      </div>
    </section>
     <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Register As A Tutor: Part 2</h2>
              
         <form method="POST" style="color: #757575;" enctype="multipart/form-data" action="tutorSignUp2.php" style="max-width:500px;margin:auto">
                <!--Header-->

                <div class="input-group mt-4">
                    <select name="eduStatus" class="browser-default custom-select">
                        <option selected>Education Status</option>
                        <option value="Highschool">High School</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Bachelor Degree">BSc</option>
                        <option value="Masters Degree">MSc</option>
                        <option value="Postgraduate Doctoral Degree">PHd</option>
                    </select>
                </div>

                <div class="input-group mt-4">
                    <select name="experience" class="browser-default custom-select" id="inputGroupSelect01">
                        <option selected>Work Exprience</option>
                        <option value="0">0 yrs</option>
                        <option value="1-5 yrs">1-5 yrs</option>
                        <option value="5-10 yrs">5-10yrs</option>
                        <option value="10yrs">above 10yrs</option>
                    </select>
                </div>
                
                <div class="row">
                <div class="col-md-12 mt-3 form-group">
                    <label for="name">Name of School, And Field of Study</label> 
                    <input name="school" type="text" id="name" class="form-control py-2">
                </div> 
                </div>

                <div class=" mt-4 input-group"><h6 class="pr-3 pt-1"><strong>Level to tutor</strong></h6>
                    <div class="">
                        <input name="kg" type="checkbox" class="custom-control-input kg" value="1" id="defaultInline1">
                        <label class="custom-control-label mx-3" for="defaultInline1">Kindergarten</label>
                    </div>

                    <!-- Default inline 2-->
                    <div row>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="elemntary" type="checkbox" class="custom-control-input elemntary"  value="2" id="defaultInline2">
                        <label class="custom-control-label" for="defaultInline2">Elementary</label>
                    </div>
                    </div>
                    
                    <!-- Default inline 3-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="highschool" type="checkbox" class="custom-control-input high" value="3" id="defaultInline3">
                        <label class="custom-control-label" for="defaultInline3">High School</label>
                    </div>
                </div>

                <div class="ml-5 mr-5 mt-4">
                    <div class="accordion" id="accordionExample275">
                        <div class="card kg-subject z-depth-0 bordered">
                            <div class="card-header" id="headingOne2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2"
                                            aria-expanded="true" aria-controls="collapseOne2">
                                        Select kindergarten subjects to teach
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                                 data-parent="#accordionExample275">
                                <div class="card-body">

                                    <div class="custom-control custom-checkbox">
                                        <input name="KG_english" type="checkbox" class="custom-control-input" value="KG-English" id="defaultUnchecked1">
                                        <label class="custom-control-label" for="defaultUnchecked1">English</label>
                                    </div>  

                                    <div class="custom-control custom-checkbox">
                                        <input name="KG_maths" type="checkbox" class="custom-control-input"  value="KG-Mathematics" id="defaultUnchecked2">
                                        <label class="custom-control-label" for="defaultUnchecked2">Mathematics</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="KG_science" type="checkbox" class="custom-control-input" value="KG-Science" id="defaultUnchecked3">
                                        <label class="custom-control-label" for="defaultUnchecked3">Science</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="KG_art" type="checkbox" class="custom-control-input" value="KG-Art" id="defaultUnchecked4">
                                        <label class="custom-control-label" for="defaultUnchecked4">Art</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="KG_music" type="checkbox" class="custom-control-input" value="KG-Music" id="defaultUnchecked5">
                                        <label class="custom-control-label" for="defaultUnchecked5">Music</label>
                                    </div> 
                                </div>
                            </div>
                        </div>


                        <div class="card elemntary-subject z-depth-0 bordered">
                            <div class="card-header" id="headingTwo2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        Select Elementary School Subjects to teach
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
                                 data-parent="#accordionExample275">
                                <div class="card-body">


                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_english" type="checkbox" class="custom-control-input" value="Elementary-English" id="defaultUnchecked6">
                                        <label class="custom-control-label" for="defaultUnchecked6">English</label>
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_maths" type="checkbox" class="custom-control-input" value="Elementary-Mathematics" id="defaultUnchecked7">
                                        <label class="custom-control-label" for="defaultUnchecked7">Mathematics</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_science" type="checkbox" class="custom-control-input" value="Elementary-Science" id="defaultUnchecked8">
                                        <label class="custom-control-label" for="defaultUnchecked8">Science</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_civics" type="checkbox" class="custom-control-input" value="Civics And Ethical Education" id="defaultUnchecked9">
                                        <label class="custom-control-label" for="defaultUnchecked9">Civics And Ethical Education</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_social" type="checkbox" class="custom-control-input" value="Elementary-Social" id="defaultUnchecked10">
                                        <label class="custom-control-label" for="defaultUnchecked10">Social Studies</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_biology" type="checkbox" class="custom-control-input" value="Elementary-Biology" id="defaultUnchecked11">
                                        <label class="custom-control-label" for="defaultUnchecked11">Biology</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_physics" type="checkbox" class="custom-control-input" value="Elementary-Physics" id="defaultUnchecked12">
                                        <label class="custom-control-label" for="defaultUnchecked12">Physics</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_chemistry" type="checkbox" class="custom-control-input" value="Elementary-Chemistry" id="defaultUnchecked13">
                                        <label class="custom-control-label" for="defaultUnchecked13">Chemistry</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="EL_computer" type="checkbox" class="custom-control-input" value="Elementary-IT" id="defaultUnchecked14">
                                        <label class="custom-control-label" for="defaultUnchecked14">IT</label>
                                    </div> 

                                </div>
                            </div>
                        </div>
                            <!--<input type="text" name="selectbox" id="selectbox"/>-->
                        <div class="card high-subject z-depth-0 bordered">
                            <div class="card-header" id="headingThree2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                        Select high school subjects to teach
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2"
                                 data-parent="#accordionExample275">
                                <div class="card-body">

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_english" type="checkbox" class="custom-control-input" value="Highschool-English" id="defaultUnchecked15">
                                        <label class="custom-control-label" for="defaultUnchecked15">English</label>
                                    </div>  

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_maths" type="checkbox" class="custom-control-input" value="Highschool-Mathematics" id="defaultUnchecked16">
                                        <label class="custom-control-label" for="defaultUnchecked16">Mathematics</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_computer" type="checkbox" class="custom-control-input" value="Highschool-IT" id="defaultUnchecked17">
                                        <label class="custom-control-label" for="defaultUnchecked17">IT</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_biology" type="checkbox" class="custom-control-input" value="Highschool-Biology" id="defaultUnchecked18">
                                        <label class="custom-control-label" for="defaultUnchecked18">Biology</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_physics" type="checkbox" class="custom-control-input" value="Highschool-Physics" id="defaultUnchecked19">
                                        <label class="custom-control-label" for="defaultUnchecked19">Physics</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_chemistry" type="checkbox" class="custom-control-input" value="Highschool-Chemistry" id="defaultUnchecked20">
                                        <label class="custom-control-label" for="defaultUnchecked20">Chemistry</label>
                                    </div>  

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_economics" type="checkbox" class="custom-control-input" value="Highschool-Economics" id="defaultUnchecked21">
                                        <label class="custom-control-label" for="defaultUnchecked21">Economics</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_business" type="checkbox" class="custom-control-input" value="Highschool-Business" id="defaultUnchecked22">
                                        <label class="custom-control-label" for="defaultUnchecked22">Business</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_geography" type="checkbox" class="custom-control-input" value="Highschool-Geography" id="defaultUnchecked23">
                                        <label class="custom-control-label" for="defaultUnchecked23">Geography</label>
                                    </div> 


                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_history" type="checkbox" class="custom-control-input" value="Highschool-History" id="defaultUnchecked24">
                                        <label class="custom-control-label" for="defaultUnchecked24">History</label>
                                    </div> 
                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_civics" type="checkbox" class="custom-control-input" value="Civics and Ethical Education" id="defaultUnchecked25">
                                        <label class="custom-control-label" for="defaultUnchecked25">Civics and Ethical Education</label>
                                    </div> 

                                    <div class="custom-control custom-checkbox">
                                        <input name="HI_drawing" type="checkbox" class="custom-control-input" value="Highschool-Technical Drawing" id="defaultUnchecked26">
                                        <label class="custom-control-label" for="defaultUnchecked26">Technical Drawing</label>
                                    </div> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <input type="hidden" name="kg_hidden" id="kg_hidden"/>
                <input type="hidden" name="elem_hidden" id="elem_hidden"/>
                <input type="hidden" name="high_hidden" id="high_hidden"/>

                <div class="row">
               <div class="col-md-12 form-group">
                   <label for="name">Pay Per Hour(In Birr)</label> 
                    <input name="pay" type="text" id="name" class="form-control py-2">
                </div>
                </div>
                    
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text"id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input name="cv" type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label"  for="inputGroupFile01">Attach your CV</label>
                    </div>
                </div>

                <div class="custom-control custom-checkbox mt-4">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                    <label class="custom-control-label" for="defaultUnchecked">I agree to</label>
                    <a target="_blank" href="Files/terms-and-conditions/">Terms and conditions</a>
                </div>

                 <div class="row justify-content-center">
                    <div class="col-md-6 form-group">
                        <button name="regBtn" class="btn " type="submit" style="background-color:whitesmoke;text-color:white;margin-left:auto;margin-right:auto;display:block;margin-bottom:0%">Register</button>
                        <p style="color:green;"><?php echo $output; ?></p>
                    </div>
                  </div>
                
<!--                <div class="row justify-content-center">
                      <div class="column">
                    <button name="" id="regBtn" type="submit" class="btn btn-black" style="background-color:whitesmoke;text-color:white;margin-left:auto;margin-right:auto;display:block;margin-bottom:0%"></button>
                    
                </div>  
                </div>-->

            </form>
              
       </div>
    
</div>
   </div>
          </div>
        </div>
      </div>
    </section>
<!--/Form with header-->
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
                  <li><a href="register.html">Registration</a></li>
                 </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="https://www.nazret.com">News</a></li>
                  <li><a href="www.aait.edu.et">Support</a></li>
                  <li><a href="./view/contact.php">Contact</a></li>
                  <!-- <li><a href="#">Privacy</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
    
            <div class="block-21 d-flex mb-4">
              <div class="text">
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
    <!-- END footer -->
    

   
    </body>
              
     <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="uni/js/jquery-3.2.1.min.js"></script>
    <script src="uni/js/jquery-migrate-3.0.0.js"></script>
    <script src="uni/js/popper.min.js"></script>
    <script src="uni/js/bootstrap.min.js"></script>
    <script src="uni/js/owl.carousel.min.js"></script>
    <script src="uni/js/jquery.waypoints.min.js"></script>
    <script src="uni/js/jquery.stellar.min.js"></script>
    <script src="uni/js/jquery.animateNumber.min.js"></script>

    <script src="uni/js/main.js"></script>
    
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
        $('input:checkbox[name=kg]').change(
                function () {
                    if ($(this).is(':checked')) {
                        document.getElementById('kg_hidden').value = $(this).val();
                    } else {
                        document.getElementById('kg_hidden').value = "";
                    }
                });
    //   highschool
    //elemntary
        $('input:checkbox[name=elemntary]').change(
                function () {
                    if ($(this).is(':checked')) {
                        document.getElementById('elem_hidden').value = $(this).val();
                    } else {
                        document.getElementById('elem_hidden').value = "";
                    }
                });
        $('input:checkbox[name=highschool]').change(
                function () {
                    if ($(this).is(':checked')) {
                        document.getElementById('high_hidden').value = $(this).val();
                    } else {
                        document.getElementById('high_hidden').value = "";
                    }
                });
    </script>
    <script>
        $(".kg-subject").hide();
        $('.kg').click(function () {
            if ($(this).is(':checked')) {
                $(".kg-subject").show();
            } else {
                $(".kg-subject").hide();
            }
        });
    </script>

    <script>
        $(".elemntary-subject").hide();
        $('.elemntary').click(function () {
            if ($(this).is(':checked')) {
                $(".elemntary-subject").show();
            } else {
                $(".elemntary-subject").hide();
            }
        });
    </script>

    <script>
        $(".high-subject").hide();
        $('.high').click(function () {
            if ($(this).is(':checked')) {
                $(".high-subject").show();
            } else {
                $(".high-subject").hide();
            }
        });
    </script>

    <script>
        $('#defaultUnchecked').click(function () {
            if ($(this).is(':checked')) {
                $("#regBtn").removeClass("disabled");
            } else {
                $("#regBtn").addClass("disabled");
            }
        });
    </script>
</html>
