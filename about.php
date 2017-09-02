<?php include 'config/setup.php'; ?>

<html>
    <head>
       <meta charset="utf-8">
       <title><?php  echo 'About Us'.' | '.$site_title; ?> </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        include 'config/css.php';
        include 'config/js.php';
        ?>
        </head>
    <body>
        <div class="container-fluid background">
        <?php
     
     include('template/navigation.php');
     ?>
        
          <!--header-->  
            <div class="jumbotron feature">
		<div class="container">
			 <img style="float:left" src="images/websitelogo2puple.png" height="150" width="150">
                         <h1>About</h1>
                </div>
            </div>
          <!--/header-->  
          
        <!--main--> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 aboutinfo">
                    <h2>Why EasyEssay4u?</h2>
    <p>In EasyEssay4u,you will find the solutions to all your essay related problems. Name it and you have the essay. We offer a wide range of essay topics
     not only for school students, but also those of you who are preparing for competitive exams or those who just want to improve their essay writing.
    This is a perfect website for people of all genre and age. Also the unique features -DEMAND and WRITE are found nowhere else.
    Just submit your topic and you will get the essay. Or maybe you can contribute to the essays!!</p>
                </div>
            </div>
        </div>
         <?php
                include 'template/footer.php';
            ?>
        </div>
    </body>
</html>
            

