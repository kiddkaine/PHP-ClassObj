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
			class Users
			{
				public $name = "Неопределено", $age = "Неопределён", $city = "Не указан";

				function DisplayInfo()
				{
					echo "Имя пользователя: $this->name<br>";
					echo "Возраст пользователя: $this->age лет<br>";
					echo "Город пользователя: $this->city<br>";
				}
			}

			$obj = new Users();

			$obj1 = $obj;
			$obj1 -> name = "Иван Иванов";
			$obj1 -> age = 45;
			$obj1 -> city = "Москва";
			$obj1 -> DisplayInfo();

			echo "<br>";

			$obj2 = $obj;
			$obj2 -> name = "Сергей Сергеев";
			$obj2 -> age = 38;
			$obj2 -> city = "Сургут";
			$obj2 -> DisplayInfo();
		?>
	</body>
</html>