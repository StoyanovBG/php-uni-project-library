<?php  
session_start(); 
?>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>Вход читател</title>  
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
                    <h3 class="panel-title">Читател вход</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Email" name="red_name" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="red_pass" type="password" value="">  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Влез" name="red_login" style="background-color: palevioletred;" >  
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

if(isset($_POST['red_login']))
{  
    $red_name=$_POST['red_name'];  
    $red_pass=$_POST['red_pass'];   

   $red_query = "SELECT * FROM reader WHERE reader_email = '$red_name' AND reader_lName = '$red_pass'";  
   
   $get_id_query = "SELECT id_reader FROM reader WHERE reader_email = '$red_name' AND reader_lName = '$red_pass'";
  
    $run_query=mysqli_query($dbConn,$red_query);  
    
    $run_get_id = mysqli_query($dbConn, $get_id_query);
    $row = mysqli_fetch_row($run_get_id);
    
  if($run_query == TRUE){
    if(mysqli_num_rows($run_query)>0)  
    {    
          $_SESSION['red_name']=$red_name;
          $_SESSION['red_id'] = $row[0];
        echo "<script>window.open('../readerpanel/readerpanel.php','_self')</script>";  
    }  
    else {echo"<script>alert('Reader Details are incorrect!')</script>";}  
  } else {
      die ("<br>Грешка: '. $run_query->error");
  }

}  