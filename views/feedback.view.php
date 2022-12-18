<?php require('partials/header.php') ?>
<?php require('views/partials/nav.php') ?>

<h1>
    Форма обратной связи
    </h1>

    <p class="feedback">

        Здесь можно оставить Ваш запрос, комментарий <br>
        Оставьте в тексте координаты для дальнейшей связи <br>

    </p>

    <form action="/feedback.php" method="post">
        <p> Имя: <input type="text" name="name"/></p>
        <p> Сообщение: <textarea name="info" rows="10" cols="45"> </textarea> </p>
        <p> Электронная почта : <input type="email" name="email"/></p>
        <p> Телефон : <input type="tel" name="tel"/></p>
        <p><input type="submit" name="submit" value="Отправить"/></p>
    </form>


<?php require('partials/footer.php') ?>