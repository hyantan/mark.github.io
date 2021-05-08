<?php 
require_once('page.php');
header('Content-type: text/html; charset=utf-8');
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', 'pushkok3_1', '834856Vfhr', 'pushkok3_1');


$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc(); // Конвертируем в массив
if(count($user) == 0){
	echo "Такой пользователь не найден.";
	exit();
}
else if(count($user) == 1){
	echo "Логин или праоль введены неверно";
	exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();
session_start();
$_SESSION['auth'] = true; 
$_SESSION['login'] = $login; 
header('Location: page.php');
 ?>