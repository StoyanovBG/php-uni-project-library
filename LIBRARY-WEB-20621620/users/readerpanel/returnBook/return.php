    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Книги</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 50px;  
    }  
    .table {  
        margin-top: 100px;  
     }  
     body{
        background-color: lightgrey;
        background-image: url(../img/admin.jpg);
     }
</style>  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Книги</h1><br>
    <p><a align="center" href="../readerpanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>Заемане id </th>  
            <th>Дата на заемане</th> 
             <th>Срок за връщане</th> 
              <th>Дата на Връщане</th> 
               <th>Заглавие</th> 
        </tr>  
        </thead>  
  
        <?php  
        session_start();
        include '../../../db/config.php'; 

        $set_reader_id = $_SESSION['red_id'];
        
        //$view_book_query="SELECT b.title, b.author, b.yearOfPublishing, b.publisher, b.id_genre, z.dataZaemane, z.srokVryshtane, z.dataVryshtane, b.id_status FROM book b 
        //                  INNER JOIN zaemane z WHERE z.id_reader = '$set_reader_id'; ";
        
        //$view_book_query = "SELECT * FROM zaemane WHERE id_reader = '$set_reader_id'";
      
        $view_book_query = "SELECT z.id_zaemane, z.dataZaemane, z.srokVryshtane, z.knigaVryshtane, b.title, b.id_status, b.id_book FROM zaemane z INNER JOIN book b ON z.book_id = b.id_book WHERE z.id_reader = '$set_reader_id'";
                        
        $run=mysqli_query($dbConn,$view_book_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $book_id=$row[0];  
            $book_title=$row[1];  
            $book_author=$row[2]; 
            $book_year=$row[3];  
            $book_publisher=$row[4]; 
          //  $book_takes = $row[5];
           // $book_genre = $row[6];
            $datatata = $row[6];
          
        ?>  
  
        <tr>  
           <td><?php echo $book_id;  ?></td>  
            <td><?php echo $book_title;  ?></td>  
            <td><?php echo $book_author;  ?></td> 
            <td><?php echo $book_year;  ?></td>  
            <td><?php echo $book_publisher;  ?></td>
            <td><?php echo $datatata;  ?></td>
           
      <?php 
                    if( $row['id_status'] == 2){ ?>
                      <td><a href="return_action.php?zemi=<?php echo $datatata ?>"><button class="btn btn-danger">Върни</button></a></td>    
            <?php   }  ?>
        </tr>  
                
           <?php } ?>
  
    </table>  
        </div>  
</div>  
</body>  
</html>  