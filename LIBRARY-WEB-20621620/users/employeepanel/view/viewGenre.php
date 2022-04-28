    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../bootstrap-4.0-dist/css/bootstrap.css">
    <title>Жанрове</title>  
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
    <h1 align="center">Жанрове</h1><br>
    <p><a align="center" href="./viewpanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th> Id </th>  
            <th> Жанр </th>  
        </tr>  
        </thead>  
  
        <?php  
        include '../../../db/config.php';  
        $view_genre_query="select * from genre";
        $run=mysqli_query($dbConn,$view_genre_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $genre_id=$row[0];  
            $genre=$row[1];   
  
        ?>  
  
        <tr>
            <td><?php echo $genre_id;  ?></td>  
            <td><?php echo $genre;  ?></td>  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  