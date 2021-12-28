<?php
if (isset($_GET) && !empty($_GET)) {
    if (isset($_POST) && !empty($_POST)) {
        if ($_GET['id_form'] === '1') {
            if (!empty($_POST['name_town'])) {
                echo 'Ваш город ' . $_POST['name_town'];
            } else {
                echo 'Поле пустое!';
            }
        }
        if ($_GET['id_form'] === '2') {
            if ($_POST['age'] === '1') {
                echo 'Ваш возраст менее 20 лет';
            }
            if ($_POST['age'] === '2') {
                echo 'Ваш возраст 20-25 лет';
            }
            if ($_POST['age'] === '3') {
                echo 'Ваш возраст 26-30 лет';
            }
            if ($_POST['age'] === '4') {
                echo 'Ваш возраст более 30 лет';
            }
        }
        if ($_GET['id_form'] === '3') {
            if (!empty($_POST['name_product']) && !empty($_POST['fabricator_product']) && !empty($_POST['description_product']) && is_uploaded_file($_FILES['img_product']['tmp_name'])) {
                $name_img_file = "./img/iss3/".$_FILES['img_product']['name'];
                move_uploaded_file($_FILES['img_product']['tmp_name'],$name_img_file);
                echo "<p>Наименование товара - ".$_POST['name_product'].
                    "<p>Производитель товара - ".$_POST['fabricator_product'].
                    "<p>Описание товара - ".$_POST['description_product'].
                    "<p>Фото - <img src='".$name_img_file."' alt='Тут должно быть фото'>";
            } else {
                echo 'Одно из полей пустое!';
            }
        }
    } else {
        echo 'Ошибка! POST не установлен!';
    }
} else {
    echo 'Сюда можно зайти из одной из форм!!';
}
