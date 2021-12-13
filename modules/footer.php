    
    <footer>
        <div>
            <a href="/index.html"> <img src="images/logo.png" alt="logo" class="logo"></a>
            <button class="send" id="send">Оставить заявку</button>
            <ul>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#advantage"> Контакты</a></li>
                <li><a href="#services">Отзывы</a></li>
            <?php
            if($_COOKIE['user'] == "" && $_COOKIE['admin'] == "")
                {
        ?>
                
                <li> <a href="" class="reg">Вход&nbsp/&nbspРегистрация</a></li>
        <?php
            }elseif($_COOKIE['admin'] != ""){
        ?>
            <li> <a href="/pages/adminpanel.php">Панель администратора</a></li>
            <li> <a href="/php/exit.php">Выход</a></li>

        <?php
            }else{
        ?>
            <li> <a href="/pages/account.php">Личный кабинет</a></li>
            <li> <a href="/php/exit.php">Выход</a></li>

        <?php
            }
        ?>
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
