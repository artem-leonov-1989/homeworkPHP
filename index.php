<?php
const BR = '</br>';
function line() {
    echo BR.'----------------------'.BR;
}

function printDisplay($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

for ($i = 1; $i <= 10; $i++) {
    echo "You are welcome!".BR;
}
line();
/*-------------------------------------------------------------*/
$sum = 0;
for ($i = 1; $i <= 112; $i = $i+3) {
    $sum = $sum + $i;
}
echo 'Сумма ='.$sum;
line();
/*-------------------------------------------------------------*/
/*for ($i = 0; $i <= 10000; $i++) {
    if (stripos(((string) $i), '3') !== false && $i % 5 !== 0) {
        echo $i.BR;
    }
}
line();*/
/*-------------------------------------------------------------*/
$arr = [];
for ($i = 1; $i <= 3; $i++) {
    $value = -1;
    while (!in_array($value, $arr)) {
        $value = random_int(0, 100);
        $arr[$i] = $value;
    }
}
for ($i = 1; $i <= 3; $i++) {
    echo $arr[$i].BR;
}
line();
/*-------------------------------------------------------------*/
$sum = 0;
for ($i = 1000; $i <= 999999; $i++) {
    $str = (string) $i;
    if (strlen($str) === 4) {
        if ((integer) $str[0] === (integer) $str[1] + (integer) $str[2] + (integer) $str[3]) {
            /*echo '00'.$i.BR;*/
            $sum = $sum + 1;
        }
    }
    if (strlen($str) === 5) {
        if ((integer) $str[0] + (integer) $str[1] === (integer) $str[2] + (integer) $str[3] + (integer) $str[4]) {
           /* echo '0'.$i.BR;*/
            $sum = $sum + 1;
        }
    }
    if (strlen($str) === 6) {
        if ((integer) $str[0] + (integer) $str[1] + (integer) $str[2] === (integer) $str[3] + (integer) $str[4] + (integer) $str[5]) {
           /* echo $i.BR;*/
            $sum = $sum + 1;
        }
    }
}
echo 'Кол-во счастливых билетов = '.$sum.BR;
echo '% счастливых билетов = '.($sum / 999999 *100);
line();
/*-------------------------------------------------------------*/
$arr = [1, 2, 3, 'gfsag', 'dgdsg', 'gfsag'];
$repeat = false;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr); $j++) {
        if ($i !== $j && $arr[$i] === $arr[$j]) {
            echo 'Есть повторение';
            $repeat = true;
            break(2);
        }
    }
}
if (!$repeat) {
    echo 'Нет повторений';
}
line();
/*-------------------------------------------------------------*/
unset($arr);
for ($i = 0; $i < 11; $i++) {
    $arr[$i] = random_int(0, 100);
}
printDisplay($arr);
$min = $arr[0];
$max = $arr[0];
$indexMax = 0;
$indexMin = 0;
for ($i = 0; $i < 11; $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
        $indexMin = $i;
    }
    if ($arr[$i] > $max) {
        $max = $arr[$i];
        $indexMax = $i;
    }
}
$arr[$indexMax] = $min;
$arr[$indexMin] = $max;
printDisplay($arr);
line();
/*-------------------------------------------------------------*/
unset($arr);
$arr = [1, 2, 4, 4, 2, 5];
printDisplay($arr);
for ($i = count($arr) - 1; $i >= 0; $i--) {
    if (array_search($arr[$i], $arr) !== $i) {
        unset($arr[$i]);
    }
}
printDisplay($arr);
line();
/*-------------------------------------------------------------*/
unset($arr);
$arr1 = [2, 6, 9, 10];
$arr2 = [1, 4, 6, 8];
$arr = array_merge($arr1, $arr2);
sort($arr);
printDisplay($arr);
line();
/*-------------------------------------------------------------*/
unset($arr);
$arr = [
    'ru' => [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресенье'],
    'en' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday']
];
echo $arr['ru'][1].BR;
echo $arr['en'][3];
line();
/*-------------------------------------------------------------*/
$lang = 'ru';
$day = 3;
echo $arr[$lang][$day];
line();
/*-------------------------------------------------------------*/
$str = '';
for ($i =1; $i < 10; $i++) {
    if ($i === 3 || $i === 6 || $i === 9) {
        $str = $str.$i.BR;
    } else {
        $str = $str.$i.', ';
    }
}
echo $str;
line();
/*-------------------------------------------------------------*/
unset($arr);
$arr = [4,7,1];
printDisplay($arr);
$index = random_int(-2, count($arr)+2);
echo 'Индекс = '.$index.BR;
if ($index <= count($arr) && $index >= 0) {
    $value = $arr[$index];
    $arr[$index] = $arr[0];
    $arr[0] = $value;
    printDisplay($arr);
} else {
    echo 'Индекс не в диапазоне!';
}
