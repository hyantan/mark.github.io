<?php
	session_start(); 
	if ($_SESSION['auth'] == true) $_SESSION['auth'] == false;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дебильный сайт</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="elem">
            <h1 class="debik">#ПЕРВОМАЙ</h1>
            <!--<form class="imgay">
                <input type="search">
                <input type="submit" value="Найти">
            </form> -->
            <h1 class="iloh">ЗА МИР, ЗА ТРУД, ЗА МАЙ!</h1>
        </div>
        <div class="telko">
            <button id="login" class="button blue">
                <i class="fa fa-unlock"></i>
                <span>Войти</span>
            </button>
            <a id="register" class="button purple" href="register.php">
            <i class="fa fa-user-plus"></i>
            <span>Регистр.</span>
            </a>
        </div>
    </div>
    <div class="myaso">
        <div class="rega">
		<div class="col">
				<h1>Форма регистрации</h1>
				<form action="check.php" method="post">
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
					<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
					<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
					<button class="btn btn-success">Зарегистрироваться</button><br>
				</form> 
			</div>
			
			<div class="col">
				<h1>Форма Авторизации</h1>
				<form action="auth.php" method="post">
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
					<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
					<button class="btn btn-success">Авторизоваться</button><br>
				</form> 
			</div>
        </div>
    </div>
</body>