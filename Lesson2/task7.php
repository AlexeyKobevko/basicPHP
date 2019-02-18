<?php

function getRightForm ($n, $firstForm, $secondForm, $thirdForm) {

	if ($n > 4 && $n < 21) {
		return $thirdForm;
	}
	if ($n % 10 === 1) {
		return $firstForm;
	} elseif ($n % 10 > 1 && $n % 10 < 5) {
		return $secondForm;
	} else {
		return $thirdForm;
	}
}

$hours = date('H');
$minutes = date('i');

echo $hours . ' ' . getRightForm($hours, 'час', 'часа', 'часов') . ' ' . $minutes . ' ' .
    getRightForm($minutes, 'минута', 'минуты', 'минут');

echo "<hr/>";

for ($i=0; $i < 24; $i++) { 
	echo $i .' '. getRightForm($i, 'час', 'часа', 'часов') . '<br/>';
}
for ($i=0; $i < 60; $i++) { 
	echo $i .' '. getRightForm($i, 'минута', 'минуты', 'минут') . '<br/>';
}
