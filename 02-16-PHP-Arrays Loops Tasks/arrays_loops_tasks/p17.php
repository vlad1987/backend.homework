<?php

$arr = [
	'January',
	'February',
	'March', 
	'April', 
	'May', 
	'June', 
	'July', 
	'August', 
	'September', 
	'October', 
	'November', 
	'December'];
$month = 'March';

foreach ($arr as $months) {
	if ($months == $month) {
		echo "<b>$months</b><br>";
	}
	else {
		echo $months. '<br>';
	}
}

// <p>17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы,
// а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
?>


