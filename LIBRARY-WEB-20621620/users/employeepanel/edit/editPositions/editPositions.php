    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Редактиране на позиция</title>  
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
    <h1 align="center">Редактиране на позиция</h1><br>
    <p><a align="center" href="../editpanel.php"><button class="btn btn-danger">НАЗАД</button></a></p>

  
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
            $posit=$row[1];   
  
        ?>  
  
        <tr>
            <td><?php echo $pos_id;  ?></td>  
            <td><?php echo $posit;  ?></td>  
            <td><a href="editP.php?edit=<?php echo $pos_id ?>"><button class="btn btn-success">Edit</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  