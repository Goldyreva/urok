<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЮРОК</title>
    <link rel="stylesheet" href="/style/style.css">
    <script src="https://unpkg.com/scrollreveal@4"></script>
</head>
<body>
    <header>
        <a href="/index.php"><img src="/images/logo.png" alt="logo" class="logo"></a>
        <div>
            <a href="#advantage">Услуги</a>
            <a href="#advantage">Контакты</a>
            <a href="/pages/feedback.php">Отзывы</a>
        </div>
        <div>
        <?php
            if($_COOKIE['user'] == "" && $_COOKIE['admin'] == "")
            {
        ?>
        <a href="" class="reg">Вход/Регистрация</a>
        <?php
            }elseif($_COOKIE['admin'] != ""){
        ?>
            <a href="/pages/adminpanel.php">Панель администратора</a>
            <a href="/php/exit.php">Выход</a>
        <?php
            }else{
        ?>
        <a href="/pages/account.php">Личный кабинет</a>
        <a href="/php/exit.php">Выход</a>

        <?php
            }
        ?>
        </div>
    </header>