<div class="pop-up-send" id="pop-up-send">
            <header>
                <span></span>
            <h2>Оставить заявку</h2>
            <span id="close" class="close"><i class="fas fa-times-circle"></i></span>
            </header>
            <?php
                if($_COOKIE['user'] == ""):
            ?>
            <p>Чтобы оставить заявку <a href="" class="reg"> зарегистрируйтесь</a></p>
                
            <?php
                endif;
            ?>
            <form action="../php/check-send.php" class="send-form" method="POST" enctype="multipart/form-data">
                <label for="title">Название</label>
                <input type="text" name="title">
                <label for="description">Описание</label>
                <textarea name="description" id="textarea" cols="30" rows="6" ></textarea>
                <label for="categoryes">Категории</label>
                <select name="categoryes" id="categoryes">
                    <option value="Антимонопольное право">Антимонопольное право</option>
                    <option value="Банковское и финансовое право">Банковское и финансовое право</option>
                    <option value="Гражданское право">Гражданское право</option>
                    <option value="Жилищное право">Жилищное право</option>
                    <option value="Корпоративное право">Корпоративное право</option>
                    <option value="Жилищные споры">Жилищные споры</option>
                    <option value="Семейные споры">Семейные споры</option>
                    <option value="Споры по защите прав потребителей">Споры по защите прав потребителей</option>
                    <option value="Международное право и арбитраж">Международное право и арбитраж</option>
                    <option value="Недвижимость и строительство">Недвижимость и строительство</option>
                </select>
                <label for="foto">Фото</label>
                <input multiple type="file" name="foto[]">
                <button type="submit">Отправить</button>
            </form>
        </div>
    <div id="overlay" class="overlay"></div>
