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