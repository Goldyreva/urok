
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <a href="index.html"><img src="../images/logo.png" alt="logo" class="logo"></a>
        <div>
            <a href="../index.php"> Главная</a>
            <a href="../php/exit.php">Выйти</a>
            <a href="../pages/account.php">Личный кабинет</a>
        </div>

    </header>

    <main class="edit">
    <div class="tab-content">
                <div class="tabs__content active">
                    <?php
                        include "database.php";
                        $login = $_COOKIE['user'];
                        $result = $induction->query("SELECT * FROM `users` WHERE `login` = '$login'");
                        $user = $result -> fetch_assoc();
                    ?>
                    <form action="check-edit.php" class="form-reg" method="POST" enctype="multipart/form-data">
                        <label for="secondname">Фамилия</label>
                        <input type="text" name="secondname" id="secondname"> 
                        <label for="firstname">Имя</label>
                        <input type="text" name="firstname" id="firstname"> 
                        <label for="patronymic">Отчество</label>
                        <input type="text" name="patronymic" id="patronymic"> 
                        <label for="login">Логин</label>
                        <input type="text" name="login" id="login"> 
                        <label for="email" id="email">E-mail</label>
                        <input type="email" name="email"> 
                        <label for="password">Пароль</label>
                        <input type="password" name="password" id="password"> 
                        <label for="repeat-password">Повторите пароль</label>
                        <input type="password" name="repeat-password" id="repeat-password"> 
                        <label for="foto">Фото</label>
                        <input type="file" name="foto">
                        <div>             
                        </div><span class="error"></span>
                        <button type="submit" id="">Сохранить</button>
                    </form>
                </div>
        <div class="footer-hight"></div>
          
    </main>
  

    <footer>
        <div>
            <a href="../index.html"> <img src="../images/logo.png" alt="logo" class="logo"></a>
            <button class="send" id="send">Оставить заявку</button>
            <ul>
                <li><a href="../index.html"> Главная</a></li>
                <li><a href="">Выйти</a></li>
            </ul>
        </div>
        <div>
            <div>
                <h5>+7&nbsp(499)&nbsp286&nbsp-&nbsp91&nbsp-&nbsp89</h5>
                <p>Контактный телефон</p>
            </div>
            <div>
                <h5>INFO@UROK&nbsp-&nbspCOMPANY.RU</h5>
                <p>Контактный e-mail</p>
            </div>
            <div>
                <h5>МОСКВА, УЛИЦА МАРШАЛА РЫБАЛКО, ДОМ 2, КОРПУС 6</h5>
                <p>Наш адрес</p>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/56f9d5e909.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/popup.js"></script>
</body>
</html>