<?php
    include 'modules/header.php';
?>
    <main>
        <section class="banner">
            <div>
                <h1>Юридическая компания "ЮРОК"</h1>
                <p >Получив опыт работы и необходимые знания в дорогих консалтинговых фирмах, нами была создана данная юридическая компания. Мы оказываем юридические услуги высокого уровня. Отсутствие издержек крупных юридических компаний делает цену наших услуг более привлекательной.
                </br>Оставьте заявку и мы поможем вам решить все юридические вопросы</p>
                <button class="send" id="send">Оставить заявку</button>
            </div>
            <div>
                <img src="images/molot2.jpg" alt="molot">
            </div>
        </section>
        <section class="advantage" id="advantage">
            <h2>Преимущества компании</h2>
            <div class="advantage-cont">
                <div class="wiget">
                    <i class="far fa-comments"></i>
                    <h3>Всегда на связи</h3>
                    <p>Юриспруденция для нас не просто бизнес, а дело жизни, поэтому мы всегда доступны и максимально открыты</p>
                </div>
                <div class="wiget">
                    <i class="fas fa-user-graduate"></i>
                    <h3>Надежне специалисты и обширный опыт</h3>
                    <p>В течение 7 лет специалисты с ответственностью оказывают помощь людям в решении юридических вопросов.
                       </p>
                </div >
                <div class="wiget">
                    <i class="far fa-handshake"></i>
                    <h3>Все заботы
                        берём на себя</h3>
                    <p>Подготовка документов, логистика, и другие обязанности, вы получаете результат с минимальной вовлеченностью в процесс</p>
                </div>
            </div>
        </section>
        <section class="success">
            <div class="div-cont">
                <img src="images/hands.jpg" alt="hands">
            </div>
            <div class="div-cont">
                <h2>Показатели успеха</h2>
                <div>
                    <div class="wiget">
                        <h4>7+</h4>
                        <p>лет успешной работы</p>
                    </div>
                    <div class="wiget">
                        <h4>243+</h4>
                        <p>Завершенных дел</p>
                    </div>
                    <div class="wiget">
                        <h4>580+</h4>
                        <p>консультаций проведено</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="services" id="services">
            <h2>Услуги компании</h2>
            <div class="slider">
                <div class="service-fon wiget">
                    <div >
                        <p>Жилищные споры</p>
                    </div>
                </div>
                <div class="front service-fon wiget">
                    <div>
                        <p>Семейные споры</p>
                    </div>
                </div>
                <div class="service-fon wiget">
                    <div>
                        <p>Споры по защите прав потребителей</p>
                    </div>
                </div>
            </div>
            <button class="service-btn wiget" id="service-btn">Полный список услуг</button>
        </section>
        <div class="footer-hight"></div>
    </main>

    <?php
    include 'modules/footer.php';
        include 'pages/pop-up-send.php';
        include 'pages/pop-up-service.php';
        ?>
        
        
        <div class="pop-up" id="pop-up">
            
            <div class="tab-content">
                <div class="tab-cont">
                    <button class="active">Регистрация</button>
                    <button>Авторизация</button>
                    <span id="close" class="close"><i class="fas fa-times-circle"></i></span>
                </div>
                <div class="tabs__content active">
                    <form action="php/check-reg.php" class="form-reg" id="form-reg" method="POST">
                        <label for="secondname">Фамилия</label>
                        <input type="text" name="secondname" id="secondname"> <span id="secondnamespan"></span>
                        <label for="firstname">Имя </label>
                        <input type="text" name="firstname" id="firstname"> <span id="firstnamespan"></span>
                        <label for="patronymic">Отчество</label>
                        <input type="text" name="patronymic" id="patronymic"> <span id="patronymicspan"></span>
                        <label for="login">Логин</label>
                        <input type="text" name="login" id="login"> <span id="loginspan"></span>
                        <label for="email" id="email">E-mail</label>
                        <input type="email" name="email" id="email"> <span id="emailspan"></span>
                        <label for="password">Пароль</label>
                        <input type="password" name="password" id="password"> <span id="passwordspan"></span>
                        <label for="repeat-password">Повторите пароль</label>
                        <input type="password" name="repeat-password" id="repeat-password"> <span id="repeat-passwordspan"></span>
                        <div>
                        <input type="checkbox" name="check" id="check"><label for="check"> <a href=""> Согласие на обработку персональных данных</a></label>
                        <span id="chekspan"></span></div>
                        <button type="submit" id="reg-btn" >Зарегистрироваться</button>
                    </form>
                </div>
                
                <div class="tabs__content">
                    <form action="php/check-auth.php" class="form-auth" method="POST">
                        <label for="login">Логин</label>
                        <input type="text" name="login"> 
                        <label for="password">Пароль</label>
                        <input type="password" name="password"> 
                        <button type="submit">Войти</button>
                    </form>
                </div>
            </div>
        </div>
    <div id="overlay" class="overlay"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/56f9d5e909.js" crossorigin="anonymous"></script>
    <script src="scripts/popup.js"></script>
    <script src="scripts/tabs.js"></script>
    <script src="scripts/valid.js"></script>
    <script src="scripts/animate.js"></script>
</body>
</html>