<?php
session_start();
include '../../../db/config.php';
$set_id=$_GET['zemi'];  
$set_reader_id = $_SESSION['red_id'];

$date1 = date('Y-m-d H:i:s');

$set_zaemane_data = "UPDATE zaemane SET knigaVryshtane = '$date1' WHERE id_reader = '$set_reader_id' AND book_id = '$set_id'";
$set_book_status = "UPDATE book SET id_status = 1 WHERE id_book = '$set_id'";

$run1 = mysqli_query($dbConn, $set_zaemane_data);
$run2 = mysqli_query($dbConn, $set_book_status);

if($run1 & $run2){
     echo "<script>window.open('return.php?setted=book has been set','_self')</script>";  
}
