<?php 
include '../../../../db/config.php';

$edit_pos = $_GET['edit']; 
  
if(isset($_POST['add']))  
{  
     $position_add=$_POST['position'];
     
     $check_pos_query="select * from positions WHERE positions='$position_add'";    
    $run_query=mysqli_query($dbConn,$check_pos_query);  
   
 if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Position is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
     
    $insert_pos="UPDATE positions SET positions = '$position_add' WHERE id_positions = '$edit_pos'";  
    if ($dbConn->query($insert_pos) == TRUE) 
            { echo '<script>alert("Positions edit successfully")</script>';}
        else 
            { echo '<script>alert('. $dbConn->error . ')</script>';} 
}   
?>                  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>Редактиране на позиция</title>  
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
                    <h3 class="panel-title">Редактиране на позиция</h3>  
                </div>  
                <div class="panel-body">       
<form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Position" name="position" type="text" autofocus required="">  
                            </div>  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Редактирай" name="add" style="background-color: palevioletred;" >  
  
                        </fieldset>  
                    </form>  
    <table border="7">  
        <thead>  
          <tr>  
            <th>id</th>  
            <th>Позиция</th>  
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
        </tr>  
  
        <?php } ?>  
    </table>  
                    <center><b></b> <br></b><a href="./editPositions.php">Назад</a> <br></b>  </center>
                </div>  
            </div>  
        </div>     
</div>  
  
</body>  
  
</html>  