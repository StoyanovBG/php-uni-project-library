    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Заемания</title>  
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
    <h1 align="center">Заемания</h1><br>
    <p><a align="center" href="../employeepanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>id</th>  
            <th>Дата на заемане</th> 
             <th>Срок за връщане</th> 
             <th>Дата на връщане</th>
              <th>книга id</th> 
               <th>читател id</th> 
        </tr>  
        </thead>  
  
        <?php  
        include '../../../db/config.php'; 

        $view_book_query="select * from zaemane";
        $run=mysqli_query($dbConn,$view_book_query);
        
        $book_id = 0;
  
        while($row=mysqli_fetch_array($run))
        {  
            $book_id=$row[0];  
            $book_title=$row[1];  
            $book_author=$row[2]; 
            $datata=$row[3];
            $book_year=$row[4];  
            $book_publisher=$row[5]; 
        ?>  
  
        <tr>  
           <td><?php echo $book_id;  ?></td>  
            <td><?php echo $book_title;  ?></td>  
            <td><?php echo $book_author;  ?></td> 
            <td><?php echo $datata;  ?></td> 
            <td><?php echo $book_year;  ?></td>  
            <td><?php echo $book_publisher;  ?></td>
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  