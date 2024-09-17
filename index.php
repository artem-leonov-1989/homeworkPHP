<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="app.php?id_form=1">
    <input name="name_town" type="text" placeholder="Введите название вашего города" size="30">
    <input type="submit" value="Отправить"><br>
</form>
<form method="post" action="app.php?id_form=2">
    <p>Сколько Вам лет?</p>
    <input type="radio" name="age" id="form_2_1" value="1">
    <label for="form_2_1">менее 20 лет</label>
    <input type="radio" name="age" id="form_2_2" value="2">
    <label for="form_2_2">20-25</label>
    <input type="radio" name="age" id="form_2_3" value="3">
    <label for="form_2_3">26-30</label>
    <input type="radio" name="age" id="form_2_4" value="4">
    <label for="form_2_4">более 30</label>
    <input type="submit" value="Отправить"><br>
</form>
<form method="post" action="app.php?id_form=3" enctype="multipart/form-data">
    <input name="name_product" type="text" placeholder="Введите название товара"><br>
    <input name="fabricator_product" type="text" placeholder="Введите название производителя товара"><br>
    <input name="description_product" type="text" placeholder="Введите краткое описание товара"><br>
    <span>Выберите файл для загрузки</span><br>
    <input name="img_product" type="file"><br>
    <input type="submit" value="Отправить"><br>
</form>
<p>Тестовое задание</p>
<form method="post" action="app.php?id_form=4">
    <label for="form_4_1">Вопрос с текстовым ответом</label><br>
    <input type="text" id="form_4_1" name="answer1"><br>
    <p>Выбор одного из варианта</p>
    <input type="radio" name="answer2" id="form_4_2" value="Вариант 1">
    <label for="form_4_2">Вариант 1</label><br>
    <input type="radio" name="answer2" id="form_4_3" value="Вариант 2">
    <label for="form_4_3">Вариант 2</label><br>
    <p>Выбор нескольких вариантов</p>
    <input type="checkbox" name="answer3[]" value="Вариант 1">Вариант 1<br>
    <input type="checkbox" name="answer3[]" value="Вариант 2">Вариант 2<br>
    <input type="checkbox" name="answer3[]" value="Вариант 3">Вариант 3<br>
    <p>Вопрос с картинками</p>
    <input type="radio" name="answer4" id="form_4_4" value="Вариант 1">
    <label for="form_4_4"><img src="img/iss4/8cb.jpg" width="20%" height="20%"></label>
    <input type="radio" name="answer4" id="form_4_5" value="Вариант 2">
    <label for="form_4_5"><img src="img/iss4/8cb.jpg" width="20%" height="20%"></label><br>
    <input type="submit" value="Завершить тест">
</form>
</body>
</html>
