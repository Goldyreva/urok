<?php
    include "database.php";

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $categoryes = trim($_POST['categoryes']);
    $login = $_COOKIE['user'];
    $date = date("d.m.Y");
    // echo $_FILES['foto']['tmp_name'];
    // // exit();

    if($_COOKIE['user']==""){
        echo "Войдите или зарегистрируйтесь";
        exit();
    }
    if(!empty($_FILES)){

    if(move_uploaded_file($_FILES['foto']['tmp_name'],
        '../temp/'.$_FILES['foto']['name'])){
            $foto = '../temp/'.$_FILES['foto']['name'];
        }
    }
    $induction->query("INSERT INTO `app` ( `description`, `categoryes`, `title`, `login`, `foto`, `date` ) VALUES ('$description', '$categoryes', '$title', '$login','$foto', '$date' )");
    $induction->close();

    if($_COOKIE['user'] = ""){
        header('Location: /pages/adminpanel.php');
    }else{
        header('Location: /pages/account.php');
    }
    
