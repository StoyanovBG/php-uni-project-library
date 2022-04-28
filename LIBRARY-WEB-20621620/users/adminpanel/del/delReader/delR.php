<?php   
include '../../../../db/config.php';
$delete_id=$_GET['del'];  
$delete_query="delete  from reader WHERE id_reader='$delete_id'";
$run=mysqli_query($dbConn,$delete_query);  
if($run)  
{  
    echo "<script>window.open('delRed.php?deleted=user has been deleted','_self')</script>";  
}  
  
?> 