<?php
if(!empty($_GET['q']))
{
    include 'config/connection.php';
    $q=$_GET['q'];
    $query="select * from topics where title like '%q%'";
    $result=mysqli_query($dbc,$query);
    while($output=  mysqli_fetch_assoc($result))
    {
        echo '<a>'.$output['title'].'</a>';
    }
}



?>


