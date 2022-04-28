    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Най-често заемани книги</title>  
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
    <h1 align="center">Най-често заемани книги</h1><br>
    <p><a align="center" href="../employeepanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>Заглавие</th>  
             <th>Честота на заемане</th> 
        </tr>  
        </thead>  
  
        <?php  
        include '../../../db/config.php'; 

        $view_book_query="SELECT b.title, COUNT(z.book_id) AS MOST_FREQUENT
                          FROM zaemane z INNER JOIN book b ON z.book_id = b.id_book
                          GROUP BY book_id
                          ORDER BY COUNT(book_id) DESC";
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