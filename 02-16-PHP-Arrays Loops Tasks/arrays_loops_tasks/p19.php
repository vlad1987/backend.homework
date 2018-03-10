<?php

$arr = [
	'Monday',
	'Tuesday',
	'Wednesday', 
	'Thursday', 
	'Friday', 
	'Saturday', 
	'Sunday', 
	];
$day = 'Monday';

foreach ($arr as $week) {
	if ($week == $day) {
		echo "<i>$week</i><br>";
	}
	else {
		echo $week. '<br>';
	}
}

// <p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
// а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
?>


