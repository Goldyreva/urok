<?php
    include '../modules/header.php'
?>

<main class="feedback-main">


    <form action="../php/check-feedback.php" method="post" class="feedback-form">
        <h3>Поделитесь своим мнением</h3>
        <textarea name="text" id="textarea" cols="30" rows="3"></textarea>
        <button type="submit">Отправить</button>
    </form>
    <h3>Отзывы</h3>
    <div class="feedback-cont">
        <?php
            include '../php/database.php';
            
            $result = $induction->query("SELECT * FROM `feedback`");
            
            $feedback = $result->fetch_all();
            foreach($feedback as $f) {
                $result2 = $induction->query("SELECT * FROM `users` LEFT JOIN feedback ON (users.login = feedback.user_login) WHERE users.login = '$f[1]'");
                $username = $result2->fetch_assoc();
        ?>
        <div class="feedback-item">
            <img src="<?=$username['image']?>" alt="">
            <div>
                <h5><?php
                    echo $username['firstname'];
                    echo " ";
                    echo $username['secondname'];
                ?></h5>
                <i><?= $f[2]?></i>
                <p>
                    <?=$f[3]?>
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="footer-hight"></div>
</main>





<?php
    include '../modules/header.php'
?>
<script src="https://kit.fontawesome.com/56f9d5e909.js" crossorigin="anonymous"></script>
</body>

</html>