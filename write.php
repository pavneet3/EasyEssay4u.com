<?php include 'config/setup.php'; ?>

<html>
    <head>
         <title><?php  echo 'Write'.' | '.$site_title; ?> </title>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        include 'config/css.php';
        include 'config/js.php';
        ?>
    <script>
   
    </script>       
        </head>
    <body>
        
         <?php
         if(isset($_POST['submitted'])==1){
        $topic=mysqli_real_escape_string($dbc,$_POST['topic']);
        $name=  mysqli_real_escape_string($dbc,$_POST['name']); //for escaping apostrophe's
        $email=  mysqli_real_escape_string($dbc,$_POST['email']);
        $blueprint=  mysqli_real_escape_string($dbc,$_POST['blueprint']);
        $body=  mysqli_real_escape_string($dbc,$_POST['body']);
        $q="INSERT INTO writes (name,email,topic,blueprint,body) VALUES ('$name','$email','$topic','$blueprint','$body')";
        $r=  mysqli_query($dbc, $q);
        
      if($r){
            echo 'Essay added succesfully';
        }
        else
        {
            echo 'Essay could not be added because '.mysqli_error($dbc);
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
                         <h1>Write</h1>
                        
            </div>
                    </div>
                </div>
            </div>
                           <!--/header-->  

          <div class="container ">
              <div>
                  
                  <h3>Why Write?</h3>
              <p>Writing essays is like studying your soul. Have you ever wondered why do teachers and professors give you this bunch of written assignments? 
        Why can’t they ask you all that in an oral form? The answer is quite simple. When you write an essay – you learn to express yourself in a more 
        logical way, and also you develop your writing skills, your vocabulary and your own writing style. And all that is not an oral activity. By writing 
        simple essays you can grow to be a very talented and creative writer or speaker, or logical thinker or whatever. Writing develops you in many ways. </p>
        
              <h2 align="center"><b>You can either select a topic or write your own!!</b></h2>
              
              </div>
          </div>
          
          <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-4 writetopics">
                      <div class="list-group">
                          <h3>Select a Topic</h3>
                          
                          <?php  //to fetch the list from db
                    $q="SELECT * FROM demand ORDER BY topic ASC";
                    $r=mysqli_query($dbc, $q);
                    while($list = mysqli_fetch_assoc($r)){
                         
                        //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                        ?>
                        <div id="page_<?php echo $list['topic']; ?>" class="list-group-item topiclist">
                        <h4 class="list-group-item-heading "><?php echo $list['topic']; ?>
                            <span class="pull-right">
                                <a  href="write.php?topic=<?php echo $list['topic']; ?>" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                            </span>
                        </h4> <!-- to print the list of pages from db -->
                        </div>

                <?php } ?>  
                          
                      </div>   
                        
                  </div>
                  
                  <div class="col-sm-8 blueprint" >
                      
                      <img src="images/pushpin.png" style="float: right" width="40px" height="40px">
                   <img src="images/pushpin.png" style="float:left" width="40px" height="40px">
                    <form role="form" action="write.php" style="clear: both" method="post">
                        <div class="row">
                            <div class="col-sm-5">
                        
                        <div class="form-group">
                            <label for="topic">Topic: <sup style="color:red">*</sup></label>
                                   <input type="text" class="form-control" name="topic" id="topic" value="<?php echo $_GET['topic']; ?>" placeholder="Enter topic" autocomplete="off" required>
                                 </div>
                                 <div class="form-group">
                                   <label for="name">Writer's Name: <sup style="color:red">*</sup></label>
                                   <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" autocomplete="off" required>
                                 </div>
                                  <div class="form-group">
                                   <label for="email">Email address: <sup style="color:red">*</sup></label>
                                   <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" autocomplete="off" required>
                                 </div>
                                </div>
                            </div>
                           <div class="form-group">
                       <label for="blueprint">Short Description: <sup style="color:red">*</sup></label>
                       <textarea class="form-control area" type="text" name="blueprint" rows="10" id="blueprint" placeholder="description" maxlength="500" required></textarea>
                     </div>
                        <br>
                    <label for="area" style="clear: both"><h4><b>Write: <sup style="color:red">*</sup></b></h4></label>
                       <textarea class="form-control area"  type="text" name="body" rows="30" id="body" placeholder="write" required></textarea>
                       <br>
                       <button type="submit" class="btn btn-success">Submit</button>
                              <input type="hidden" name="submitted" value="1">
                              <br><br>
                              <p style="color: red; font-size:15px" >*required fields</p>
                           
                    </form>
              </div>
          </div>         
             <?php
                include 'template/footer.php';
            ?>
        
        </div>
    </body>
</html>