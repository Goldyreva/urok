<?php
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <header>
        <a href="../index.php"><img src="../images/logo.png" alt="logo" class="logo"></a>
        <div>
            <a href="../index.php"> Главная</a>
            <a href="../php/exit.php">Выйти</a>
        </div>
    </header>

    <main>
        <section class="main-admin">
            <h2>Заявки</h2>

            <?php 
                include "../php/database.php";
                $result = $induction->query("SELECT * FROM `app`");
                $app = mysqli_fetch_all($result);
                foreach($app as $app){
            ?>
            <div class="personal-application">
                <div class="app">
                    <h3>
                        <?=$app[5];?>
                    </h3>
                    <h4>Статус:
                        <?=$app[6];?>

                        <a href="../php/update.php?id=<?=$app[0];?>"> Изменить статус</a>
                    </h4>
                    <h4>
                    Категория:
                    <?=$app[2];?>
                    </h4>

                    <h4>Пользователь:
                        <?=
                    $app[4];
                    ?>
                    </h4>
                    <p>
                        <?=$app[1];?>
                    </p>
                    <?php
                    if(!(empty($app[3]))){
                    ?>
                    <div class="image-app">
                        <img src="
                        <?=$app[3];?>
                        " alt="image-app">
                    </div>
                    <?php
                    }
                    ?>
                    <a href="../php/delete.php?id=<?=$app[0];?>" class="delete">Удалить заявку</a>
                </div>
            </div>
            <?php
                    }
                    include 'pop-up-delete.php';
                ?>

        </section>
        <div class="footer-hight"></div>
    </main>


    <footer>
        <div>
            <a href="../index.php"> <img src="../images/logo.png" alt="logo" class="logo"></a>
            <button class="send" id="send">Оставить заявку</button>
            <ul>
                <li><a href="../index.php"> Главная</a></li>
                <li><a href="../php/exit.php">Выйти</a></li>
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
    <div class="pop-up-status" id="pop-up-status">
        <header>
            <span></span>
            <span id="close" class="close"><i class="fas fa-times-circle"></i></span>
        </header>
        <form id="status-form" action="../php/update.php" method="get">
        <input type="hidden" name="id" value="<?=$app['id']?>">
            <select name="status" id="">
                <option value="в обработке">в обработке</option>
                <option value="принято">принято</option>
                <option value="отказанно">отказанно</option>
            </select>

            <button type="submit">Изменить</button>
        </form>
    </div>
    <?php
        include 'pop-up-send.php';
        
        ?>
    

    <script src="https://kit.fontawesome.com/56f9d5e909.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="../scripts/popup.js"></script>

</body>

</html>