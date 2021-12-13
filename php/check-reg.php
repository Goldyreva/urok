<?php
    include "database.php";


    $firstname = trim($_POST['firstname']);
    $secondname = trim($_POST['secondname']);
    $email = trim($_POST['email']);
    $login = trim($_POST['login']);
    $patronymic = trim($_POST['patronymic']);
    $password = trim($_POST['password']);
    $repeatpassword = trim($_POST['repeat-password']);

    
    
    $result1 = $induction->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $user1 = $result1->fetch_assoc();
    if(!empty($user1)){
        echo "<h2>Данный e-mail уже используется!</h2>";
        ?>
            <script>
                setTimeout(function(){location.replace("../index.php");}, 3000);
            </script>
        <?php
    exit();
    }

    $password = md5($password."lizochek"); 

    $induction->query("INSERT INTO `users` ( `login`, `email`, `password`, `firstname`, `secondname`, `patronymic`) VALUES ('$login', '$email', '$password', '$firstname','$secondname', '$patronymic')");
    $induction->close();

    header('Location: /');
