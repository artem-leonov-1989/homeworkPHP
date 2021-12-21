<?php
const BR = '</br>';
const DELIMITER = '---------------'.BR;

function TaskLine () {
    echo DELIMITER;
}
$name = "Artem";
echo $name.BR;
TaskLine();
$a = 8;
$b = 1;
echo ('Результат $a + $b = '.($a + $b).BR);
echo ('Результат $a - $b = '.($a - $b).BR);
echo ('Результат $a * $b = '.($a * $b).BR);
echo ('Результат $a / $b = '.($a / $b).BR);
echo ('Остаток от $a / $b = '.($a % $b).BR);
TaskLine();
$number = random_int(1, 15);
echo ($number**3).BR;
TaskLine();
$age = random_int(1, 90);
if ($age < 18) {
    echo "Вам ещё рано работать".BR;
}
elseif ($age >= 18 && $age <= 60) {
    echo "Вам ещё работать и работать".BR;
}
elseif ($age > 60) {
    echo "Пора на отдых".BR;
}
TaskLine();
$dayNumber = random_int(-1, 9);
if ($dayNumber >= 1 && $dayNumber <= 5) {
    echo "Это рабочий день".BR;
}
elseif ($dayNumber === 6 || $dayNumber === 7) {
    echo "Это выходной".BR;
}
elseif ($dayNumber < 1 || $dayNumber > 7 ) {
    echo 'Ошибка!'.BR;
}
TaskLine();
const DAYS_COUNT = 7;
define('MONTH_COUNT' , 12);
echo DAYS_COUNT.BR;
echo MONTH_COUNT.BR;
TaskLine();
$i = random_int(1, 3);
$j = random_int(1, 3);
if ($i === $j) {
    echo "Сумма чисел равна ".($i + $j).BR;
}
else {
    echo "Разница чисел равна ".($i - $j).BR;
}
TaskLine();
$randomValue = random_int(1, 100);
$j = 0;
if ($randomValue === 1) {
    echo "Случайное число = 1 и оно простое";
} else {
    for ($i = 2; $i < $randomValue; $i++) {
        if (($randomValue % $i) === 0) {
            $j++;
            if ($j > 1) {
                $arr[$j] = $i;
            }
        }
    }
    if ($j > 1) {
        echo "Случайное число = ".$randomValue." и оно кратно числам:".BR;
        echo '<pre>';
        print_r ($arr);
        echo '</pre>'.BR;
    }
    else {
        echo "Случайное число = ".$randomValue." и оно простое.".BR;
    }
}
