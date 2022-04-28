    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Toп 5 читатели по брой заети книги</title>  
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
    <h1 align="center">Toп 5 читатели по брой заети книги</h1><br>
    <p><a align="center" href="../employeepanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>Пълно име</th>  
             <th>Брой заети книги</th> 
        </tr>  
        </thead>  
  
        <?php  
        include '../../../db/config.php'; 

        $view_book_query="SELECT CONCAT(r.reader_fName,' ', r.reader_lName) AS fullname, COUNT(z.id_reader) AS MOST_FREQUENT
                          FROM zaemane z INNER JOIN reader r ON z.id_reader = r.id_reader
                          GROUP BY z.id_reader
                          ORDER BY COUNT(z.id_reader) DESC
                          LIMIT 5";
        $run=mysqli_query($dbConn,$view_book_query);
        
  
        while($row=mysqli_fetch_array($run))
        {  
            $book_id=$row[0];  
            $book_title=$row[1];  
        ?>  
  
        <tr>  
           <td><?php echo $book_id;  ?></td>  
            <td><?php echo $book_title;  ?></td>  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  