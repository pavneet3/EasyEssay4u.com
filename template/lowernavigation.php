<?php include '../config/setup.php' ?>; 

<div class="container-fluid lowernavigation">
                      <div class="row">
                          <div class="col-sm-2">
                              <h3>Descriptive</h3>
                              <div class="list-group">
                              <?php  //to fetch the list from db

                             $q="SELECT * FROM topics WHERE category LIKE '%escriptive' ORDER BY title ASC LIMIT 5";
                            $r=mysqli_query($dbc, $q);
                            while($list = mysqli_fetch_assoc($r)){
                        //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                        ?>
                        <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                        <a href="TopicContent.php?topic=<?php echo $list['title'];?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                        </a> <!-- to print the list of pages from db -->
                        </div>

                <?php } ?> 
                          </div>
                              <li><a href="descriptive.php">click here to see more</a></li>
                              </div>
                          
                          
                          <div class="col-sm-2">
                              <h3>Argumentative</h3>
                              <div class="list-group">
                              <?php  //to fetch the list from db
                    
                             $q="SELECT * FROM topics WHERE category LIKE '%argumentative' ORDER BY title ASC LIMIT 5 ";
                            $r=mysqli_query($dbc, $q);
                            while($list = mysqli_fetch_assoc($r)){
                        //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                        ?>
                        <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                        <a href="TopicContent.php?topic=<?php echo $list['title']; ?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                        </a> <!-- to print the list of pages from db -->
                        </div>

                <?php } ?> 
                          </div>
                              <li><a href="argumentative.php">click here to see more</a></li>
                              </div>
                          
                          
                      <div class="col-sm-2">
                              <h3>Narrative</h3>
                              <div class="list-group">
                              <?php  //to fetch the list from db
                    
                             $q="SELECT * FROM topics WHERE category LIKE '%narrative' ORDER BY title ASC LIMIT 5 ";
                            $r=mysqli_query($dbc, $q);
                            while($list = mysqli_fetch_assoc($r)){
                        //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                        ?>
                        <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                        <a href="TopicContent.php?topic=<?php echo $list['title']; ?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                        </a> <!-- to print the list of pages from db -->
                        </div>

                <?php } ?> 
                          </div>
                              <li><a href="narrative.php">click here to see more</a></li>
                              </div>
                          
                          
                     <div class="col-sm-2">
                         <h3>Cause &AMP; Effect</h3>
                             <div class="list-group">
                              <?php  //to fetch the list from db
                    
                             $q="SELECT * FROM topics WHERE category LIKE '%ause and effect' ORDER BY title ASC LIMIT 5 ";
                            $r=mysqli_query($dbc, $q);
                            while($list = mysqli_fetch_assoc($r)){
                        //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                        ?>
                        <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                        <a href="TopicContent.php?topic=<?php echo $list['title']; ?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                        </a> <!-- to print the list of pages from db -->
                        </div>

                <?php } ?> 
                          </div>
                              <li><a href="cause.php">click here to see more</a></li>
                              </div>
                          
                          
                      <div class="col-sm-2">
                              <h3>Reflective</h3>
                              <div class="list-group">
                              <?php  //to fetch the list from db
                    
                             $q="SELECT * FROM topics WHERE category LIKE '%eflective' ORDER BY title ASC LIMIT 5 ";
                            $r=mysqli_query($dbc, $q);
                            while($list = mysqli_fetch_assoc($r)){
                        //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                        ?>
                        <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                        <a href="TopicContent.php?topic=<?php echo $list['title']; ?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                        </a> <!-- to print the list of pages from db -->
                        </div>

                <?php } ?> 
                          </div>
                              <li><a href="reflective.php">click here to see more</a></li>
                              </div>
                          
                          
                      <div class="col-sm-2">
                              <h3>Others</h3>
                              <div class="list-group">
                              <?php  //to fetch the list from db
                    
                             $q="SELECT * FROM topics WHERE category LIKE '%thers' ORDER BY title ASC LIMIT 5 ";
                            $r=mysqli_query($dbc, $q);
                            while($list = mysqli_fetch_assoc($r)){
                        //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                        ?>
                        <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                        <a href="TopicContent.php?topic=<?php echo $list['title']; ?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                        </a> <!-- to print the list of pages from db -->
                        </div>

                <?php } ?> 
                          </div>
                              <li><a href="others.php">click here to see more</a></li>
                              </div>
                      </div>
                  </div>

