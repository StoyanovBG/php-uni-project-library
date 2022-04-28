<?php   
session_start();
include '../../../db/config.php';
$set_id=$_GET['zemi'];  
$set_reader_id = $_SESSION['red_id'];

$date1 = date('Y-m-d H:i:s');
//echo $date1;
$date2= date('Y-m-d', strtotime($date1.' + 10 days'));

$set_query="UPDATE book SET numberOfTakes = numberOfTakes + 1 ,id_status = 2 WHERE id_book = '$set_id'"; 

$set_zaemane = "INSERT INTO zaemane (dataZaemane, srokVryshtane, knigaVryshtane, book_id, id_reader) values('$date1', '$date2', 0, '$set_id', '$set_reader_id')";

$run=mysqli_query($dbConn,$set_query);  
 $rune=mysqli_query($dbConn,$set_zaemane);
if($run)  
{  
  if($rune){
    echo "<script>window.open('viewBooks.php?setted=book has been set','_self')</script>";  
   }
}  
  
?> 