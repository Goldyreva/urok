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
        <a href="/index.php"><img src="../images/logo.png" alt="logo" class="logo"></a>
        <div>
            <a href="../index.php"> Главная</a>
            <a href="../php/exit.php">Выйти</a>
        </div>

    </header>

    <main>
        <section class="main-account">
            <div class="personal">
            <?php 
                include "../php/database.php";
                $login = $_COOKIE['user'];
               
                $result = $induction->query("SELECT * FROM `users` WHERE `login` = '$login'");
                $user = mysqli_fetch_assoc($result);
               
            ?>
                <img src="<?=$user['image']?>" alt="personal" class="personal-img">
                <ul>
                    <li>
                    <?=$user['secondname']?>
                    <?=$user['firstname']?>
                    <?=$user['patronymic']?>
                    </li>
                    <li>Логин:
                    <?=$user['login']?>
                    </li>
                    <li>E-mail:
                    <?=$user['email']?>
                    </li>
                </ul>
                <form action="../php/edit.php">
                    <button>Редактировать</button>
                </form>
            </div>
            
            
            <div class="personal-application">
                <h2>Заявки</h2>
                <?php 
                include "../php/database.php";
               
                $result = $induction->query("SELECT * FROM `app` WHERE `user_login` = '$login'");
                $app = mysqli_fetch_all($result);
               
                foreach($app as $app){
                ?>
                <div class="app">
                    <h3><?=$app[3];?></h3>
                    <h4>Статус:
                    <?=$app[6];?>
                    </h4>
                    <p>
                    <?=$app[1];?>
                    </p>
                    <?php
                    if(!(empty($app[5]))){
                    ?>
                    <div class="image-app">
                        <img src="
                        <?=$app[5];?>
                        " alt="image-app">
                    </div>
                    <?php
                    }
                    ?>
                    <a href="#" class="delete" id="delete">Удалить заявку</a>

                </div>
            
            <?php
                    }
                    include 'pop-up-delete.php';
                ?></div>
        </section>  <div class="footer-hight"></div>
    </main>
  

    <footer>
        <div>
            <a href="../index.php"> <img src="../images/logo.png" alt="logo" class="logo"></a>
            <button class="send" id="send">Оставить заявку</button>
            <ul>
                <li><a href="../index.php"> Главная</a></li>
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
    <?php
        include 'pop-up-send.php';
        include 'pop-up-delete.php';
        ?>
    <div id="overlay" class="overlay"></div>

    <script src="https://kit.fontawesome.com/56f9d5e909.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/popup.js"></script>
</body>
</html>