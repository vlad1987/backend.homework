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
$weekend = ['Saturday', 'Sunday'];

foreach ($arr as $week) {
	for ($i = 0; $i < count($weekend); $i++){
		if ($week == $weekend[$i]){
			$week = "<b>$week</b>";
		}
	}
	echo $week. '<br>';
}

// <p>18. Составьте массив дней недели. С помощью цикла foreach 
// выведите все дни недели, выходные дни следует вывести жирным.</p>
?>


