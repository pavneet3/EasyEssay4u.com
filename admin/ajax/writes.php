<?php
    
    include ('../../config/connection.php');

    $id=$_GET['id'];
    $q="DELETE FROM writes WHERE id=$id";
    $r=  mysqli_query($dbc, $q);
    
    if($r)
    {
        echo 'Essay deleted :';
    }
    else
    {
        echo 'There was an error...<br>';
        echo $q.'<br>';
        echo mysqli_error($dbc);
    }


?>
