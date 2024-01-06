<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Database System For GIS,STAT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="" href="assets/img/database.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">


  
</head>
<style>
  
  .login-card-body{
    background-color: black;
    opacity: 0.95;
    color: white;
   
  }
body  {
  background-image: 
  url(https://www.teahub.io/photos/full/49-493460_slide-wallpapers-geometric-desktop.jpg); /* Set rules to fill background */
  background-repeat: no-repeat;
    background-size: 100% ;}
</style>
<script src="https://kit.fontawesome.com/8aacbcd360.js" crossorigin="anonymous"></script>
<body class="hold-transition login-page">
<div class="login-box" style="width: 30%; height:auto;">
  <div class="card" >
    <div class="card-body login-card-body ">
  
          
    <center><h5><b>Database System For GIS,STAT</h5></center><br>
 
    <center><span class="fas fa-lock text-primary" style="font-size: 2em;"><?php echo 'Current PHP version : ' . phpversion(); ?></span></center><br>

      <form action="check_login.php" method="post">
        <div class="input-group mb-3">
          
          <input type="text" class="form-control" name="em_username"  placeholder="Username" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user text-primary"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="em_password"  placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock text-primary"></span>
            </div>
          </div>
        </div>
 
        <div class="social-auth-links text-center mb-3">
          <button type="submit" name="submit" class="btn btn-primary btn-block">
            <i class="fas fa-solid fa-unlock-keyhole"></i>  Login</button>

         <a href="#" class="btn btn-danger btn-block">
         <i class="fas fa-solid fa-registered"></i>  Register
        </a> 

        </div>
      </form>

      
    

      
    </div>
    <!-- /.login-card-body -->

  </div>

</div>
<!-- /.login-box -->

</body>


<!-- jQuery -->
<script src="assets/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/bootstrap.bundle.min.js"></script>


</html>