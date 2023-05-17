<?php
session_start();
if (isset($_SESSION['name'])) {
  echo "sdfffff";
  header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>LOGIN AUTH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <?php
  if (isset($_SESSION['name'])) {
    echo ($_SESSION['name']);
  }

  ?>
  <div class="container">
    <form action="operations.php" method="post">
      <h1>Login</h1>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1" />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
      </div>

      <div class="mb-3">
        <button type="submit" name="Login" value="Login" class="btn btn-primary float-end my-4">
          Login
        </button>
      </div>

      <div class="mb-3 my-5">
        <p>Already have Account? <a href="signup.php"> Sign up</a></p>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>