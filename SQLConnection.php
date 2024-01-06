<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
  //แก้ไข
$serverName = "XXXXXXXXX"; //serverName\instanceName
$connectionInfo = array( "Database"=>"my_database", "UID"=>"sa", "PWD"=>"11111111");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection Success.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r(sqlsrv_errors(), true));
}
?>




