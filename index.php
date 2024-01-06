
<?php 
@$menu == "show";
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 

    if ($_SESSION["EM_ID"]== ""){  //check session
    header("Location: login.php ");	
    }else{

    }
   include("assets/ui/header.php");
    
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
  
  </section>
  <!-- Main content -->
  <section class="content"  >
    <div class="card card-white"  >
      <div class="card-header ">
        <h3 class="card-title">ยินดีต้อนรับ</h3>
      </div>
      <br>
      <div class="card-body">
        <div class="row">
          
          <div class="col-md-6">
            WELCOME <?php echo $_SESSION['EM_Username'];?>
      
          </div>
          
        </div>
      </div>
      
    </div>

  </section>
  <!-- /.content -->
  
  
  <?php include('assets/ui/footer.php'); ?>
</body>
</html>


  <!-- /.content -->
  
  
</body>
</html>
<!-- http://fordev22.com/ -->
