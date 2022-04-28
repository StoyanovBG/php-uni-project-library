<?php   
include '../../../../db/config.php';
$delete_id=$_GET['del'];  
$delete_query="delete  from genre WHERE id_genre='$delete_id'";
$run=mysqli_query($dbConn,$delete_query); 
if($run)  
{  
    echo "<script>window.open('delGen.php?deleted=genre has been deleted','_self')</script>";  
}  
  
?> 