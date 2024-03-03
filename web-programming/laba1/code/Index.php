<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:

$order = &$very_bad_unclear_name;

$order .= " and  large fries";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/* №2 */
echo "\n";

$integerVar = 21;
echo $integerVar;


echo "\n";


$floatVar = 3.1415926535;
echo $floatVar;


echo "\n";

echo 10 + 2;


$last_month = 1187.23;
$this_month = 1089.98;
$expenses_difference = $last_month - $this_month;
echo  "\nРазницы между расходами в прошлом месяце и в этом месяце составила: $expenses_difference";

/*multiplication and division*/

$num_languages = 4;


$months = 11;

$days = $months * 16;


$days_per_language = $days / $num_languages;

echo "\nКоличество дней которое в среднем у нее ушло на изучение каждого языка: $days_per_language";
/*Power*/

echo "\n";

echo 8 ** 2;

/*Assignment Operators*/
$my_num = 21;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo "\n";

echo $answer;

/*Mathematical functions*/

// Работа с %
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "\nОстаток от деления $a на $b: $remainder";

// Проверка деления нацело
$a = 15;
$b = 5;
if ($a % $b == 0) {
    echo "\nЧисло $a делится нацело на $b, результат: " . ($a / $b);
} else {
    echo "\nЧисло $a делится с остатком на $b, остаток: " . ($a % $b);
}

// Работа со степенью и корнем
$st = pow(2, 10); // 2 в 10 степени
$sqrt_245 = sqrt(245); // Квадратный корень из 245
echo "\n2 в 10 степени: $st";
echo "\nКвадратный корень из 245: $sqrt_245";

// Корень из суммы квадратов элементов массива
$array = [4, 2, 5, 19, 13, 0, 10];
$sum_of_squares = 0;
foreach ($array as $element) {
    $sum_of_squares += $element ** 2;
}
$result = sqrt($sum_of_squares);
echo "\nКорень из суммы квадратов элементов массива: $result";

// Округление
$sqrt_379 = sqrt(379);
$rounded_integer = round($sqrt_379);
$rounded_tenths = round($sqrt_379, 1);
$rounded_hundredths = round($sqrt_379, 2);
echo "\nОкругленное до целого: $rounded_integer";
echo "\nОкругленное до десятых: $rounded_tenths";
echo "\nОкругленное до сотых: $rounded_hundredths";

$sqrt_587 = sqrt(587);
$result_rounded = [
    'floor' => floor($sqrt_587),
    'ceil' => ceil($sqrt_587)
];
echo "\nОкругленное в меньшую сторону: {$result_rounded['floor']}";
echo "\nОкругленное в большую сторону: {$result_rounded['ceil']}";

// min и max
$numbers = [4, -2, 5, 19, -130, 0, 10];
$min_number = min($numbers);
$max_number = max($numbers);
echo "\nМинимальное число: $min_number";
echo "\nМаксимальное число: $max_number";

// Работа с рандомом
$random_number = rand(1, 100);
echo "\nСлучайное число от 1 до 100: $random_number";

// Заполнение массива случайными числами
$random_array = [];
for ($i = 0; $i < 10; $i++) {
    $random_array[] = rand();
}
echo "\nМассив случайных чисел: " . implode(', ', $random_array);

// Работа с модулем
$a = 8;
$b = 15;
$absolute_difference = abs($a - $b);
echo "\nАбсолютная разница между $a и $b: $absolute_difference";

$array_negative_positive = [1, 2, -1, -2, 3, -3];
$new_array_positive = array_map(function($num) {
    return abs($num);
}, $array_negative_positive);
echo "\nМассив с абсолютными значениями: " . implode(', ', $new_array_positive);

// Общее
$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $divisors[] = $i;
    }
}
echo "\nДелители числа $number: " . implode(', ', $divisors);

$array_to_sum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count_elements = 0;
foreach ($array_to_sum as $element) {
    $sum += $element;
    $count_elements++;
    if ($sum > 10) {
        break;
    }
}
echo "\nСумма первых $count_elements элементов массива больше 10.";

/*Functions*/
/*1*/
function printStringReturnNumber($str) {
    echo "\n$str";
    return 21;
}

$my_num = printStringReturnNumber("Printing...");
echo "\n$my_num";

/*2*/

// Функция increaseEnthusiasm()
function increaseEnthusiasm($str) {
    return $str . "!";
}

// Функция repeatThreeTimes()
function repeatThreeTimes($str) {
    return $str . $str . $str;
}

// Функция cut()
function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

// Вывод результатов
echo increaseEnthusiasm("anna") . "\n";
echo repeatThreeTimes("alexenko") . "\n";
echo increaseEnthusiasm(repeatThreeTimes("alex7")) . "\n";
echo cut("Typically we are going to cut it right now ", 5) . "\n";

// Рекурсивная функция для вывода элементов массива
function printArrayRecursively($arr, $index = 0) {
    if ($index < count($arr)) {
        echo $arr[$index] . "\n";
        printArrayRecursively($arr, $index + 1);
    }
}

$array = [1, 2, 3, 4, 5];
printArrayRecursively($array);

// Функция для суммирования цифр числа
function sumDigits($num) {
    $sum = array_sum(str_split($num));
    if ($sum > 9) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}

//суммирования цифр числа
$number = 12345;
echo "\nCуммирования цифр числа:";
echo sumDigits($number). "\n";

/*arrays*/
//Заполнение массива 'x', 'xx', 'xxx' и так далее
$array1 = [];
for ($i = 1; $i <= 5; $i++) {
    $array1[] = str_repeat('x', $i);
}
print_r($array1);

//Функция arrayFill
function arrayFill($value, $length) {
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = $value;
    }
    return $array;
}

print_r(arrayFill('x', 5));

//Cумма элементов двумерного массива
$twoDimensionalArray = [[1, 2, 3], [4, 5], [6]];
$sum = array_sum(array_map('array_sum', $twoDimensionalArray));
echo "Сумма элементов двумерного массива: $sum\n";

//Создание массива [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
$array2 = [];
$num = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $array2[$i][$j] = $num++;
    }
}
print_r($array2);

//Умножение и сложение элементов массива
$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo "Результат: $result\n";

//Вывод фамилии, имени и отчества
$user = ['name' => 'Anna', 'surname' => 'Aleksenko', 'patronymic' => 'Vadimovna'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "\n";

//Вывод текущей даты
$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo "{$date['year']}-{$date['month']}-{$date['day']}\n";

//Вывод количества элементов в массиве
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов в массиве: " . count($arr) . "\n";

//Вывод последнего и предпоследнего элементов массива
echo "Последний элемент: " . end($arr) . "\n";
prev($arr);
echo "Предпоследний элемент: " . current($arr) . "\n";

/*if else construct*/

function checkSum($num1, $num2): bool {
    $sum = $num1 + $num2;
    if ($sum > 10) {
        return true;
    }
    else {
        return false;
    }
}

$result = checkSum(68,39);

// func 2
function checkEqual($num1, $num2): bool {
    if ($num1 == $num2) {
        return true;
    }
    else {
        return false;
    }
}

$result = checkEqual(9,9);

$test = 0;
//Сокращенная форма условия
if ($test == 0) echo 'верно' . "\n";

// Проверка числа и сумма его цифр
$age = 57;
if ($age < 10 || $age > 99) {
    echo "Число не попадает в диапазон от 10 до 99\n";
} else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна\n";
    } else {
        echo "Сумма цифр двузначна\n";
    }
}

// Проверка массива на количество элементов и вывод суммы
$arr = [2, 5, 3];
if (count($arr) == 3) {
    echo "Сумма элементов массива: " . array_sum($arr) . "\n";
}
/*cycles*/

for ($i = 1; $i <= 20; $i++) {
    // Цикл для печати символов "x" в текущем ряду
    for ($j = 1; $j <= $i; $j++) {
        echo "x";
    }
    echo "\n";
}

/*Combination of functions*/
//1
$numbers = [5, 10, 15, 20];
$average = array_sum($numbers) / count($numbers);
echo $average. "\n";
//2
$sum = (1 + 100) * 100 / 2;
echo $sum. "\n";
//3
$numbers = [4, 9, 16, 25];
$squareRoots = array_map('sqrt', $numbers);
print_r($squareRoots);
//4
$alphabet = range('a', 'z');
$numbers = range(1, 26);
$result = array_combine($alphabet, $numbers);
print_r($result);
//5
$str = '1234567890';
$sum = array_sum(str_split($str, 2));
echo $sum. "\n";

