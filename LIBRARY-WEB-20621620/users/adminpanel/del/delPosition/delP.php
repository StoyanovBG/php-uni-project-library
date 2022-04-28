<?php   
include '../../../../db/config.php';
$delete_id=$_GET['del'];  
$delete_query="delete  from positions WHERE id_positions='$delete_id'";
$run=mysqli_query($dbConn,$delete_query);  
if($run)  
{  
    echo "<script>window.open('delPos.php?deleted=position has been deleted','_self')</script>";  
}  
  
?> 