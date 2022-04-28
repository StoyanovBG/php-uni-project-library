<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>Търсене/Заемане по автор</title>  
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
        margin-top: 25px;  
    }

</style>  
  
<body>  
<div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Търсене/Заемане по автор</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Author" name="search" type="text" autofocus required="">  
                            </div>   
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Търси" name="submit" style="background-color: palevioletred;" >  
                        </fieldset>  
                    </form>  
                    <center><b>Назад към Начало</b> <br></b><a href="../../readerpanel.php">Начало</a> <br></b>  </center>
 
<?php
    if (isset($_POST['submit'])) {
        include '../../../../db/config.php';
       
        $searchString = mysqli_real_escape_string($dbConn, trim(htmlentities($_POST['search'])));

        if ($dbConn->connect_error) {
            echo "Failed to connect to Database";
            exit();
        }

        if ($searchString === "" || !ctype_alnum($searchString) || $searchString < 3) {
            echo "Invalid search string";
            exit();
        }

        $searchString = "%$searchString%";

        $sql = "SELECT * FROM book WHERE author LIKE ?";

        $prepared_stmt = $dbConn->prepare($sql);
        $prepared_stmt->bind_param('s', $searchString);
        $prepared_stmt->execute();

        $result = $prepared_stmt->get_result();

        if ($result->num_rows === 0) {
            echo "<br>No match found";
            exit();

        } else {
            ?>
             <table border="7">  
        <thead>  
          <tr>  
            <th>id</th>  
            <th>Заглавие</th> 
            <th>Автор</th> 
            <th>Година</th> 
            <th>Издател</th> 
            <th>Жанр</th> 
            <th>Статус</th> 
        </tr>  
        </thead>  
        <?php
        
            while ($row = $result->fetch_assoc()) {
               $row['id_book'];
                $row['title'];
                $row['author'];
                $row['yearOfPublishing'];
               $row['publisher'];
                $row['id_genre'];
                $row['id_status'];
                
                ?>
         <tr>
            <td><?php echo   $row['id_book']; ?></td>  
            <td><?php echo  $row['title'];;  ?></td>  
            <td><?php echo  $row['author'];;  ?></td> 
            <td><?php echo   $row['yearOfPublishing'];  ?></td>  
            <td><?php echo  $row['publisher'];;  ?></td>
            <td><?php echo $row['id_genre'];  ?></td>  
            <td><?php echo   $row['id_status'];  ?></td> 
            <?php 
                    if( $row['id_status'] == 1){ ?>
                      <td><a href="zaemaneAuthor.php?zemi=<?php echo $row['id_book'] ?>"><button class="btn btn-success">Заеми</button></a></td>    
            <?php   }  ?>
        </tr>  
                
           <?php } ?>
         </table>  
<?php
        }

    } else { 

        exit();
    }
?>
                                    </div>  
            </div>  
        </div>     
</div>  
</body>  
</html>