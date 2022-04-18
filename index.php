<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Обучение PHP</title>
	</head>
	<body>
		<?php
			class Users // Создаём класс
			{
				public $name = "Неопределено", $age = "Неопределён", $city = "Не указан";

				function DisplayInfo()
				{
					echo "Имя пользователя: $this->name<br>";
					echo "Возраст пользователя: $this->age лет<br>";
					echo "Город пользователя: $this->city<br>";
				}
			}

			$obj = new Users(); // Создаём экземпляр класса

			$obj1 = $obj; // Присваиваем экземпляр класса
			$obj1 -> name = "Иван Иванов";
			$obj1 -> age = 45;
			$obj1 -> city = "Москва";
			$obj1 -> DisplayInfo();

			echo "<br>";

			$obj2 = $obj; // Присваиваем экземпляр класса
			$obj2 -> name = "Сергей Сергеев";
			$obj2 -> age = 38;
			$obj2 -> city = "Сургут";
			$obj2 -> DisplayInfo();

			echo "<br>";

			if($obj1 === $obj2) echo "Переменные obj1 и obj2 эквивалентны"; // Проверяем указывают ли переменные на один экземпляр класса
			else echo "Переменные obj1 и obj2 НЕ эквивалентны";
		?>
	</body>
</html>