<?php 


session_start();
$_SESSION['isLogin'] = false;
$_SESSION['userType'] = '';

header("location: index.php");