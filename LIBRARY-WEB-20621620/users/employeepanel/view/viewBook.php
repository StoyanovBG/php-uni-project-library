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
    <p><a align="center" href="./viewpanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>id</th>  
            <th>Заглавие</th> 
             <th>Автор</th> 
              <th>Година</th> 
               <th>Издател</th> 
                <th>Жанр</th> 
                 <th>Брой заемания</th>
                  <th>Статус</th> 
        </tr>  
        </thead>  
  
        <?php  
        include '../../../db/config.php'; 

        $view_book_query="select * from book";
        $run=mysqli_query($dbConn,$view_book_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $book_id=$row[0];  
            $book_title=$row[1];  
            $book_author=$row[2]; 
            $book_year=$row[3];  
            $book_publisher=$row[4]; 
            $book_takes = $row[5];
            $book_genre = $row[6];
            $book_status = $row[7];
        ?>  
  
        <tr>  
           <td><?php echo $book_id;  ?></td>  
            <td><?php echo $book_title;  ?></td>  
            <td><?php echo $book_author;  ?></td> 
            <td><?php echo $book_year;  ?></td>  
            <td><?php echo $book_publisher;  ?></td>
            <td><?php echo $book_genre;  ?></td>  
            <td><?php echo $book_takes;  ?></td> 
            <td><?php echo $book_status;  ?></td>  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  