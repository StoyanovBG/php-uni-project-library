<?php
            include '../../../../db/config.php';
            $sql123 = "select * from positions";
            $all_positions = mysqli_query($dbConn, $sql123);
            
            $edit_id = $_GET['edit'];
            
             if(isset($_POST['submit']))
    {
           $name = mysqli_real_escape_string($dbConn,$_POST['name']);               
           $fname = mysqli_real_escape_string($dbConn,$_POST['fname']);    
           $position = mysqli_real_escape_string($dbConn,$_POST['Position']);
           $phone = mysqli_real_escape_string($dbConn,$_POST['phone']);
           $email = mysqli_real_escape_string($dbConn,$_POST['email']);
           
           
            $check_phone_query="select * from employee WHERE employee_telNumber='$phone'";
            $run_query1=mysqli_query($dbConn,$check_phone_query);

            if(mysqli_num_rows($run_query1)>0)  
            {  
            echo "<script>alert('Employee is already exist in our database, Please try another one!')</script>";  
            exit();  
            }
    
            $check_email_query="select * from employee WHERE employee_email='$email'";
            $run_query2=mysqli_query($dbConn,$check_email_query);

    if(mysqli_num_rows($run_query2)>0)  
    {  
    echo "<script>alert('Employee is already exist in our database, Please try another one!')</script>";  
    exit();  
    }
           
           $update_empl = "UPDATE employee SET employee_fName = '$name', employee_lName = '$fname',
                          employee_telNumber = '$phone' , employee_email = '$email' , id_positions = '$position'
                          WHERE id_employee = '$edit_id'";
           
        
        if ($dbConn->query($update_empl) == TRUE) 
            { echo '<script>alert("Employee edit successfully")</script>';}
        else 
            { echo '<script>alert('. $dbConn->error . ')</script>';} 
    }
    ?> 
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="../../../../bootstrap-4.0-dist\css\bootstrap.css"> 
    <title>?????????????????????? ???? ????????????????</title>  
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
                    <h3 class="panel-title">?????????????????????? ???? ????????????????</h3>  
                </div>  
                <div class="panel-body">  
<form role='form' method="post" action='#'>
    <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Name" name="name" type="text" autofocus required="">  
                            </div>  
                             <div class="form-group">  
                                <input class="form-control" placeholder="Family name" name="fname" type="text" autofocus required="">  
                            </div>  
        <label>???????????? ??????????????: </label>
        <select name="Position">
            <?php 
                while ($pos = mysqli_fetch_array(
                        $all_positions,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $pos["id_positions"];
                ?>">
                    <?php echo $pos["positions"];
                    ?>
                </option>
            <?php 
                endwhile; 
            ?>
        </select> <br>
                             <div class="form-group">  
                                <input class="form-control" placeholder="Phone" name="phone" type="text" autofocus required="">  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Email" name="email" type="email" autofocus required="">  
                            </div>  
        <br>
          <input class="btn btn-lg btn-success btn-block" type="submit" value="????????????????????" name="submit" style="background-color: palevioletred;" >  
    </form>
     <br>
    <table border="7">  
        <thead>  
          <tr>  
            <th>id</th>  
            <th>??????</th>  
             <th>??????????????</th>  
              <th>??????????????</th>  
               <th>??????????</th>
                <th>??????????????</th>  
        </tr>  
        </thead>  
  
        <?php  
      include '../../../../db/config.php';
        $view_empl_query="select * from employee";
        $run=mysqli_query($dbConn,$view_empl_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $empl_id=$row[0];  
            $fname=$row[1];  
            $lname=$row[2];
            $tel=$row[3];
            $email=$row[4];
            $pos=$row[5];
  
        ?>  
  
        <tr>
            <td><?php echo $empl_id;  ?></td>  
            <td><?php echo $fname;  ?></td>  
            <td><?php echo $lname;  ?></td>  
            <td><?php echo $tel;  ?></td>  
            <td><?php echo $email;  ?></td>  
            <td><?php echo $pos;  ?></td>  
        </tr>  
  
        <?php } 
        ?>  
    </table>  
      <center><b></b> <br></b><a href="./editEmployee.php">??????????</a> <br></b>  </center>
</body>
</html>