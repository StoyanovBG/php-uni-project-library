    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Редактиране на жанр</title>  
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
    <h1 align="center">Редактиране на жанр</h1><br>
    <p><a align="center" href="../editpanel.html"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th> id </th>  
            <th> Жанр </th>  
        </tr>  
        </thead>  
  
        <?php  
        include '../../../../db/config.php';  
        $view_genre_query="select * from genre";
        $run=mysqli_query($dbConn,$view_genre_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $gen_id=$row[0];  
            $gen=$row[1];  
        ?>  
  
        <tr>  
            <td><?php echo $gen_id;  ?></td>  
            <td><?php echo $gen;  ?></td>  
            <td><a href="editG.php?edit=<?php echo $gen_id ?>"><button class="btn btn-success">Edit</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  