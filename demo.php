<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php

    $host = "localhost";
    $database = "user_db";
    $username = "root";
    $password = "";

    $mysql = new mysqli(hostname: $host, database: $database, username: $username, password: $password);
    if ($mysql->connect_error) {
        echo $mysql->connect_error;
    }



    if (isset($_REQUEST['GET'])) {
        echo "<h1> GET </h1>";
        print_r($_POST);
    }
    if (isset($_REQUEST['POST'])) {
        echo "<h1> POST </h1>";
        print_r($_POST);

    }




    ?>
    <div class="container mt-5">
        <form action="demo.php" method="post">
            <input type="text" name="name">
            <input type="text" name="name">
            <div class="mb-3">
                <button type="submit" name="GET" class="btn btn-primary">
                    GET
                </button>
            </div>
            <div class="mb-3">
                <button type="submit" name="POST" class="btn btn-primary">
                    POST
                </button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>