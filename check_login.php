<!DOCTYPE html>
<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
<?php 
include("SQLConnection.php");
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
exit;
if(isset($_POST['submit'])){
   
   
    //รับค่า user & mem_password       
             $em_username = $_POST['em_username'];
             $em_password = $_POST['em_password'];

              //แก้ไข
                $sql ="";
                $result = sqlsrv_query($conn,$sql);
                $row_count = sqlsrv_has_rows($result);
              
                if($row_count==1){
                 
                  $row = sqlsrv_fetch_array($result);
                  
                        
                     //แก้ไข
                    $_SESSION[""]=$row[""];
                    $_SESSION[""] = $row[""];
                    $user=$row[""];
                 
                        if($row){ 
                            echo"<script>";
                            echo "Swal.fire({
                              text: 'ยินดีต้อนรับ  $user ',
                              icon: 'success',
                              showConfirmButton: false,
                              timer: 1500
                            }).then((result) => {
                                window.location.href='index.php'
                            })";
                             echo"</script>";
                        }
                       else{
                    
                            echo"<script>";
                            echo "Swal.fire({
                              text: 'username หรือ  password ไม่ถูกต้อง',
                              icon: 'warning',
                              confirmButtonColor: '#3085d6'
                            }).then((result) => {
                              if (result.isConfirmed) {
                                window.history.go(-1);
                              }
                            })";
                             echo"</script>";
                        } 
                }

                else{
 
                  echo"<script>";
                  echo "Swal.fire({
                  text: 'username หรือ  password ไม่ถูกต้อง',
                  icon: 'warning',
                  confirmButtonColor: '#3085d6'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.history.go(-1);
                    }
                  })";
                  echo"</script>";
                
                }     
              }  
?>

</body>
</html>