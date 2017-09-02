<?php

function data_setting_value($dbc,$id)
{
    $q="SELECT * FROM settings WHERE id='$id'";
    $r=  mysqli_query($dbc, $q);
    $data=  mysqli_fetch_assoc($r);
    return $data['value'];

}

function data_topic($dbc,$id)
{
    $q="SELECT * FROM topics WHERE id='$id'";
    $r=  mysqli_query($dbc, $q);
    $data=  mysqli_fetch_assoc($r);
    return $data;

}

function data_write($dbc,$id)
{
    $q="SELECT * FROM writes WHERE id='$id'";
    $r=  mysqli_query($dbc, $q);
    $data=  mysqli_fetch_assoc($r);
    return $data;

}

function data_demand($dbc,$id)
{
    $q="SELECT * FROM demand WHERE id='$id'";
    $r=  mysqli_query($dbc, $q);
    $data=  mysqli_fetch_assoc($r);
    return $data;

}

function data_user($dbc,$id)
{
    if(is_numeric($id))
    {
        $cond="WHERE id='$id'";
    }
 else {
       $cond="WHERE email='$id'"; 
    }
     $q="SELECT * FROM users $cond"; 
    $r=  mysqli_query($dbc, $q);
    $data=  mysqli_fetch_assoc($r);
    $data['fullname']=$data['first'].' '.$data['last'];
    $data['fullname_reverse']=$data['last'].', '.$data['first'];
    return $data;
}



?>

