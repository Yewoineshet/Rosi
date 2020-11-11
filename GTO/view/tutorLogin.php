<?php
    include_once('../Controller/AccountController.php');
    $output = "";
    if(isset($_POST['loginBtn'])){
        $accountController = new AccountController();
        $output = $accountController->tutorLogin($_POST['email'],$_POST['password']);
        if($output){
            header('Location: home.php');
        }else{
            $output = "Invalid email/Password";
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
       <div class="login"  style="margin-left: 480px; margin-right: 480px; margin-top: 100px; border-color: black; border-style: solid">
           
           <form class="text-center p-5" method="POST" action="tutorLogin.php">

    <p class="h4 mb-4">Log In</p>

    <!-- Email -->
    <input name="email" type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Email">

    <!-- Password -->
    <input name="password" type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button  name="loginBtn" class="btn btn-black btn-rounded  my-4" type="submit">Sign in</button>
   
                            <p style="color:red;"><?php echo $output ;?></P>
                            <!-- Register -->
                            <p>Not a member?
                                <a href="./tutorSignUp.php">Register</a>
                            </p>
</form>
<!-- Default form login -->
   

</div>
<!-- Card -->     
            
            
        </div> 
        <!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
