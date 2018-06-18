<?php

function greeting($name, $day) {
	switch ($day) {
		case 'Понедельник':
		case 'Вторник':
		case 'Среда':
		case 'Четверг':
		case 'Пятница':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case 'Суббота':
		case 'Воскресенье':
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
	}
	echo "<br>";
}

greeting("Ян", "Среда");
greeting("Ян", "Суббота");

?>