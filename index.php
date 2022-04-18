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
				function __construct(public $name = "Неопределено", public $age = "Неопределён", public $city = "Не указан")
				{
					$this -> name = $name;
					$this -> age = $age;
					$this -> city = $city;
				}

				function __destruct()
				{
					echo "<i>Вызов экземпляра класса...</i><br>";
				}

				function DisplayInfo()
				{
					echo "Имя пользователя: $this->name<br>";
					echo "Возраст пользователя: $this->age лет<br>";
					echo "Город пользователя: $this->city<br>";
				}
			}

			$obj1 = new Users("Иван Иванов", 45, "Москва");
			$obj1 -> DisplayInfo();

			echo "<br>";

			$obj2 = new Users("Сергей Сергеев", 20, "Казань");
			$obj2 -> DisplayInfo();

			echo "<br>";

			print_r($obj1);

			echo "<br>";

			print_r($obj2);

			echo "<br><br>";
		?>
	</body>
</html>