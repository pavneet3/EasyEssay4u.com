<?php 

#Start session:
session_start();

#database connection:
include '../config/connection.php';

if($_POST){
    $q="SELECT * FROM users WHERE email='$_POST[email]' AND password=SHA1('$_POST[password]')";
    $r=  mysqli_query($dbc,$q);
    
    if(mysqli_num_rows($r)==1)
    {
        $_SESSION['username']=$_POST['email'];
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>

<html>
<head>
    <title>Admin Login</title>
            
    <?php include 'config/css.php'; ?>
    
    <?php include 'config/js.php';  ?>

</head>
<body>

    <div class="container">
    
    <div class="row">
    
        <div class="col-md-4 col-md-offset-4">
            
            <div class="panel panel-info">
                <div class="panel-heading">
                  <h4>LOGIN</h4>  
                </div><!-- END panel heading-->
                
                <div class="panel-body">
                    <?php
                        if($_POST)
                        {
                            echo $_POST['email'];
                            echo '<br>';
                            echo $_POST['password'];
                        }
                    ?>
                    <form  action="login.php" method="post" role="form">
                        
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                  
                    </form>
                    
                 </div><!-- END panel body-->
                  
               </div><!--END panel-->
            
            </div><!-- END col -->

         </div><!--END row -->
      
      </div><!-- END container -->
        
</body>
</html>
