    <html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist/css/bootstrap.css"> 
    <title>Изтрий читател</title>  
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
    <h1 align="center">Изтрий читател</h1><br>
    <p><a align="center" href="../delpanel.html"><button class="btn btn-danger">НАЗАД</button></a></p>

  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th> Id </th>  
            <th> Име </th>  
             <th> Фамилия </th>
              <th> Телефон </th>
               <th> Имейл </th>
        </tr>  
        </thead>  
  
        <?php  
        include '../../../../db/config.php';  
        $view_users_query="select * from reader";
        $run=mysqli_query($dbConn,$view_users_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $fname = $row[2];
            $tel = $row[3];
            $email = $row[4];
        ?>  
  
        <tr>  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td> 
            <td><?php echo $fname;  ?></td>
            <td><?php echo $tel;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><a href="delR.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
</html>  