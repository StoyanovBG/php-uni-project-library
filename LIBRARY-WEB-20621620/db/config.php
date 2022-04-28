<?php
$host = 'localhost'; 
$dbUser = 'root'; 
$dbPass = ''; 
$dbName = 'libraryweb';

$tableBook = 'book';
$tableEmployee = 'employee';
$tableGenre = 'genre';
$tablePositions = 'positions';
$tableReader = 'reader';
$tableStatus = 'status';
$tableZaemane = 'zaemane';

$dbConn=mysqli_connect($host, $dbUser, $dbPass);

if (!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) { 
 die('Няма връзка със сървър');
} else {
    // echo "<br> има връзка със сървър";
     }
 
if (!mysqli_select_db($dbConn,$dbName)) {
 die('Грешка при селектиране');
 } else {
   //  echo "<br> селектиране на бд бачка";
     }

 
 mysqli_query($dbConn,"SET NAMES 'UTF8'");
 ?>

