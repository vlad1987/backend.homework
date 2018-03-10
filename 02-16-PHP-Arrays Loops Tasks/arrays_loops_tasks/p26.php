<?php

$arr = [];

	for ($i = 0; $i < 4; $i++){
		$arr[] = rand (1, 100);
	}
	echo'<pre>';
	print_r($arr);
	echo'</pre>';
	
$pairedIndex = $arr[0];
	for ($i = 2; $i < count($arr); $i += 2) {
		if ($arr[$i] > 0) {
			$pairedIndex *= $arr[$i];
		}
	}	
	echo'<pre>';
	echo "Сумма парных индексов = {$pairedIndex}<br>";
	echo'</pre>';

	echo "Числа в непарных индексах: <br>";
	foreach ($arr as $k => $unPairedIndex) {
		if ($unPairedIndex > 0 && $k % 2) {
	echo "{$unPairedIndex}<br>";
		}
	}

// <p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
// Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
// После вывести на экран элементы, которые больше ноля и у которых не парный индекс.</p>
?>


