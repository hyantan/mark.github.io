<?php
    $server = 'localhost'; // Имя или адрес сервера
	$user = 'pushkok3_1'; // Имя пользователя БД
	$password = '834856Vfhr'; // Пароль пользователя
	$db2 = 'pushkok3_1'; // Название БД
	$db = mysqli_connect($server, $user, $password, $db2); // Подключение
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ?>