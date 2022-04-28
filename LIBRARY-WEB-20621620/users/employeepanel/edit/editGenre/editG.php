<?php 
include '../../../../db/config.php';

$edit_gen = $_GET['edit']; 
  
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
      
    $insert_genre="UPDATE genre SET genre = '$genre_add' WHERE id_genre = '$edit_gen'";  
    if ($dbConn->query($insert_genre) == TRUE) 
            { echo '<script>alert("Genre edit successfully")</script>';}
        else 
            { echo '<script>alert('. $dbConn->error . ')</script>';} 
}   
?>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>Редактиране на жанр</title>  
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
                    <h3 class="panel-title">Редактиране на жанр</h3>  
                </div>  
                <div class="panel-body">  
<form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Genre" name="genre" type="text" autofocus required="">  
                            </div>  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Edit" name="add" style="background-color: palevioletred;" >  
  
                        </fieldset>  
                    </form>  
    <table border="7">  
        <thead>  
          <tr>  
            <th>id</th>  
            <th>Жанр</th>  
        </tr>  
        </thead>  
  
        <?php  
      include '../../../../db/config.php';
        $view_gen_query="select * from genre";
        $run=mysqli_query($dbConn,$view_gen_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $gen_id=$row[0];  
            $gen=$row[1];   
  
        ?>  
  
        <tr>
            <td><?php echo $gen_id;  ?></td>  
            <td><?php echo $gen;  ?></td>  
        </tr>  
  
        <?php } ?>  
    </table>  
                    <center><b></b> <br></b><a href="./editGenre.php">Назад</a> <br></b>  </center>
                </div>  
            </div>  
        </div>     
</div>  
  
</body>  
  
</html>  