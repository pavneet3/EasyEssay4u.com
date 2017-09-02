<?php

function data_setting_value($dbc,$id)
{
    $q="SELECT * FROM settings WHERE id='$id'";
$r=  mysqli_query($dbc, $q);
$data=  mysqli_fetch_assoc($r);
return $data['value'];

}

function data_page($dbc, $id)
{
    if(is_numeric($id))
    {
        $cond="WHERE id=$id";
    }
    else
    {
        $cond="WHERE slug='$id'";
    }
    $q= "SELECT * FROM pages $cond";
    $r=  mysqli_query($dbc, $q);
    $data=  mysqli_fetch_assoc($r);
    
    return $data;
}



?>

