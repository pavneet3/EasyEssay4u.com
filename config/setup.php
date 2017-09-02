<?php
//setup file;
error_reporting(0);

#database connection
include 'config/connection.php';

#Constants:
define('D_TEMPLATE', 'template');
define('D_VIEW', 'views');

#Functions:
include ('functions/sandbox.php');
include ('functions/data.php');
include ('functions/template.php');

#Site setup:
$debug=  data_setting_value($dbc,'debug-status');

$path=get_path();

$site_title='Easy_Essay';

if(!isset($path['call_parts'][0])||$path['call_parts'][0]=='')
{
 $path['call-parts'][0]='home';
 //header('Location: home');
} 

#page setup
$page= data_page($dbc, $path['call_parts'][0]);



?>
