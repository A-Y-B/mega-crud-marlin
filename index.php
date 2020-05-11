<?php
//  SELECT * FROM users   ---   выбрать всё из таблици users
//  соединение с базой
$pdo = new PDO('mysql:host=localhost; dbname=sandbox;', "root", "");

//  подготовка запроса, для извлечения из бд инфы
$sql = "SELECT * FROM users";

//  так как в запросе есть переменная, его нужно сперва подготовить, пропустив через метод PDO prepare():
$statement = $pdo->prepare($sql);

//  выполнение запроса
$statement->execute();

//  fetchAll — Возвращает массив, содержащий все строки результирующего набора
//  FETCH_ASSOC — Извлекает результирующий ряд в виде ассоциативного массива
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($users);die;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="my.css">

    <title>mega-crud-marlin/index.php</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>CRUD</h1>
            <a href="form-create.php" class="btn btn-success">Добавить</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>

                <!-- PHP foreach -->
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td>
                            <a href="show.php?id=<?php echo $user['id']; ?>" class="btn btn-info">Просмотр</a>
                            <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-warning">Редактировать</a>
                            <a href="delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger" onclick="return confirm('Вы уверены в удалении?')">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <!-- /PHP foreach -->

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
