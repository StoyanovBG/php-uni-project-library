<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>Добавяне на жанр</title>  
</head>  
<style>  
body{
    background-image: url("img/background1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-color: lightgrey;
}

    .login-panel {  
        margin-top: 25px;  
    }

</style>  
  
<body>  
    <div class="container">
        <div class="col-md-5 col-md-offset-3">
            <div class="login-panel">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Добавяне на жанр</h3>  
                </div>  
                <div class="panel-body">              
<form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Genre" name="genre" type="text" autofocus required="">  
                            </div>  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Добави жанр" name="add" style="background-color: palevioletred;" >  
  
                        </fieldset>  
                    </form> 
                    <center><b>Назад към служител панел</b> <br></b><a href="./addpanel.php">Назад</a> <br></b>  </center>
    <table border="7">  
        <thead>  
          <tr>  
            <th>id</th>  
            <th>Жанр</th>  
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
        </div>     
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include '../../../db/config.php';
if(isset($_POST['add']))  
{  
    $genre_add=$_POST['genre'];

   
    $check_genre_query="select * from genre WHERE genre='$genre_add'";    
    $run_query=mysqli_query($dbConn,$check_genre_query);  
   
//genre check
 if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Genre is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
  
    $insert_genre="insert into genre (genre) VALUE ('$genre_add')";  
    if(mysqli_query($dbConn,$insert_genre))  
    {  
        echo"<script>window.open('addGenre.php','_self')</script>";  
    }  
}   
?> 