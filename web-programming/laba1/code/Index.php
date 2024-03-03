<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:

$order = &$very_bad_unclear_name;

$order .= " and  large fries";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/* №2 */
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


