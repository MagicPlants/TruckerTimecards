<?php

// Destroy 
$_SESSION=array();
session_unset();
session_destroy();
header('Location: index.php');
?>