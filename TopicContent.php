<?php include 'config/setup.php'; ?>

<html>
    <head>
         <title><?php  echo 'Topic Content'.' | '.$site_title; ?> </title>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        include 'config/css.php';
        include 'config/js.php';
        ?>
        </head>
    <body>
        <?php 
        $id=$_GET[id];
        $q1= "SELECT * FROM topics WHERE id=$id";
        $r1=  mysqli_query($dbc, $q1);
        $open=  mysqli_fetch_assoc($r1);
        ?>
        <div class="container-fluid background">
        <?php
     
     include('template/navigation.php');
     ?>
        
          <!--header-->  
            <div class="jumbotron feature">
		<div class="container">
                    <div class="row">
                        <div class="col-sm-6">
			 <img style="float:left" src="images/websitelogo2puple.png" height="150" width="150">
                         <h1><?php echo $open['title']; ?></h1>
                        
            </div>
                    </div>
                </div>
            </div>
                           <!--/header-->  
                                <!--main-->
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-9 ">
                                            <div class="container-fluid">
                                                <div class="row">
                                                <div class="col-sm-12 contentareaframe">  
                                                    <h1 align="center"><strong><u><?php echo 'Essay on '.$open['title']; ?></u></strong></h1>
                                                <h3 align="right"><u><?php echo '- By '.$open['name'];?></u></h3>
                                                    <div class="row">
                                                    <div class="contentarea">
                                                <div class="form-group">
                                                <label for="blueprint">Blueprint :</label>
                                                <textarea class="form-control showarea" readonly="readonly" rows="10" name="blueprint" id="blueprint"><?php echo $open['blueprint']; ?></textarea>
                                                </div>
                                                  
                                                    <div class="form-group">
                                                <label for="body">Body :</label>
                                                <textarea class="form-control showarea" readonly="readonly" rows="50" name="body" id="body"><?php echo $open['body']; ?></textarea>
                                                </div>
                                                    </div>    
                                                        
                                                </div>        
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 sidenevigation">    
                                        <?php include 'template/sidenevigation.php';?>
                                       </div>       
                                        </div>
                                </div>
                                
                                 <?php include 'template/footer.php';?>

        </div>
    </body>
</html>
