<?php include 'config/setup.php'; ?>

<html>
    <head>
         <title><?php  echo 'Demand'.' | '.$site_title; ?> </title>
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
        if(isset($_POST['submitted'])==1){
        $name=  mysqli_real_escape_string($dbc,$_POST['name']); //for escaping apostrophe's
        $email=  mysqli_real_escape_string($dbc,$_POST['email']);
        $topic=  mysqli_real_escape_string($dbc,$_POST['topic']);
        $q="INSERT INTO demand (name,email,topic,urgency,level) VALUES ('$name','$email','$topic','$_POST[urgency]','$_POST[level]')";
        $r=  mysqli_query($dbc, $q);
        
      if($r){
            echo 'topic added successfully';
        }
        else
        {
            echo 'Topic could not be added';
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
                         <h1>Demand</h1>
                        
            </div>
                    </div>
                </div>
            </div>
                           <!--/header-->  
            
         <!--main--> 
            <div class="container-fluid" >
          <div class="row ">
    <div class="col-sm-6 demandform">
         <img src="images/pushpin.png" style="float: right" width="50px" height="40px">
                                       <img src="images/pushpin.png" style="float:left" width="50px" height="40px">
            <form role="form" action="demand.php" style="clear: both" method="post">
                                 <div class="form-group">
                                   <label for="name">Name:  <sup style="color:red">*</sup></label>
                                   <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" autocomplete="off" required>
                                 </div>
                                  <div class="form-group">
                                   <label for="email">Email address:  <sup style="color:red">*</sup></label>
                                   <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" autocomplete="off" required>
                                 </div>
                                 <div class="form-group">
                                   <label for="topic">Topic:  <sup style="color:red">*</sup></label>
                                   <input type="text" class="form-control" name="topic" id="topic" placeholder="Enter topic" autocomplete="off" required>
                                 </div>
                                   <div class="form-group">
                                  <label for="urgency">Urgency:</label>
                                  <select class="form-control" name="urgency" id="urgency">
                                    <option value="1 day">1 day</option>
                                    <option value="2 day">2 day</option>
                                    <option value="3 day">3 day</option>
                                    <option value="4 day">4 day</option>
                                  </select>
                                   </div>
                                    <div class="form-group">
                                  <label for="level">Level:</label>
                                  <select class="form-control" name="level" id="level">
                                    <option value="school">School</option>
                                    <option value="college">College</option>
                                    <option value="primary">Primary</option>
                                    <option value="corporate">Corporate</option>
                                  </select>
                                   </div>
             
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <input type="hidden" name="submitted" value="1">
                                     <br><br>
                              <p style="color: red; font-size:15px" >*required fields</p>
                               </form>
        </div>
            
              <div class="col-sm-6 demanddesc" >
               
            <h3 style="clear: both"><center>Why Demand?</center></h3>
                  <p>Writing essay sometimes become a major problem for you.Getting accurate matter and binding the topic altogether is a difficult task
                  to write an essay you have to research for the topic and end up getting nothing relevant and hence it wastes
                  your time as well as energy . But with our scheme of demanding essays you can save your precious time and
                  stay calm about your work because we are here to research on the topic and give proper essay according to your needs.
                 </p>
                  
                  
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

