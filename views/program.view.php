<?php require "partials/header.php" ?>
<?php require "partials/nav.php" ?>



<div class="box" >


    <div>

        <h1> Расход </h1>

        <form action='/program/create' method="post">
            <p> Дата
                <input type="date" name="date"/>
            </p>
            <p> Код
                <br>
                <input type="radio" name="person" value="1" />1<br>
                <input type="radio" name="person" value="2" />2<br>
                <input type="radio" name="person" value="3" />3<br>

            </p>
            <p> Сумма
                <input type="number" name="summa" /></p>
            <p> Пояснение
                <br>
                <textarea name="comment"> </textarea>
                <br>
                <input type="submit" value="Добавить">
        </form>

    </div>

    <div>

        <h1> Начисление </h1>

        <form action='/program/accrual.php' method="post">
            <p> Дата
                <input type="date" name="date_" /></p>
            <p> Код
                <br>
                <input type="radio" name="person_" value="1" />1<br>
                <input type="radio" name="person_" value="2" />2<br>
                <input type="radio" name="person_" value="3" />3<br>

            </p>
            <p> Сумма
                <input type="number" name="summa_" /></p>
            <p> Пояснение
                <br>
                <textarea name="comment_"> </textarea>
                <br>
                <input type="submit" value="Добавить">
        </form>

    </div>



    <div>
        <h1> Сводка </h1>
        <form action='/program/summ2.php' method="post">
            <p> Код
                <br>
                <input type="radio" name="person1" value="1" />1<br>
                <input type="radio" name="person1" value="2" />2<br>
                <input type="radio" name="person1" value="3" />3<br>

            </p>
            <br>
            <input type="submit" value="Расчет">
        </form>

    </div>
</div>

<div>
    <h1> Таблица </h1>
    <form action='/program/table.php' method="post">
        <p> Код
            <br>
            <input type="radio" name="person2" value="1" />1<br>
            <input type="radio" name="person2" value="2" />2<br>
            <input type="radio" name="person2" value="3" />3<br>

        </p>
        <br>
        <input type="submit" value="Вывод">
    </form>

</div>
</div>







<?php require "partials/footer.php" ?>
