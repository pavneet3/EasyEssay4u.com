
<h1>Essay Manager</h1>
    
<div class="row">
    <div class="col-md-3">

        <div class="list-group">

                    <a class="list-group-item" href="?page=topics">
                        <i class="fa fa-plus"></i> &nbsp; New essay 
                        </a>

                <?php  //to fetch the list from db
                    $q="SELECT * FROM topics ORDER BY title ASC";
                    $r=mysqli_query($dbc, $q);
                    while($list = mysqli_fetch_assoc($r)){
                         
                        $blurb=  substr($list['body']); //to print the body of essay from db

                        ?>
            <div id="page_<?php echo $list['id']; ?>" class="list-group-item<?php selected($list['id'], $opened['id'], 'active') ?>">
                        <h4 class="list-group-item-heading"><?php echo $list['title']; ?>
                            <span class="pull-right">
                                <a href="#" id="del_<?php echo $list['id']; ?>" class="btn btn-danger btn-delete topic"><i class="fa fa-trash-o"></i></a>
                                <a href="index.php?page=topics&id=<?php echo $list['id']; ?>" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
                            </span>
                        </h4> <!-- to print the list of pages from db -->
                        <p class="list-group-item-text" ><?php echo $blurb; ?></p>  
            </div>

                <?php } ?>

        </div>
    </div>
    <div class="col-md-9"> 

        <?php
            if(isset($message)){ echo $message; } ?>

        <form role="form" action="index.php?page=topics&id=<?php echo $opened['id']; ?>" method="post">

            <div class="form-group">
                <label for="title"> Title:</label>
                <input class="form-control" type="text" name="title" id="title" value="<?php echo $opened['title']; ?>" placeholder="Essay Title">
            </div>

            <div class="form-group">
                <label for="category"> Category:</label>
                <input class="form-control" type="text" name="category" id="category" value="<?php echo $opened['category']; ?>" placeholder="Essay Category">
            </div>
            
            <div class="form-group">
                <label for="name"> Writer's name:</label>
                <input class="form-control" type="text" name="name" id="name" value="<?php echo $opened['name']; ?>" placeholder="Writer's name">
            </div>
            
            <div class="form-group">
                <label for="blueprint"> Blueprint:</label>
                <textarea class="form-control" type="text" name="blueprint" id="blueprint" placeholder="Essay Blueprint"><?php echo $opened['blueprint']; ?>"</textarea> 
            </div>

             <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" type="text" name="body" id="body" rows="8" placeholder="Page Body"><?php echo $opened['body']; ?></textarea>     
            </div>

            <button type="submit" class="btn btn-default">Save</button>
            <input type="hidden" name="submitted" value="1">
            <?php if(isset($opened['id'])){   ?>
                <input type="hidden" name="id" value="<?php echo $opened['id']; ?>" >
            <?php } ?>

        </form>
    </div>
</div>
    

    
   