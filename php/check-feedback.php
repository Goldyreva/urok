<?php
    include "database.php";
    $login = $_COOKIE['user'];
    $text = trim($_POST['text']);
    $date = date("d.m.Y");
    $induction->query("INSERT INTO `feedback` ( `text`, `user_login`, `date`) VALUES ('$text', '$login', '$date' )");
    $induction->close();

    header('Location: /pages/feedback.php');