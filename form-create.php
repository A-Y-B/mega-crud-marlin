<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="my.css">

    <title>test/create.php</title>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Create</h3>
                <hr>
                <!-- action="create-insert-into.php" -->
                <form action="form-create-db.php" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Введите своё имя</label>
                        <!-- name="username" -->
                        <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Имя">
                     </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div><!-- /col-md-6-->
        </div>
    </div>

</body>
</html>

