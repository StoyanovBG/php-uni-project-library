<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>Регистрация</title>  
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
                    <h3 class="panel-title">Регистрация</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus required="">  
                            </div>  
  <div class="form-group">  
                                <input class="form-control" placeholder="Familyname" name="fname" type="text" value="" required="">  
                            </div> 
                            <div class="form-group">  
                                <input class="form-control" placeholder="Phone" name="phone" type="text" value="" required="">  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required="">  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Регистрация" name="register" style="background-color: palevioletred;" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Назад към Начало</b> <br></b><a href="../../index.php">Начало</a> <br></b>  </center>
                    <center><b>Вече имаш акаунт?</b> <br></b><a href="../signin/readerUser.php">Влез тук</a></center>
                </div>  
            </div>  
        </div>     
</div>  
  
</body>  
<?php
include '../../db/config.php';
if(isset($_POST['register']))  
{  
    $user_name = $_POST['name'];
    $user_fname = $_POST['fname'];
    $user_phone = $_POST['phone'];
    $user_email = $_POST['email'];
    
   $check_phone_query="select * from reader WHERE reader_telNumber='$user_phone'";
   $run_query1=mysqli_query($dbConn,$check_phone_query);

    if(mysqli_num_rows($run_query1)>0)  
    {  
    echo "<script>alert('Phone is already exist in our database, Please try another one!')</script>";  
    exit();  
    }
    
   $check_email_query="select * from reader WHERE reader_email='$user_email'";
   $run_query2=mysqli_query($dbConn,$check_email_query);

    if(mysqli_num_rows($run_query2)>0)  
    {  
    echo "<script>alert('Email is already exist in our database, Please try another one!')</script>";  
    exit();  
    }
    
    $insertReader = "INSERT INTO libraryweb.reader(reader_fName, reader_lName, reader_telNumber, reader_email )
           VALUES('$user_name', '$user_fname', '$user_phone', '$user_email') ";
    if(mysqli_query($dbConn,$insertReader))  
    {  
        echo"<script>window.open('../signin/readerUser.php','_self')</script>";  
    }
}