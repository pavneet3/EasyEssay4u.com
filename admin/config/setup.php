<?php
//setup file

error_reporting(0);

#database connection
include '../config/connection.php';

#Constants:
define('D_TEMPLATE', 'template');

#Functions:
include ('functions/data.php');
include ('functions/template.php');
include ('functions/sandbox.php');

#Site setup:
$debug=  data_setting_value($dbc,'debug-status');

$site_title='Easy_Essay';

if(isset($_GET['page']))
{
 $page=$_GET['page'];  //set pageid equal to url of given page 
}  else {
    $page='dashboard';  //set pageid equal to 1 or the home page
}

#page setup
include ('config/queries.php');

#User setup:
$user=  data_user($dbc,$_SESSION['username']);

?>
