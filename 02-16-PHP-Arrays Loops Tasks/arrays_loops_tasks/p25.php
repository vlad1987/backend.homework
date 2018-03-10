<?php

$arr = [];

	for ($i = 0; $i < 5; $i++){
		$arr[] = rand (1, 256);
	}
	echo'<pre>';
	print_r($arr);
	echo'</pre>';
	
$maxValue = array_search(max($arr), $arr);
$minValue = array_search(min($arr), $arr);
echo "Maximum Value:{$arr[$maxValue]}<br>";
echo "Minimal Value:{$arr[$minValue]}<br>";

list($arr[$minValue], $arr[$maxValue]) = [$arr[$maxValue], $arr[$minValue]];

echo '<p>Changed Values:</p>';
echo '<pre>';
print_r($arr);
echo '</pre>';
	
// <p>25. Ваше задание создать массив, наполнить это случайными значениями(функция rand),
// найти максимальное и минимальное значение и поменять их местами.</p>
?>


