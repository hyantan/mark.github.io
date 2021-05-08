<?php
	session_start(); 
	if ($_SESSION['auth'] == false) header('Location: /');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дебильный сайт</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="header">
        <div class="elem">
            <h1 class="debik">#ПЕРВОМАЙ</h1>
            <!--<form class="imgay">
                <input type="search">
                <input type="submit" value="Найти">
            </form> -->
            <h1 class="iloh">Добро пожаловать,  <?php echo $_SESSION['login']; ?></h1>
        </div>
        <div class="telko">
            <a id="register" class="button blue" href="exit.php">
            <i class="fa fa-user-plus"></i>
            <span>Выйти</span>
            </a>
        </div>
    </div>
    <div class="myaso">
        <div class="MIR_TRUD_MAY">
            <img class="onik" src="img/1.jpg"  alt="альтернативный текст">
            <span class="text1maya">Склоняюсь в реверансе, уважаемые посетитители моего сайта. Сегодня отмечается такой великий праздник - ДЕНЬ ВСЕХ ТРУДЯЩИХСЯ. Пусть в этот день вы бросите свой дорогой труд, и займётесь собой.</span>
        </div>
    </div>
</body>
</html>