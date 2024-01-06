<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="" href="assets/img/database.png" />
</head>
<style>
    .content{
        font-size:18px ;
    }
</style>
<body>

<?php 
$menu="show";
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  if ($_SESSION["EM_ID"]== ""){ 
    header("Location: login.php ");	
    }
   include("assets/ui/header.php");
   
  //แก้ไข
   $sql ="";

   if(isset($_POST['submit'])){

    $clauses=array();
    if (isset($_POST['nameem']) && !empty($_POST['nameem'])) {
        $name_emp=$_POST['nameem'];
          //แก้ไข
        $clauses[] = "  '%$name_emp'";
    }
    if (isset($_POST['branch']) && !empty($_POST['branch'])){
        $branch=$_POST['branch'];
          //แก้ไข
        $clauses[] = "  = '$branch'";
    }
    $where = !empty($clauses) ? ' where ' . implode(' and ', $clauses) : '';
    $sql =""; 
  } 

   $result = sqlsrv_query($conn,$sql);
  
?>
<section class="content-header">
  <div class="container-fluid">
    </div>
</section>
<section class="content" >
 <div class="card card-dark"style="margin-top: auto;">
  <div class="card-header">
    <h3 class="card-title">ข้อมูลพนักงาน</h3>
    <div class="card-tools">
      <span class="badge badge-primary">Label</span>
    </div>
  </div>
  <div class="card-body">
  <div class="col-md-11" style="margin-left:-1%;">
        <form action="showemployee.php" method="post">
          <p align="right">
          ชื่อพนักงาน : &nbsp&nbsp<input type="text"  name="nameem" style="margin:auto;" value="<?php if(isset($_POST['nameem'])){echo $_POST['nameem']; } ?>" >
          สาขา : &nbsp&nbsp<select name="branch" id="branch">
                  <option value="" >--เลือกสาขา--</option>  
                <?php 
                //แก้ไข
                  $sqls ="";
                  $results = sqlsrv_query($conn,$sqls);
                  //แก้ไข
                      while($data = sqlsrv_fetch_array($results)){?>
                        
                          <option value="<?php echo $data['']; ?>" ><?php echo $data['']; ?></option> 

                <?php } ?>
                </select>
                
            <button type="submit" name="submit">ค้นหา</button>
          </form>
          </div>

          <div class="col-md-10">
            <table class="table table-bordered  table-hover table-striped"  style="margin-left:8%;">
              <thead>
                <tr class="danger">
                 <th  align ="center" width="auto">รหัสพนักงาน</th>
                 <th  align ="center" width="auto">ชื่อ-นามสกุลพนักงาน</th>
                 <th  align ="center" width="auto">สาขา</th>
                
                </tr>
              </thead>
              <tbody>

              <?php while($data = sqlsrv_fetch_array($result)){ ?>
                <tr>   <?php //แก้ไข ?>
                  <td ><?php echo $data['']; ?></td>
                  <td ><?php echo $data['']." ".$data['']; ?></td>
                  <td ><?php echo $data['']; ?></td>
                </tr>
                <?php }?>

              </tbody>
            </table>
            
            
            
          </div>
  </div>
</div>
</section>

</body>
<script type="text/javascript">
  document.getElementById('branch').value = "<?php echo $_POST['branch'];?>";
</script>
</html>
<?php 
include('assets/ui/footer.php');
?>
