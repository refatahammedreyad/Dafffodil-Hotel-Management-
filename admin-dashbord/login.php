<?php  session_start();   
if(isset($_SESSION['use']))  
 {
    header("Location:hotel-dashbord.php"); 
 }
if(isset($_POST['login']))   
{
     $user = $_POST['name'];
     $pass = $_POST['pass'];
      if($user == "Admin" && $pass == "1234")
         {                                    
          $_SESSION['use']=$user;
          echo '<script type="text/javascript"> window.open("hotel-dashbord.php","_self");</script>';            //  On Successful Login redirects to home.php
        }
        else
        {
          echo "invalid UserName or Password";        
        }
}
 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signin </title>
  <link rel="stylesheet" href="./log-style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

<body>
<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> </h2>
            <form id="signin"  action="" method="post">
              <div class="form-group">
                <label>  <span class="req"></span> </label>
                <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your email address." autocomplete="off" placeholder="username">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> <span class="req"></span> </label>
                <input type="password" class="form-control" id="password" name="pass" required data-validation-required-message="Please enter your password" autocomplete="off" placeholder="Password">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <button type="submit" name="login" class="btn btn-larger btn-block">
               login
                </button>
              </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <!-- /.container --> 
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
