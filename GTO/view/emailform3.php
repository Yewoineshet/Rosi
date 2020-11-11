
<!DOCTYPE html>
<html>
<head>
    <title>email sending form</title>
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
 </head>      

            <body>
                <div class="all">

                    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <form method="post" action="send_mail.php">
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header black darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i> Send Email To Tutor</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mb-0">
        <div class="md-form form-sm">
          <i class="fas fa-envelope prefix active"></i>
          <input type="email" name="mail_to" id="form9" class="form-control">
          <label for="form8" class="active"><strong>Email to</strong></label>
        </div>
        <div class="md-form form-sm">
          <i class="fas fa-lock prefix active"></i>
          <input type="text" name="mail_sub" id="form9" class="form-control">
          <label for="form9" class="active"><strong>Subject</strong></label>
        </div>

<div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix"></i>
          <textarea type="text" name="mail_msg" id="form67" class="md-textarea mb-0"></textarea>
          <label for="form67"><strong>Your message</strong></label>
        </div>
 <button class="btn black darken-3 white-text  btn-block" type="submit">Send</button>
           </div>
     </div>
    </form>
</div>
                </div>
<div class="text-center">
  <a href="" class="btn black darken-3 white-text  btn-rounded my-3" data-toggle="modal" data-target="#modalContactForm">Email to Tutor</a>
</div>
 </body>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</html>