<?php
//  INSERT INTO users   ---  добавить в таблицу users
//  соединение с базой
$pdo = new PDO('mysql:host=localhost;dbname=sandbox', 'root', '');

//  подготовка запроса, для добавления в бд инфы
$sql = "INSERT INTO users (username) VALUES (:username)";

//  так как в запросе есть переменная, его нужно сперва подготовить, пропустив через метод PDO prepare():
$statement = $pdo->prepare($sql);

//  выполнение запроса
$statement->execute($_POST);
// var_dump($statement);die();

//  переадресация на главную
header('Location: /index.php');
