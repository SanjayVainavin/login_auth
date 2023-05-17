<?php
include 'database.php';

session_start();

if (isset($_REQUEST["Signup"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform_password = $_POST['conform_password'];
    $hashedPassword = md5($password);

    if (empty($name)) {
        die("Name Is required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email Requird");
    }
    if (strlen($password) < 4) {
        die("Password is 4 length");
    }
    if (!preg_match('/[a-z]/i', $password)) {
        die("Password Contains at least one Letter");
    }
    if (!preg_match('/[0-9]/', $password)) {
        die("Password Contains at least one Number");
    }
    if ($password !== $conform_password) {
        die("Please Enter Same Password");
    }

    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO user(name,email,password) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("SQL Error : " . $mysqli->error);
    }

    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if (!$stmt->execute()) {
        die("SQL Error : " . $stmt->error);
    }
    header('Location:index.php');
}

if (isset($_REQUEST["Login"])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "SELECT `id`, `name`, `email` FROM `user` WHERE email='" . $email . "' and password='" . md5($password) . "' ";

    $result = mysqli_query($mysqli, $sql);
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $fetch = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $fetch['name'];
        $_SESSION['email'] = $fetch['email'];
        header("Location: home.php");
    }
}

if (isset($_REQUEST["Logout"])) {
    session_start();
    if (session_destroy()) {
        header("Location: index.php");
    }
}




?>