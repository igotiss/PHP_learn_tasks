<?php
session_start();


if (!$_SESSION['number']){
    $_SESSION['number'] = 1;
} else {
    $_SESSION['number']++;
}


header('Location: /task_13.php');