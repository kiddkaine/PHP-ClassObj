<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Обучение PHP</title>
	</head>
	<body align="center">
		<?php
			class Users // Создаём класс
			{
				function __construct(public $name = "Неопределено", public $age = 0, public $city = "Не указан") // Объявляем конструктор
				{
					$this -> name = $name; // Инициализируем переменные
					$this -> age = $age;
					$this -> city = $city;
				}

				function __destruct() // Объявляем деструктор
				{
					echo "<i>Вызов экземпляра класса...</i><br>";
				}

				function DisplayInfo() // Метод экранизации данных
				{
					echo "Имя пользователя: $this->name<br>";
					echo "Возраст пользователя: $this->age лет<br>";
					echo "Город пользователя: $this->city<br>";
				}
			}

			$obj1 = new Users("Иван Иванов", 45, "Москва"); // Создаём экземпляр класса и добавляем данные к переменным
			$obj1 -> DisplayInfo();

			echo "<br>";

			$obj2 = new Users("Сергей Сергеев", 20, "Казань"); // Создаём экземпляр класса и добавляем данные к переменным
			$obj2 -> DisplayInfo();

			echo "<br>";

			$obj3 = new Users(); // Создаём экземпляр класса и НЕ добавляем данные к переменным
			$obj3 -> DisplayInfo();

			echo "<br>";

			print_r($obj1); // Выводим содержимое объекта obj1

			echo "<br>";

			print_r($obj2); // Выводим содержимое объекта obj2

			echo "<br>";

			print_r($obj3); // Выводим содержимое объекта obj3

			echo "<br><br>";
		?>
	</body>
</html>