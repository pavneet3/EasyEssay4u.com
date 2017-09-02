<?php include 'config/setup.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title><?php  echo 'Home'.' | '.$site_title; ?> </title>
    <?php
     include('config/css.php');
    
     include('config/js.php');
    ?>
     <script>
     $(".getstarted").hover(function(){
    $(this).css("background-color", "yellow");
    }, function(){
    $(this).css("background-color", "pink");
});</script>
    
</head>
<link rel="shortcut icon" href="images/websitelogo2puple.png"/>
<body>


    <!-- Navigation -->
     <?php
     
     include('template/navigation.php');
     ?>
    <div class="container-fluid background">

	<div class="jumbotron feature">
		<div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <img style="float:left" src="images/websitelogo2puple.png" height="200" width="200">
                            <h1>&nbsp; EasyEssay4u</h1></img>
                        <p class="text-right">Your one stop to perfect essays!!!</p>
                        <form action="topics.php">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class=" getstarted">Get Started</button> 
                        </form>
		</div>
                        </div>
                    </div>
	</div>

    <!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row" style="margin:20px">
            <div class="col-lg-12">
                <h1 class="page-header">Ease your work

                </h1>
                <p style="font-size:15px">EasyEssay4u is place where you can find brief essays according to your need cutting your labour in researching on<a href=narrative.php>Narrative Essays</a>,<a href=argumentative.php>Argumentative Essays</a>,<a href=cause.php>Causes And Effects Essays</a>,<a href=reflective.php>Reflective Essays</a> and many more topics.</p>
                </div>
        </div>
        <!-- /.row -->
        
         <div class="row">
                                              <div class="col-sm-5 recentlyadded ">
                                                  <h1>topic</h1>
                                                  
                                              </div>
                                              <div class="col-sm-5 recentlyadded" style="float: right">
                                                  <h1>topic</h1>
                                                  
                                              </div>
                                          </div>
                                          <div class="row">
                                                  <div class="col-sm-5 recentlyadded" >
                                                  <h1>topic</h1>
                                                  
                                              </div>
                                                  <div class="col-sm-5 recentlyadded" style="float: right">
                                                  <h1>topic</h1>
                                                  
                                              </div>
                                              
                                          </div>

        </div>
        <!--/contaner-->
        <div class="footer-blurb">
            <div class="container">
		
			
				<div class="row">
                                     <img src="images/pushpin.png" style="float: right" width="50px" height="50px">
                                       <img src="images/pushpin.png" style="float:left" width="50px" height="50px">
                                       <h1 style="clear: both"><center>Unique Features</center></h1>
						<div class="col-sm-6">
					      <div class="panel panel-default text-center">
					        <div class="panel-heading">
					          <h1>DEMAND</h1>
					        </div>
                                                  <div class="panel-body">
								<ul style="text-align:left">
									<li>Get essays written by experts free of cost</li>
									<li>Topics according to your needs</li>
									<li>Format you specify</li>
									<li>Essay will reflect back within a prescriped time period</li>
								</ul>
								</div>
					        <div class="panel-footer " >
                                                    <form action="demand.php">
                                                        <button type="submit" class="btn btn-success" ">Demand</button>
                                                    </form>
                                                </div>
					      </div>
					    </div>
					    <div class="col-sm-6">
					      <div class="panel panel-default text-center">
                                                  <div class="panel-heading" >
					          <h1>WRITE</h1>
					        </div>
					        <div class="panel-body text-left">
                                                   <ul>
							<li>Enhance your writing skills</li>
					        <li>Topics of your choice</li>
					        <li>Essay will be posted with your name if found appropriate </li>
					        <li>Write within 500 word</li>
                                                </ul>
                                                </div>
					        <div class="panel-footer" >
                                                    <form action="write.php">
                                                        <button type="submit" class="btn btn-success">Start Writing</button>    
                                                    </form>
                                                </div>
					      </div>
    					</div>
					</div>
				<!-- /.row -->
			</div>
		</div>
                  <!--/unique features-->
                  
                 
		

<!--navigation 2-->

            <?php
            include 'template/lowernavigation.php';    
            include 'template/footer.php';?>
	

    </div>
</body>

</html>
        
