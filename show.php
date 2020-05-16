<?php
//var_dump($_GET);
//  SELECT * FROM users WHERE id = :id   ---   выбрать всё из таблици users где id = :id
//  соединение с базой
$pdo = new PDO('mysql:host=localhost;dbname=sandbox;', "root", "");
//  подготовка запроса, для извлечения из бд инфы
$sql = 'SELECT * FROM users WHERE id=:id';
//  так как в запросе есть переменная, его нужно сперва подготовить, пропустив через метод PDO prepare():
$statement = $pdo->prepare($sql);
//var_dump($statement);die();
//  выполнение запроса
$statement->execute($_GET);
//var_dump($statement);die();
//  fetchAll — Возвращает массив, содержащий все строки результирующего набора
//  FETCH_ASSOC — Извлекает результирующий ряд в виде ассоциативного массива
$user = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($user);die;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test/show.php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="my.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h1>Show User - <?php echo $user['username']; ?></h1>

        </div>
    </div>
</div>

</body>
</html>

