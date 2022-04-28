<?php   
include '../../../../db/config.php';
$delete_id=$_GET['del'];  
$delete_query="delete  from employee WHERE id_employee='$delete_id'";
$run=mysqli_query($dbConn,$delete_query);  
if($run)  
{  
    echo "<script>window.open('delEmpl.php?deleted=employee has been deleted','_self')</script>";  
}  
  
?> 