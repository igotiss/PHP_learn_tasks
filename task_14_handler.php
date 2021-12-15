<?php
session_start();

$input_email = $_POST['email'];
$input_password = $_POST['password'];
function passwordHash($password) {
    return hash( 'sha256', $password);
}



$pdo = new PDO('mysql:host=localhost; dbname=php_learn', 'root', 'root');
$sql = 'SELECT * FROM users WHERE email=:email';
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $input_email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);


if(empty($task)) {
    $message = "Такой ел адрес не зарегистрирован";
    $_SESSION['danger'] = $message;

    header("Location: /task_14.php");
    exit;
}

$dbPassword = $task['password'];

function passwordVerify($input_password, $dbPassword) {
    return hash_equals(passwordHash($input_password),  $dbPassword);
}
 if (passwordVerify($input_password, $dbPassword)) {
     $message = "Логин и пароль верные, вы авторизованы";
     $_SESSION['success'] = $message;
     $_SESSION['login'] = $input_email;

     header("Location: /task_15.php");
     exit;
 } else {
     $message = "пароль введен неверно, повторите ввод";
     $_SESSION['danger'] = $message;

     header("Location: /task_14.php");
     exit;
 }

