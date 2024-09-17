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
        if ($_GET['id_form'] === '4') {
            if (isset($_POST['answer1']) && isset($_POST['answer2']) && isset($_POST['answer3']) && isset($_POST['answer4'])) {
                $true_answer = ['Ответ', 'Вариант 2', ['Вариант 1', 'Вариант 3'], 'Вариант 1'];
                echo 'Ваши ответы<br>';
                echo 'На первый вопрос - ' . $_POST['answer1'] . '(Правильный ответ - ' . $true_answer[0] . ')<br>';
                echo 'На второй вопрос - ' . $_POST['answer2'] . '(Правильный ответ - ' . $true_answer[1] . ')<br>';
                $answer3 = '';
                foreach ($_POST['answer3'] as $answer_value) {
                    $answer3 = $answer3 . $answer_value . ' ';
                }
                unset($answer_value);
                $true_answer3 = '';
                foreach ($true_answer[2] as $answer_value) {
                    $true_answer3 = $true_answer3 . $answer_value . ' ';
                }
                unset($answer_value);
                echo 'На третий вопрос - ' . $answer3 . '(Правильный ответ - ' . $true_answer3 . ')<br>';
                echo 'На четвертый вопрос - ' . $_POST['answer4'] . '(Правильный ответ - ' . $true_answer[3] . ')<br>';
                $final_score = 0;
                if ($true_answer[0] === $_POST['answer1']) {
                    $final_score++;
                }
                if ($true_answer[1] === $_POST['answer2']) {
                    $final_score++;
                }
                if ($true_answer[3] === $_POST['answer4']) {
                    $final_score++;
                }
                if (count($true_answer[2]) === count($_POST['answer3'])) {
                    $j = 0;
                    foreach ($true_answer[2] as $answer_value) {
                        if (in_array($answer_value, $_POST['answer3'])) {
                            $j++;
                        }
                    }
                    if (count($true_answer[2]) === $j) {
                        $final_score++;
                    }
                }
                echo 'Ваши балы ' . $final_score . ' из 4';
            } else {
                echo 'Дайте ответ на все вопросы!!!';
            }
        }
    } else {
        echo 'Ошибка! POST не установлен!';
    }
} else {
    echo 'Сюда можно зайти из одной из форм!!';
}
