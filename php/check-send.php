<?php
    include "database.php";

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $categoryes = trim($_POST['categoryes']);
    $login = $_COOKIE['user'];
    $date = date("d.m.Y");
    $files = $_FILES['foto'];
    // echo $_FILES['foto']['tmp_name'];
    // // exit();
    // print_r($_FILES['foto']);
    // exit();

    if($_COOKIE['user']==""){
        echo "Войдите или зарегистрируйтесь";
        exit();
    }
    

    $nameArr = $files['name'];
    $tmp_nameArr = $files['tmp_name'];


    

        // if(move_uploaded_file($_FILES['foto']['tmp_name'],
        //     '../temp/'.$_FILES['foto']['name'])){
        //         $foto = '../temp/'.$_FILES['foto']['name'];
        //     }
            
        //     $foto = '../temp/user-temp/'.$_FILES['foto']['name'];
        //     $induction->query("UPDATE `users` SET `image` = '$foto' WHERE `login` = '$nowlogin'");
        //     $induction->close();
        // }

    $induction->query("INSERT INTO `app` ( `description`, `categoryes`, `title`, `user_login`, `date` ) VALUES ('$description', '$categoryes', '$title', '$login', '$date' )");
    
    $result = $induction->query("SELECT * FROM `app` ORDER BY `id` DESC LIMIT 1");
    $result = $result->fetch_assoc();
    $id = $result['id'];
    echo $id;

    if(!empty($files)){
        for($i = 0; $i < count($nameArr); $i++){


    // echo $nameArr[$i];

        if(move_uploaded_file($tmp_nameArr[$i],
            '../temp/'.$nameArr[$i])){
                $foto = '../temp/'.$nameArr[$i];

            }

            $induction->query("INSERT INTO `app_images` (`link`, `app_id`) VALUES ('$foto', '$id')");
        }
    }
    if($_COOKIE['user'] = ""){
        header('Location: /pages/adminpanel.php');
    }else{
        header('Location: /pages/account.php');
    }
    
