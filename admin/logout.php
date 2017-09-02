<?php

#Start session:
session_start();

unset($_SESSION['username']); //delete the username key
//session_destroy();  This will delete all of session keys

header("Location: login.php");  //redirect to login.php

?>