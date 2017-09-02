<?php include 'config/setup.php'; ?>

<html>
    <head>
       <meta charset="utf-8">
       <title><?php  echo 'Contact Us'.' | '.$site_title; ?> </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        include 'config/css.php';
        include 'config/js.php';
        ?>
  
        </head>
    <body>
        
         <?php
         if(isset($_POST['submitted'])==1){
        $name=  mysqli_real_escape_string($dbc,$_POST['name']); //for escaping apostrophe's
        $email=  mysqli_real_escape_string($dbc,$_POST['email']);
        //$blueprint=  mysqli_real_escape_string($dbc,$_POST['blueprint']);
        $comments=  mysqli_real_escape_string($dbc,$_POST['comments']);
        $q="INSERT INTO comment (name,email,comments) VALUES ('$name','$email','$comments')";
        $r=  mysqli_query($dbc, $q);
        
      if($r){
            echo 'Comment added succesfully';
        }
        else
        {
            echo 'Comment could not be added because '.mysqli_error($dbc);
        }
        }

        
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
                         <h1>Contact</h1>
                        
            </div>
                    </div>
                </div>
            </div>
                           <!--/header-->  
                 <!--main-->  
                    <div class="container-fluid">
                               
                                <div class="row">
                                    <div class="col-sm-5 contactinfo" style="color:black">
                                    <p>Contact us and we'll get back to you within 24 hours.</p>
                                   
                                   
                                    <p><span class="glyphicon glyphicon-envelope"></span>support@easyessay4u.com</p>
                                  </div>
                                  <div class="col-sm-7 contactform" >
                                      
                                      <form role="form" action="contact.php" style="clear: both" method="post">
                                      <img src="images/pushpin.png" style="float: right" width="30px" height="30px">
                                       <img src="images/pushpin.png" style="float:left" width="30px" height="30px">
                                       <div class="row" style="clear:both">
                                           
                                      <div class="col-sm-6 form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                      </div>
                                          
                                      <div class="col-sm-6 form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                      </div>
                                          
                                    </div>
                                       
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                                    
                                    <div class="row">
                                      <div class="col-sm-12 form-group">
                                        <button class="btn btn-default pull-right" type="submit">Submit</button>
                                         <input type="hidden" name="submitted" value="1">
                                      </div>
                                    </div>
                                      </form>
                                  </div>
                                </div>
                              </div>
                 <!--/main-->
                 
                                 
          <?php
                include 'template/footer.php';
            ?>
          
          
        </div>
        </body>
        </html>

