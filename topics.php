<?php include 'config/setup.php'; ?>

<html>
    <head>
         <title><?php  echo 'Topics'.' | '.$site_title; ?> </title>
       <meta charset="utf-8">
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
                    <div class="row">
                        <div class="col-sm-6">
			 <img style="float:left" src="images/websitelogo2puple.png" height="150" width="150"><h1>Topics</h1>
                        
                      <!--/header-->  
            </div>
                    </div>
                </div>
            </div>
                          <!--main-->
                          
                          <div class="container-fluid ">
                              
                              <div class="row">
                                  <div class="col-sm-9">
                                      
                                        
                                              <div class="col-sm-12 EssayType ">
                                                  <img src="images/pushpin.png" style="float: right" width="50px" height="50px">
                                       <img src="images/pushpin.png" style="float:left" width="50px" height="50px">
                                       <h2 style="clear: both"><u>Types of Essays</u></h2>
                                                  <br>
                                                  
                                                  <dl class="essaytopictypes">
                                                   <dt><a href="narrative.php">Narrative Essays</a>
                                                    <dd>Telling a Story. In a narrative essay, the writer tells a story about a real-life experience. ...</dd>
                                                    </dt><br>
                                                    <dt> <a href="argumentative.php">Argumentative Essays</a>
                                                    <dd>This is the type of essay where you prove that your opinion, theory or hypothesis about an issue is correct or more truthful than those of others. </dd>
                                                    </dt><br>
                                                    <dt><a href="reflective.php">Reflective Essays</a>
                                                    <dd>A reflective essay is an essay in which the writer examines his or her experiences in life. </dd>
                                                    </dt><br>  
                                                    <dt><a href="cause.php">Cause and Effect Essays</a>
                                                    <dd>In this kind of essay, the aim is to explain the causes (reasons) or the effects (results) of an event or situation.</dd>
                                                    </dt><br>
                                                    <dt><a href="descriptive.php">Descriptive Essays</a>
                                                    <dd>The descriptive essay is a genre of essay that asks the student to describe something—object, person, place, experience, emotion, situation, etc.</dd>
                                                    </dt>
                                                    <br>
                                                    <dt><a href="others.php">Other Essays</a>
                                                    <dd>This category includes all the miscellaneous essays not included in the above categories.</dd>
                                                    </dt>
                                                </dl>
                                              </div>
                                                
                                          </div>   
                                   
                                     
                                  <div class="col-sm-3 sidenevigation">
                                  <?php include 'template/sidenevigation.php';?>
                                 </div>
                              </div> 
                                  </div>
          <?php
                include 'template/footer.php';
            ?>           
        </div>
    </body>
</html>

