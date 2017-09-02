
                                      <h4>Recently Added</h4>
                                        <div class="list-group ">
                                        <?php  //to fetch the list from db

                                        $q="SELECT * FROM topics  ORDER BY id DESC LIMIT 10";
                                       $r=mysqli_query($dbc, $q);
                                       while($list = mysqli_fetch_assoc($r)){
                                   //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                                   ?>
                                   <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                                   <a href="TopicContent.php?topic=<?php echo $list['title'];?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                                   </a> 
                                                    </div>
                                                         <?php } ?> 
                                      </div>
                                      <hr>
                                
                                      <h4>Most Viewed</h4>
                                        <div class="list-group">
                                         <?php  //to fetch the list from db

                                        $q="SELECT * FROM topics WHERE id in (1,2,3,4,7,8)";
                                       $r=mysqli_query($dbc, $q);
                                       while($list = mysqli_fetch_assoc($r)){
                                   //$blurb=  substr($list['body'],0,10); //to print the body of essay from db

                                   ?>
                                   <div id="page_<?php echo $list['title']; ?>" class="list-group-item sidenevigation">
                                   <a href="TopicContent.php?topic=<?php echo $list['title'];?>&id=<?php echo $list[id];?>" class="list-group-item-heading"><?php echo $list['title']; ?>
                                   </a> 
                                                    </div>
                                                         <?php } ?> 
                                      </div>
