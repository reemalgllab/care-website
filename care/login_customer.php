<?php include("include/header.php") ?>
<?php include("admin/include/connection.php");
?>
<?php 
session_start();
include("admin/include/connection.php"); 

if(isset($_POST['submit'])){

   
    $email =  $_POST['email'];
    $passward   = $_POST['password'];
  
   
$query = "select * from customer where customer_email='$email' and customer_passward='$passward'" ;
$result = mysqli_query($conn,$query);
$adminset = mysqli_fetch_assoc($result);
 if(isset($adminset['customer_id'])){
  $_SESSION['customer_id'] = $adminset['customer_id'];
  header("location:view_cart.php");
}else{
   $error = "user not found please sign up";
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
      <br>
      <br>
      <br>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">log in </h2>
        <div class="login-wrap">
          <br>
          
          <input type="text" class="form-control" placeholder="customer Email" name="email" autofocus>
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
                 <button class="btn btn-theme " href="view_cart.php" type="submit" name="submit"> SIGN IN</button>
                
                
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
 <?php include("include/footer.php") ?>