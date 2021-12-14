<?php


 $input_data = $_POST['text'];
 //var_dump($input_data);

 $pdo = new PDO("mysql:host=localhost; dbname=php_learn;", "root", "root");
 $sql = "INSERT INTO task9 (text) VALUES (:text)";
 $statement = $pdo->prepare($sql);
 $statement->execute(['text' => $input_data]);

 header("Location: /task_9.php");