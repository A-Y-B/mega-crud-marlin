<?php
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
    <title>test/edit.php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="my.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Edit - Изменить</h3>
                <hr>

                <!-- action="create-insert-into.php" -->
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Изменить информацию</label>
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <!-- name="username" -->
                        <input type="text" name="username" class="form-control" id="formGroupExampleInput" value="<?php echo $user['username'] ?>">
                        <button type="submit" class="btn btn-warning">Edit user</button>
                    </div>
                </form>
            </div><!-- /col-md-6-->
    </div>
</div>

</body>
</html>




