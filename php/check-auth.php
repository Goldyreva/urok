<?php
    include "database.php";
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $password = md5($password."lizochek"); 
    
    $result = $induction->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
    $user =  $result->fetch_assoc();

    if(count($user) == 0){
        echo "Пользователь не найден";
        exit();
    }
    
    if($user['role'] == 'admin'){
        setcookie('admin', $user['login'], time() + 3600, "/");
        // echo "admin";
        // exit();
    }else{
        setcookie('user', $user['login'], time() + 3600, "/");
        // echo "user";
        // exit();
    }
    $induction->close();

    header('Location: /');

  