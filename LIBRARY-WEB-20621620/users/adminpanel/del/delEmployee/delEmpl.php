    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Изтрий служител</title>  
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
    <h1 align="center">Изтрий служител</h1><br>
    <p><a align="center" href="../delpanel.html"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>id</th>  
            <th>Име</th>  
             <th>Фамилия</th>  
              <th>Телефон</th>  
               <th>Имейл</th>
                <th>Позиция</th>  
        </tr>  
        </thead>  
  
        <?php  
        include '../../../../db/config.php';  
        $view_empl_query="select * from employee";
        $run=mysqli_query($dbConn,$view_empl_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $empl_id=$row[0];  
            $name=$row[1];  
            $lname=$row[2];
            $tel=$row[3];
            $email=$row[4];
            $pos=$row[5];
        ?>  
  
        <tr>  
            <td><?php echo $empl_id;  ?></td>  
            <td><?php echo $name;  ?></td>  
            <td><?php echo $lname;  ?></td>  
            <td><?php echo $tel;  ?></td>  
            <td><?php echo $email;  ?></td>  
            <td><?php echo $pos;  ?></td>  
            <td><a href="delE.php?del=<?php echo $empl_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>  
  
        <?php } ?> 
  
    </table>  
        </div>  
</div>  
</body>  
</html>  