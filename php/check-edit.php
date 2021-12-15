<?php
    include "database.php";

    $nowlogin = $_COOKIE['user'];
    $firstname = trim($_POST['firstname']);
    $secondname = trim($_POST['secondname']);
    $email = trim($_POST['email']);
    $login = trim($_POST['login']);
    $patronymic = trim($_POST['patronymic']);
    $password = trim($_POST['password']);
    $repeatpassword = trim($_POST['repeat-password']);
    // echo $login;
    // echo $nowlogin;
    // $result = $induction->query("SELECT * FROM `users` WHERE `login` = '$nowlogin'");
    // $result = $result->fetch_assoc();
    // print_r($result);
    // exit();
    if(!empty($_FILES['foto']['name'])){
        if(move_uploaded_file($_FILES['foto']['tmp_name'],
        '../temp/user-temp/'.$_FILES['foto']['name'])){

        }else{
            echo 'Ошибка загрузки файла';
            exit();
        }
        $foto = '../temp/user-temp/'.$_FILES['foto']['name'];
        $induction->query("UPDATE `users` SET `image` = '$foto' WHERE `login` = '$nowlogin'");
        $induction->close();
    }
    if(!empty($firstname)){
        $induction->query("UPDATE `users` SET `firstname` = '$firstname' WHERE `login` = '$nowlogin'");
        $induction->close();
    }
    if(!empty($login)){
        // setcookie('user', $user['login'], time() - 3600, "/");
        $induction->query("UPDATE `users` SET `login` = '$login' WHERE `login` = '$nowlogin'");
        $induction->close();
        // setcookie('user', $login, time() + 3600, "/");
        // $induction->query("UPDATE `app` SET `login` = '$login' WHERE `user_login` = '$nowlogin'");

    }
    if(!empty($email)){
        $induction->query("UPDATE `users` SET `email` = '$email' WHERE `login` = '$nowlogin'");
        $induction->close();
    }
    if(!empty($password)){
        if($password != $repeatpassword){
            echo "Пароли не совпадают";
            exit();
        }else{
            $password = md5($password."lizochek"); 
            $induction->query("UPDATE `users` SET `password` = '$password' WHERE `login` = '$nowlogin'");
            $induction->close();
        }
    }
    if(!empty($secondname)){
        $induction->query("UPDATE `users` SET `secondname` = '$secondname' WHERE `login` = '$nowlogin'");
        $induction->close();
    }
    if(!empty($patronymic)){
        $induction->query("UPDATE `users` SET `patronymic` = '$patronymic' WHERE `login` = '$nowlogin'");
        $induction->close();
    }
    

    

    // $induction->query("UPDATE `users` SET `login` = '$login', `email` = '$email', `password` = '$password', `firstname` = '$firstname', `secondname` = '$secondname', `patronymic` = '$patronymic', `image` = '$foto' WHERE `login` = '$nowlogin'");

    

    header('Location: /pages/account.php');
