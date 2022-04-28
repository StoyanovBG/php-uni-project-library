    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Изтрий позиция</title>  
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
    <h1 align="center">Изтрий позиция</h1><br>
    <p><a align="center" href="../delpanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th> Id </th>  
            <th> Позиция </th>  
        </tr>  
        </thead>  
  
        <?php  
        include '../../../../db/config.php';  
        $view_pos_query="select * from positions";
        $run=mysqli_query($dbConn,$view_pos_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $pos_id=$row[0];  
            $pos=$row[1];  
        ?>  
  
        <tr>  
            <td><?php echo $pos_id;  ?></td>  
            <td><?php echo $pos;  ?></td>  
            <td><a href="delP.php?del=<?php echo $pos_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  