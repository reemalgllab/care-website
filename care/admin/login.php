<?php 
session_start();
include("include/connection.php"); 

if(isset($_POST['submit'])){

    $email    =   $_POST['email'];
    $password =  $_POST['password'];
$query = "select * from admin where admin_email='$email' and admin_passward='$password'" ;
$result = mysqli_query($conn,$query);
$adminset = mysqli_fetch_assoc($result);
 if(isset($adminset['admin_id'])){
  $_SESSION['admin_id'] = $adminset['admin_id'];
  header("location:index.php");
}else{
   $error = "user not found";
 }

}?>
<DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          
          <input type="text" class="form-control" placeholder="Admin Email" name="email" autofocus>
          <br>
           
          <input type="password" class="form-control" placeholder="Password" name="password">
          <br>
         
          <br>
          <div class="form-group">

         <?php if(isset($error)){
          echo "<div class = 'btn btn-block btn-danger'> $error</div>";
         }
         ?>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                 <button class="btn btn-theme " href="" type="submit" name="submit"> SIGN IN</button>
                
                
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
