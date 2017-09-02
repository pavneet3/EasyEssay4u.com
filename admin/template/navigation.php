

<nav class="navbar navbar-default" role="navigation">
    
   
            
    <ul class="nav navbar-nav"> 
        <li><a href="?page=user">Users</a>
        <li><a href="?page=topics">Topics</a></li>
        <li><a href="?page=settings">Settings</a></li>
        <li><a href="?page=writes">Essays submitted</a></li>
        <li><a href="?page=demand">Demand</a></li>
    </ul>
    
    <div class="pull-right">
    <ul class="nav navbar-nav">
            <li>
                 <?php if($debug==1){?>
                 <button type="button" id="btn-debug" class="btn btn-default navbar-btn"><i class="fa fa-bug"></i></button>
                 <?php } ?>
            </li>
            
            <li class="dropdown">
               <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $user['fullname']; ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>

     </ul>
    </div>
  </nav>