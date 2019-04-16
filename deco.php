<?php
session_destroy();
setcookie('user', '', time() - 3600, '/');
unset($_SESSION['user']);
unset($_SESSION['PHPSESSID']);
header('location: login.php');
exit;
?>