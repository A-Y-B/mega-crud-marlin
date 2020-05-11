<?php
//  'UPDATE users SET username=:username WHERE id=:id';   ---   обновить в таблице users значение username
//  соединение с базой
$pdo = new PDO('mysql:host=localhost; dbname=sandbox;', "root", "");

//  подготовка запроса, для извлечения обновления в таблице users значения username
$sql = 'UPDATE users SET username=:username WHERE id=:id';

//  так как в запросе есть переменная, его нужно сперва подготовить, пропустив через метод PDO prepare():
$statement = $pdo->prepare($sql);

//  выполнение запроса
$statement->execute($_POST);

//  Переадресация пользователя на главную
header('Location: /index.php');
