<?php
session_start();
$input_email = $_POST['email'];
$input_password = ($_POST['password']);

function passwordHash($password) {
    return hash( 'sha256', $password);
}




$pdo = new PDO('mysql:host=localhost; dbname=php_learn', 'root', 'root');
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$input_email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);


if(!empty($task)) {
    $message = "Этот эл адрес уже занят другим пользователем";
    $_SESSION['danger'] = $message;

    header("Location: /task_11.php");
    exit;
}

$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute([
    'email' => $input_email,
    'password' => passwordHash($input_password)
]);
$message = "email успешно зарегистрирован";
$_SESSION['success'] = $message;

header('Location: /task_11.php');