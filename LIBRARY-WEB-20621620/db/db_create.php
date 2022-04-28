<?php
$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error){ 
    die('<br>Грешка: '. $conn->connect_error);
}

$sql = "CREATE DATABASE libraryweb";

if ($conn->query($sql) == TRUE){
  //  echo '<br>БД libraryweb e създадена<br>';
}
else { 
  //  echo '<br>Грешка: '. $conn->error;
}
//book table
$sqlBook = "CREATE TABLE libraryweb.book (
  id_book int(5) NOT NULL AUTO_INCREMENT,
  title varchar(80) NOT NULL,
  author varchar(50) NOT NULL,
  yearOfPublishing int(5) NOT NULL,
  publisher varchar(20) NOT NULL,
  numberOfTakes int(5) NOT NULL,
  PRIMARY KEY (`id_book`));";
//id_genre int(5) NOT NULL,  id_status int(10) NOT NULL,
if ($conn->query($sqlBook) == TRUE) 
{// echo '<br>Tаблица book е създадена';
    
}
else 
{// echo '<br>1Грешка: '. $conn->error;
}

//employee table
$sqlEmployee = "CREATE TABLE libraryweb.employee (
  id_employee int(5) NOT NULL AUTO_INCREMENT,
  employee_fName varchar(20) NOT NULL,
  employee_lName varchar(20) NOT NULL,
  employee_telNumber varchar(20) NOT NULL,
  employee_email varchar(20) NOT NULL,
   PRIMARY KEY (`id_employee`));";
        
if ($conn->query($sqlEmployee) == TRUE) 
{ //echo '<br>Tаблица employee е създадена';
    }
else 
{// echo '<br>2Грешка: '. $conn->error;
}

//genre table
$sqlGenre = "CREATE TABLE libraryweb.genre (
  id_genre int(5) NOT NULL AUTO_INCREMENT,
  genre varchar(20) NOT NULL,
PRIMARY KEY (`id_genre`));";
        
if ($conn->query($sqlGenre) == TRUE) 
{ //echo '<br>Tаблица genre е създадена';
    }
else 
{ //echo '<br>3Грешка: '. $conn->error;
}

//positions table
$sqlPositions = "CREATE TABLE libraryweb.positions (
  id_positions int(5) NOT NULL AUTO_INCREMENT,
  positions varchar(20) NOT NULL,
PRIMARY KEY (`id_positions`));";
        
if ($conn->query($sqlPositions) == TRUE) 
{ //echo '<br>Tаблица positions е създадена';
}
else 
{ //echo '<br>4Грешка: '. $conn->error;

}

//reader table
$sqlReader = "CREATE TABLE libraryweb.reader (
  id_reader int(5) NOT NULL AUTO_INCREMENT,
  reader_fName varchar(20) NOT NULL,
  reader_lName varchar(20) NOT NULL,
  reader_telNumber varchar(20) NOT NULL,
  reader_email varchar(20) NOT NULL,
PRIMARY KEY (`id_reader`));";
        
if ($conn->query($sqlReader) == TRUE) 
{ //echo '<br>Tаблица reader е създадена';

}
else 
{ //echo '<br>5Грешка: '. $conn->error;

}

//status table
$sqlStatus = "CREATE TABLE libraryweb.status (
  id_status int(10) NOT NULL AUTO_INCREMENT,
  status varchar(20) NOT NULL,
PRIMARY KEY (`id_status`));";
        
if ($conn->query($sqlStatus) == TRUE) 
{ //echo '<br>Tаблица status е създадена';
}
else 
{ //
//echo '<br>6Грешка: '. $conn->error;
}

//zaemane table
$sqlZaemane = "CREATE TABLE libraryweb.zaemane (
  id_zaemane int(11) NOT NULL AUTO_INCREMENT,
  dataZaemane datetime NOT NULL DEFAULT current_timestamp(),
  srokVryshtane timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
   knigaVryshtane datetime NOT NULL ,
 PRIMARY KEY (`id_zaemane`));";
        
  //dataZaemane date NOT NULL,
  //srokVryshtane date NOT NULL,
        
if ($conn->query($sqlZaemane) == TRUE) 
{ //echo '<br>Tаблица zaemane е създадена';

}
else 
{ //echo '<br>7Грешка: '. $conn->error;
}


//book FK
$sqlBookFK = "ALTER TABLE libraryweb.book
  ADD id_genre int(5) NOT NULL,
  ADD id_status int(5) NOT NULL,
  ADD CONSTRAINT book_genre_f_key FOREIGN KEY (`id_genre`) REFERENCES libraryweb.genre (`id_genre`) ON DELETE 
 CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT book_status_f_key FOREIGN KEY (`id_status`) REFERENCES libraryweb.status (`id_status`) ON DELETE 
 CASCADE ON UPDATE CASCADE;";
        
if ($conn->query($sqlBookFK) == TRUE) 
{ //echo '<br>FK за book е създаден';
}
else 
{ //echo '<br>8Грешка: '. $conn->error;
}


//employee FK
$sqlEmployeeFK = "ALTER TABLE libraryweb.employee
 ADD id_positions int(5) NOT NULL,
 ADD CONSTRAINT employee_positions_f_key FOREIGN KEY (`id_positions`) REFERENCES libraryweb.positions (`id_positions`) ON DELETE 
 CASCADE ON UPDATE CASCADE;";
        
if ($conn->query($sqlEmployeeFK) == TRUE) 
{ //echo '<br>FK за employee е създаден';

}
else 
{ //echo '<br>###Грешка: '. $conn->error;
}



//zaemane FK
$sqlZaemaneFK = "ALTER TABLE libraryweb.zaemane
 ADD book_id int(5) NOT NULL,
 ADD id_reader int(5) NOT NULL,
 ADD CONSTRAINT zaemane_book_f_key FOREIGN KEY (`book_id`) REFERENCES libraryweb.book (`id_book`) ON DELETE 
 CASCADE ON UPDATE CASCADE,
 ADD CONSTRAINT zaemane_reader_f_key FOREIGN KEY (`id_reader`) REFERENCES libraryweb.reader (`id_reader`) ON DELETE 
 CASCADE ON UPDATE CASCADE;";

//ADD id_employee int(5) NOT NULL,
// ADD CONSTRAINT zaemane_employee_f_key FOREIGN KEY (`id_employee`) REFERENCES libraryweb.employee (`id_employee`) ON DELETE 
// CASCADE ON UPDATE CASCADE,
        
if ($conn->query($sqlZaemaneFK) == TRUE) 
{// echo '<br>FK за zaemane е създаден';

}
else 
{ //echo '<br>10Грешка: '. $conn->error;
}


//setvame statusa
$sqlStatusSet1 = "INSERT INTO libraryweb.status(id_status, status)
 VALUES(1, 'svobodna');";
 $sqlStatusSet2 = "INSERT INTO libraryweb.status(id_status, status)
 VALUES(2, 'zaeta');";
        
if ($conn->query($sqlStatusSet1) == TRUE) 
{ //echo '<br>статуса е сетнат 1 svobodna';
}
else 
{ //echo '<br>11Грешка: '. $conn->error;
}
if ($conn->query($sqlStatusSet2) == TRUE) 
{ //echo '<br>статуса е сетнат 2 zaeta';
}
else 
{ //echo '<br>12Грешка: '. $conn->error;
}

//admin table
$sqlAdmin = "CREATE TABLE libraryweb.admin (
  id_admin int(11) NOT NULL AUTO_INCREMENT,
  admin_name varchar(20),
  admin_pass varchar(20),
 PRIMARY KEY (`id_admin`));";

if ($conn->query($sqlAdmin) == TRUE) 
{ //echo '<br>Tаблица admin е създадена';
}
else 
{ //echo '<br>13Грешка: '. $conn->error;
}


$sqlPositionsAdmin = "INSERT INTO libraryweb.positions(id_positions, positions)
  VALUES(1, 'front office')";

$sqlPositionsSecretary = "INSERT INTO libraryweb.positions(id_positions, positions)
  VALUES(2, 'secretary')";

$sqlPositionsDirector = "INSERT INTO libraryweb.positions(id_positions, positions)
  VALUES(3, 'director')";

//setvame 1 "admin" 
    $sqlEmployeeAdmin = "INSERT INTO libraryweb.admin(id_admin, admin_name, admin_pass)
  VALUES(1, 'admin', 'admin')";
    
    $sqlscifi = "INSERT INTO libraryweb.genre(id_genre, genre) VALUES(1 , 'scifi')";
    
    $sqlhorror = "INSERT INTO libraryweb.genre(id_genre, genre) VALUES(2 , 'horror')";
    
    $sqlfantasy = "INSERT INTO libraryweb.genre(id_genre, genre) VALUES(3 , 'fantasy')";
    
    
if ($conn->query($sqlPositionsAdmin) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlEmployeeAdmin) == TRUE) 
{ //echo '<br>admin е сетнат';
}
else 
{ //echo '<br>15Грешка: '. $conn->error;
}

if ($conn->query($sqlPositionsSecretary) == TRUE) 
{ //echo '<br>secretary е сетнат';
}
else 
{ //echo '<br>16Грешка: '. $conn->error;
}

if ($conn->query($sqlscifi) == TRUE) 
{ //echo '<br>scifi е сетнат';
}
else 
{ 
   //echo '<br>17Грешка: '. $conn->error;
   }

if ($conn->query($sqlhorror) == TRUE) 
{ //echo '<br>horror е сетнат';
}
else 
{ //echo '<br>18Грешка: '. $conn->error;
}

if ($conn->query($sqlPositionsDirector) == TRUE) 
{ //echo '<br>deirector е сетнат';
}
else 
{ //echo '<br>19Грешка: '. $conn->error;
}

if ($conn->query($sqlfantasy) == TRUE) 
{ //echo '<br>fantasy е сетнат';
}
else 
{ //echo '<br>20Грешка: '. $conn->error;
}

 $sqlTestEmpl1 = "INSERT INTO libraryweb.employee(id_employee, employee_fName, employee_lName, employee_telNumber, employee_email, id_positions)
            VALUES(1, 'ivan', 'ivanov', '0888195584', 'ivan@abv.bg', 1)";
    
 $sqlTestReader1 = "INSERT INTO libraryweb.reader( id_reader, reader_fName, reader_lName, reader_telNumber, reader_email )
           VALUES(1, 'petar', 'petrov', '35999442198', 'petar@abv.bg') ";
    
    
    if ($conn->query($sqlTestEmpl1) == TRUE) 
{ //echo '<br>ivan empl е сетнат';
      }
    
else 
{ //echo '<br>21Грешка: '. $conn->error;
   
}

if ($conn->query($sqlTestReader1) == TRUE) 
{ //echo '<br>petar  reader е сетнат';
    
}
else 
{ //echo '<br>22Грешка: '. $conn->error;
    
}


 $sqlTestEmpl2 = "INSERT INTO libraryweb.employee(id_employee, employee_fName, employee_lName, employee_telNumber, employee_email, id_positions)
            VALUES(2, 'georgi', 'georgiev', '08485295584', 'geo@abv.bg', 3)";
    
 $sqlTestReader2 = "INSERT INTO libraryweb.reader( id_reader, reader_fName, reader_lName, reader_telNumber, reader_email )
           VALUES(2, 'martin', 'dimitrov', '359489122198', 'marto@abv.bg') ";
    
    
    if ($conn->query($sqlTestEmpl2) == TRUE) 
{ //echo '<br>georgi empl е сетнат';
       
    }
else 
{// echo '<br>23Грешка: '. $conn->error;

}

if ($conn->query($sqlTestReader2) == TRUE) 
{ //echo '<br>martin  reader е сетнат';

}
else 
{ //echo '<br>24Грешка: '. $conn->error;

}


 $sqlTestEmpl3 = "INSERT INTO libraryweb.employee(id_employee, employee_fName, employee_lName, employee_telNumber, employee_email, id_positions)
            VALUES(3, 'aleks', 'dimitrov', '052648516', 'aleks13@abv.bg', 3)";
    
 $sqlTestReader3 = "INSERT INTO libraryweb.reader( id_reader, reader_fName, reader_lName, reader_telNumber, reader_email )
           VALUES(3, 'oleg', 'georgiev', '052624851', 'olito@abv.bg') ";
    
    
    if ($conn->query($sqlTestEmpl3) == TRUE) 
{// echo '<br>aleks empl е сетнат';

}
else 
{// echo '<br>25Грешка: '. $conn->error;

}

if ($conn->query($sqlTestReader3) == TRUE) 
{// echo '<br>oleg  reader е сетнат';

}
else 
{ //echo '<br>26Грешка: '. $conn->error;

}


 $sqlTestEmpl4 = "INSERT INTO libraryweb.employee(id_employee, employee_fName, employee_lName, employee_telNumber, employee_email, id_positions)
            VALUES(4, 'alina', 'milenova', '35911885', 'aleto89@abv.bg', 2)";
    
 $sqlTestReader4 = "INSERT INTO libraryweb.reader( id_reader, reader_fName, reader_lName, reader_telNumber, reader_email )
           VALUES(4, 'olga', 'kasabova', '359199542', 'olgakasabova@abv.bg') ";
    
    
    if ($conn->query($sqlTestEmpl4) == TRUE) 
{ //echo '<br>alina empl е сетнат';

}
else 
{ //echo '<br>27Грешка: '. $conn->error;

}

if ($conn->query($sqlTestReader4) == TRUE) 
{ //echo '<br>olga  reader е сетнат';

}
else 
{ //echo '<br>28Грешка: '. $conn->error;

}


 $sqlTestEmpl5 = "INSERT INTO libraryweb.employee(id_employee, employee_fName, employee_lName, employee_telNumber, employee_email, id_positions)
            VALUES(5, 'maya', 'pavlova', '0894881235', 'maicheto00@abv.bg', 1)";
    
 $sqlTestReader5 = "INSERT INTO libraryweb.reader( id_reader, reader_fName, reader_lName, reader_telNumber, reader_email )
           VALUES(5, 'mila', 'bogdanova', '0878548662', 'mnogomila@abv.bg') ";
    
    
    if ($conn->query($sqlTestEmpl5) == TRUE) 
{ //echo '<br>maya empl е сетнат';

}
else 
{// echo '<br>29Грешка: '. $conn->error;

}

if ($conn->query($sqlTestReader5) == TRUE) 
{ //echo '<br>mila  reader е сетнат';

}
else 
{ //echo '<br>30Грешка: '. $conn->error;

}


$sqlbook1 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(1, 'Ad Astra', 'Jack Campbell',  2013, 'Amazon',0, 1,1)";

$sqlbook2 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(2, 'Project Hail Mary', 'Andy Weir',  2021, 'Weir',0, 1,1)";

$sqlbook3 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(3, 'Harry Potter: Chamber of Secrets', 'J. K. Rowling',  1998, 'J. K. Rowling',0, 3,1)";

$sqlbook4 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(4, 'Harry Potter: Prisoner of Azkaban', 'J. K. Rowling',  1999, 'J. K. Rowling',0, 3,1)";

$sqlbook5 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(5, 'Harry Potter: Goblet of Fire', 'J. K. Rowling',  2000, 'J. K. Rowling',0, 3,1)";

$sqlbook6 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(6, 'Harry Potter: Order of the Phoenix', 'J. K. Rowling',  2003, 'J. K. Rowling',0, 3,1)";

$sqlbook7 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(7, 'Dracula', 'Bram Stoker',  1897, 'Stoker',0, 2,1)";

$sqlbook8 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(8, 'Frankenstein', 'Mary Shelley',  1818, 'Shelley',0, 2,1)";

$sqlbook9 = "INSERT INTO libraryweb.book(id_book, title, author, yearOfPublishing, publisher, numberOfTakes, id_genre, id_status)
             VALUES(9, 'Dune', 'Frank Herbert',  1965, 'Hernert',0, 1,1)";

if ($conn->query($sqlbook1) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook2) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook3) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook4) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook5) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook6) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook7) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook8) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}

if ($conn->query($sqlbook9) == TRUE) 
{ //echo '<br>position fron office е сетната';
}
else 
{ //echo '<br>14Грешка: '. $conn->error;
}
$conn->close();