<?php

?>
<div class="pop-up-delete" id="pop-up-delete">
            <header>
                <span></span>
            <p>Вы уверены, что ходите удалить заявку?</p>
            <span id="close" class="close"><i class="fas fa-times-circle"></i></span>
            </header>
            <form action="../php/delete.php" class="send-form" method="get">
            <input type="hidden" value="<?=$app[0];?>" name="id">
                <button type="submit">Отправить</button>
            </form>
        </div>
    <div id="overlay" class="overlay"></div>
