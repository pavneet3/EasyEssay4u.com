<h1>Essays demanded</h1>
    
<div class="row">
    <div class="col-md-6">

        <div class="list-group">

                <?php  //to fetch the list from db
                    $q="SELECT * FROM demand ORDER BY id ASC";
                    $r=mysqli_query($dbc, $q);
                    while($list = mysqli_fetch_assoc($r)){

                        //$blurb=  substr($list['body'],0,20); //to print the body of page from db

                        ?>
            <div id="page_<?php echo $list['id']; ?>" class="list-group-item<?php selected($list['id'], $opened['id'], 'active') ?>">
                        <h4 class="list-group-item-heading"><?php echo $list['topic']; ?>
                            <span class="pull-right">
                                <a href="#" id="del_<?php echo $list['id']; ?>" class="btn btn-danger btn-delete demand"><i class="fa fa-trash-o"></i></a>
                            </span>
                        </h4> <!-- to print the list of pages from db -->
                        <p class="list-group-item-text" ><?php //echo $blurb; ?></p>  
            </div>

                <?php } ?>

        </div>
    </div>
    
</div>
    

    
   