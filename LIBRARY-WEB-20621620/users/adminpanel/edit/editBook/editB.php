<?php   
include '../../../../db/config.php';
            
            $sqlgen = "select * from genre";
            $all_genre = mysqli_query($dbConn, $sqlgen);
            
            $sqlstat = "select * from status";
            $all_status = mysqli_query($dbConn, $sqlstat);
            
            $id_edit = $_GET['edit'];
            
            
if(isset($_POST['add'])){
            
           $title = mysqli_real_escape_string($dbConn,$_POST['title']);               
           $author = mysqli_real_escape_string($dbConn,$_POST['author']);    
           $year = mysqli_real_escape_string($dbConn,$_POST['year']);
           $publisher = mysqli_real_escape_string($dbConn,$_POST['publisher']);
           $genre = mysqli_real_escape_string($dbConn,$_POST['Genre']);
           $status = mysqli_real_escape_string($dbConn,$_POST['Status']);
           
             $check_title_query="select * from book WHERE title='$title'";    
             $run_query=mysqli_query($dbConn,$check_title_query);  
           
            if(mysqli_num_rows($run_query)>0)  
              {  
                echo "<script>alert('Book is already exist in our database, Please try another one!')</script>";  
                exit();  
              }  
           
           $update_book = "UPDATE book SET
                           title = '$title',
                           author = '$author',
                           yearOfPublishing = '$year',
                           publisher = '$publisher',
                           id_genre = '$genre',
                           id_status = '$status'
                           WHERE id_book = '$id_edit'";
           
            if ($dbConn->query($update_book) == TRUE) 
            { echo '<script>alert("Book edited successfully")</script>';}
        else 
            { echo '<script>alert('. $dbConn->error . ')</script>';} 
}
?>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>?????????????????????? ???? ??????????</title>  
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
                    <h3 class="panel-title">?????????????????????? ???? ??????????</h3>  
                </div>  
                <div class="panel-body">                 
<form role="form" method="post" action="#">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Title" name="title" type="text" autofocus required="">  
                            </div>  
                             <div class="form-group">  
                                <input class="form-control" placeholder="Author" name="author" type="text" autofocus required="">  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Year of publishing" name="year" type="text" autofocus required="">  
                            </div>  
                             <div class="form-group">  
                                <input class="form-control" placeholder="Publisher" name="publisher" type="text" autofocus required="">  
                            </div>  
                             <label>???????????? ????????: </label>
                            <select name="Genre">
            <?php 
                while ($gen = mysqli_fetch_array(
                        $all_genre,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $gen["id_genre"];
                ?>">
                    <?php echo $gen["genre"];
                    ?>
                </option>
            <?php 
                endwhile; 
            ?>
        </select> <br><br>
         <label>???????????? ????????????: </label>
        <select name="Status">
            <?php 
                while ($stat = mysqli_fetch_array(
                        $all_status,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $stat["id_status"];
                ?>">
                    <?php echo $stat["status"];
                    ?>
                </option>
            <?php 
                endwhile; 
            ?>
        </select> <br><br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="????????????????????" name="add" style="background-color: palevioletred;" >  
  
                        </fieldset>  
                    </form>  <br>
     <table border="7">  
        <thead>  
          <tr>  
          <th>id</th>  
            <th>????????????????</th> 
             <th>??????????</th> 
              <th>????????????</th> 
               <th>??????????????</th> 
                <th>????????</th> 
                 <th>???????? ????????????????</th>
                  <th>????????????</th> 
        </tr>  
        </thead>  
  
        <?php  
      include '../../../../db/config.php';
        $view_book_query="select * from book";
        $run=mysqli_query($dbConn,$view_book_query);
  
       while($row=mysqli_fetch_array($run))
        {  
            $book_id=$row[0];  
            $book_title=$row[1];  
            $book_author=$row[2]; 
            $book_year=$row[3];  
            $book_publisher=$row[4]; 
            $book_takes = $row[5];
            $book_genre = $row[6];
            $book_status = $row[7];
            
  
        ?>  
  
        <tr>
            <td><?php echo $book_id;  ?></td>  
            <td><?php echo $book_title;  ?></td>  
            <td><?php echo $book_author;  ?></td> 
            <td><?php echo $book_year;  ?></td>  
            <td><?php echo $book_publisher;  ?></td>
            <td><?php echo $book_genre;  ?></td>  
            <td><?php echo $book_takes;  ?></td> 
            <td><?php echo $book_status;  ?></td>  
        </tr>  
  
        <?php } ?>  
    </table>  
                    <center><b></b> <br></b><a href="./editBook.php">??????????</a> <br></b>  </center>
                </div>  
            </div>  
        </div>     
</div>  
  
</body>  
  
</html>  