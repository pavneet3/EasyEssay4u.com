<?php include 'config/setup.php'; ?>

<html>
    <head>
         <title><?php  echo 'Others'.' | '.$site_title; ?> </title>
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
			<img style="float:left" src="images/websitelogo2puple.png" height="150" width="150">
                        <h1>Others</h1>
                        
            </div>
                    </div>
                </div>
            </div>
                           <!--/header-->  
          
                                <!--main-->
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-9 sidenevigation" >
                                            <div class="row">
                                                <div class="col-sm-4">
                                                     <div class="list-group">
                                        <?php  //to fetch the list from db

                                        $q="SELECT * FROM topics WHERE category LIKE '%others' ORDER BY title ASC LIMIT 50";
                                       $r=mysqli_query($dbc, $q);
                                       while($list = mysqli_fetch_assoc($r)){
                                   //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                                   ?>
                                   <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation" style="margin:20px">
                                   <a href="TopicContent.php?topic=<?php echo $list['title'];?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                                   </a> 
                                                    </div>
                                                         <?php } ?> 
                                                </div>
                                                </div>
                                                <div class="col-sm-4">
                                                     <div class="list-group">
                                       <?php  //to fetch the list from db

                                            $q="SELECT * FROM topics WHERE category LIKE '%thers' ORDER BY title ASC LIMIT 50,100";
                                           $r=mysqli_query($dbc, $q);
                                           while($list = mysqli_fetch_assoc($r)){
                                       //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                                       ?>
                                       <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation" style="margin:20px">
                                       <a href="TopicContent.php?topic=<?php echo $list['title'];?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                                       </a> 
                                                    </div>
                                                         <?php } ?> 
                                                </div>
                                                </div>
                                                <div class="col-sm-4">
                                                     <div class="list-group">
                                       <?php  //to fetch the list from db

                                        $q="SELECT * FROM topics WHERE category LIKE '%thers' ORDER BY title ASC LIMIT 100,150";
                                       $r=mysqli_query($dbc, $q);
                                       while($list = mysqli_fetch_assoc($r)){
                                   //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                                   ?>
                                   <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation" style="margin:20px">
                                   <a href="TopicContent.php?topic=<?php echo $list['title'];?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                                   </a> 
                                                    </div>
                                                         <?php } ?> 
                                                </div>
                                            </div>
                                        </div>
                                        </div> 
                                        <div class="col-sm-3 sidenevigation">
                                          <?php include 'template/sidenevigation.php'; ?> 
                                             <div class="categorydemand">
                                                <h3><center>Can't find Topic</center></h3>
                                                <form action="demand.php">
                                                    <button class="btn btn-success" type="submit">demand it</button> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                          <?php
                include 'template/footer.php';
            ?>                       

          
        </div>
    </body>
</html>