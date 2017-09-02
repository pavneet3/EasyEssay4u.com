
<?php

#Start session:
session_start();

if(!isset($_SESSION['username']))
{
    header('Location: login.php'); 
}
?>

<?php include 'config/setup.php'; ?>

<!DOCTYPE html>

<html>
<head>
    <title><?php echo $page['title'].' | '.$site_title; ?> </title>
            
    <?php include 'config/css.php'; ?>
    
    <?php include 'config/js.php';  ?>

</head>
<body>
  
   <?php include D_TEMPLATE.'/navigation.php'; //main navigation bar ?>
