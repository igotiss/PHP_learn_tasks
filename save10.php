<?php
session_start();

$input_data = $_POST['text'];




$pdo = new PDO("mysql:host=localhost; dbname=php_learn;", "root", "root");

$sql = "SELECT * FROM task9 WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $input_data]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
    $message = "Введенная запись присутствует в таблице";
    $_SESSION['danger'] = $message;

    header("Location: /task_10.php");
    exit;
}


$sql = "INSERT INTO task9 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $input_data]);

$message = "Введенная запись успешно добавлена в таблицу";
$_SESSION['success'] = $message;

header("Location: /task_10.php");