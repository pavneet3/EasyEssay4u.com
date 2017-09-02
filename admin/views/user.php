<h1>User Manager</h1>

<div class="row">
    <div class="col-md-3">

        <div class="list-group">

                    <a class="list-group-item" href="?page=user">
                        <i class="fa fa-plus"></i> &nbsp; New user  
                        </a>

                <?php  //to fetch the list from db
                    $q="SELECT * FROM users ORDER BY last ASC";
                    $r=mysqli_query($dbc, $q);
                    while($list = mysqli_fetch_assoc($r)){
                        
                        $list=  data_user($dbc, $list['id']);
                        //$blurb=  substr($page_list['body'],0,20); //to print the body of page from db

                        ?>
            <a class="list-group-item<?php selected($list['id'], $opened['id'], 'active') ?>" href="index.php?page=user&id=<?php echo $list['id']; ?>">
                        <h4 class="list-group-item-heading"><?php echo $list['fullname_reverse']; ?></h4> <!-- to print the list of pages from db -->
                        <!-- <p class="list-group-item-text" ><?php //echo $blurb; ?></p> -->  
                         </a>

                <?php } ?>

        </div>
    </div>
    <div class="col-md-9"> 

        <?php
            if(isset($message)){ echo $message; } ?>

        <form role="form" action="index.php?page=user&id=<?php echo $opened['id']; ?>" method="post">

            <div class="form-group">
                <label for="first">First Name:</label>
                <input class="form-control" type="text" name="first" id="first" value="<?php echo $opened['first']; ?>" placeholder="First Name" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label for="last"> Last Name:</label>
                <input class="form-control" type="text" name="last" id="last" value="<?php echo $opened['last']; ?>" placeholder="Last Name" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label for="email"> Email Address:</label>
                <input class="form-control" type="text" name="email" id="email" value="<?php echo $opened['email']; ?>" placeholder="Email Address" autocomplete="off">
            </div>
            
             <div class="form-group">
                <label for="status"> Status:</label>
                <select class="form-control" name="status" id="status">
                    <option value="0" <?php if(isset($_GET['id'])) {selected('0',$opened['status'],'selected'); }?>>Inactive</option>
                    <option value="1" <?php if(isset($_GET['id'])) {selected('1',$opened['status'],'selected'); }?>>Active</option>
                </select> 
            </div>

            <div class="form-group">
                <label for="password"> Password:</label>
                <input class="form-control" type="password" name="password" id="password"  value="" placeholder="User Password" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label for="passwordv"> Verify Password:</label>
                <input class="form-control" type="password" name="passwordv" id="passwordv"  value="" placeholder="Type password again" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-default">Save</button>
            <input type="hidden" name="submitted" value="1">
            <?php if(isset($opened['id'])){   ?>
                <input type="hidden" name="id" value="<?php echo $opened['id']; ?>" >
            <?php } ?>
            
        </form>
    </div>
</div>

