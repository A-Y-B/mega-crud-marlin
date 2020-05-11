<?php
//  DELETE FROM users WHERE id = :id   ---   удалить всё из таблици users где id = :id
//  соединение с базой
$pdo = new PDO('mysql:host=localhost;dbname=sandbox;', "root", "");
//  подготовка запроса, для удаления пользователя из бд из таблици users
$sql = 'DELETE FROM users WHERE id=:id';
//  так как в запросе есть переменная, его нужно сперва подготовить, пропустив через метод PDO prepare():
$statement = $pdo->prepare($sql);
//var_dump($statement);die();
//  выполнение запроса
$statement->execute($_GET);
//var_dump($statement);die();

//  переадресация на главную
header('Location: /index.php');

