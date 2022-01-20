<?php
/*$name_file = 'fructs.txt';
$file = fopen($name_file, 'w+');
$arr = ['Яблоко', 'Груша', 'Виноград', 'Вишня', 'Абрикос', 'Слива', 'Персик', 'Черешня'];
foreach ($arr as $value) {
    fwrite($file , $value.PHP_EOL);
}
fclose($file);
$new_arr = file($name_file);
sort($new_arr);
$file = fopen($name_file, 'w+');
foreach ($new_arr as $value) {
    fwrite($file , $value);
}
fclose($file);*/
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="text_file">
    <input type="submit" name="upload" value="Загрузить файл">
</form>
<?php
if (isset($_POST['upload'])) {
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/homeworkPHP/';
    $uploadfile = $uploaddir . basename($_FILES['text_file']['name']);
    if (is_uploaded_file($_FILES['text_file']['tmp_name'])) {
        echo "Файл " . $_FILES['text_file']['name'] . " успешно загружен.<br>";
        echo "Содержание файла:<br>";
        readfile($_FILES['text_file']['tmp_name']);
    }
}
?>
