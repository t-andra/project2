<!DOCTYPE HTML>
<html lang="ru">


<head>

<title>Личное</title>

<meta name="description" content="Семейные фото" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="My.css">
<link rel="shortcut icon" href="favicon.svg" type="image/svg">


</head>


<body>

<!-- <p> <img src="Photo.jpg" alt=""/> </p> -->


<?php 

$description="Программа управленческого учета";

require('views/partials/header.php') ?>

<?php require('views/partials/nav.php') ?>



<div class="box" >


          <div>

		  <h1> Расход </h1>

<form action="create.php" method="post">
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

<form action="accrual.php" method="post">
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
<form action="summ2.php" method="post">
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
<form action="table.php" method="post">
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

<?php require('partials/footer.php') ?>

</body>

</html>
