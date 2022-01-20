<?php
$name_file = 'fructs.txt';
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
fclose($file);
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
<form method="post">
    <input type="text" name="name_user" placeholder="Ваше имя">
    <input type="text" name="login_user" placeholder="Придумайте логин">
    <input type="password" name="pass_user" placeholder="Придумайте пароль">
    <input type="password" name="repeat_pass" placeholder="Повторите пароль">
    <input type="submit" name="reg_user" value="Зарегиться">
</form>
<?php
if (isset($_POST['reg_user'])) {
    if (strlen($_POST['pass_user']) != 0 && $_POST['pass_user'] === $_POST['repeat_pass'] && strlen($_POST['name_user']) != 0 && strlen($_POST['login_user']) != 0) {
        $user_file_name = 'user_info.txt';
        $user_file = fopen($user_file_name, 'w+');
        fwrite($user_file, $_POST['name_user'].PHP_EOL);
        fwrite($user_file, $_POST['login_user']);
        fclose($user_file);
    }
}
function del_dir($path) {
    $path = __DIR__.'\\'.$path;
    $del_files = scandir($path);
    var_dump($del_files);
    if ($del_files) {
        foreach ($del_files as $target) {
            if ($target !== '.' && $target !== '..')
            unlink($path.'\\'.$target);
        }
        rmdir($path);
    }
}
/*del_dir('Torrent-file');*/
?>