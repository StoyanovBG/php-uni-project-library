<?php  
session_start(); 
?>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>Вход служител</title>  
</head>  
<style>  
body{
    background-image: url("img/background1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-color: lightgray;
}

    .login-panel {  
        margin-top: 250px;  
    }

</style>  
  
<body>  
  <div class="container">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Служител вход</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="empl_name" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="empl_pass" type="password" value="">  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Влез" name="empl_login" style="background-color: palevioletred;" >  
                        </fieldset>  
                    </form>  
                                        <center><b>Назад към Начало</b> <br></b><a href="../../index.php">Начало</a> <br></b>  </center>
                </div>  
            </div>  
        </div>     
</div>  
</body>  
<?php
include '../../db/config.php';

if(isset($_POST['empl_login']))
{  
    $empl_name=$_POST['empl_name'];  
    $empl_pass=$_POST['empl_pass'];   

   $admin_query="select * from employee where employee_fName = '$empl_name' AND employee_lName = '$empl_pass'";  
  
    $run_query=mysqli_query($dbConn,$admin_query);  
  if($run_query == TRUE){
    if(mysqli_num_rows($run_query)>0)  
    {  
         $_SESSION['empl_name']=$empl_name;
        
         
        echo "<script>window.open('../employeepanel/employeepanel.php','_self')</script>";  
    }  
    else {echo"<script>alert('Employee Details are incorrect!')</script>";}  
  } else {
      die ("<br>Грешка: '. $run_query->error");
  }
  
}  
?>  