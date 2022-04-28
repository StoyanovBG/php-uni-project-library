<?php   
include '../../../../db/config.php';
$delete_id=$_GET['del'];  
$delete_query="delete  from book WHERE id_book='$delete_id'";  
$run=mysqli_query($dbConn,$delete_query);  
if($run)  
{  
    echo "<script>window.open('delBoo.php?deleted=book has been deleted','_self')</script>";  
}  
  
?> 