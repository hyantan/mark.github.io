<?php 
setcookie('user', $user['name'], time() - 3600, "/");
session_start();
$_SESSION['auth'] = false; 
header('Location: /');

 ?>