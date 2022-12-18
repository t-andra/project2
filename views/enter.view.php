<?php require('partials/header.php') ?>
<?php require('views/partials/nav.php') ?>

    <h2>Введите пароль</h2>


    <form action="/login" method="post">
        <p><strong>Пароль:</strong>
            <input type="password" maxlength="25" size="40" name="pass"></p>
        <br>
        <input type="submit" value="Вход">
    </form>




<?php require('partials/footer.php') ?>