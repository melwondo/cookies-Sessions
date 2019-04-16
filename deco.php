<?php
session_start();
setcookie('user', '', time() - 3600, '/');
unset($_SESSION['user']);
unset($_SESSION['cart']);
session_destroy();
header('location: login.php');
exit;
?>
