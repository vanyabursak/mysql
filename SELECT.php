<?php

//SELECT - селект применяется для извлечения строк выбраных из одной или несколько таблиц
//выводим имена из таблицы "SELECT name FROM users", если и фамилии "SELECT name, surname FROM users ", если все то SELECT * FROM users
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

//обектно ориентированый
$conn = new mysqli($servername, $username, $password, $dbname );

$sql = "SELECT * FROM users WHERE surname='kono'";
$result = $conn->query($sql);

if ($result->num_rows > 0){  //num_rows проверяет и получает число рядов результирующей выборки, нада больше 0
    while ($row = $result->fetch_assoc()) { //fetch_assoc помещает все результаты в ассоциативный масив который мы
                                            // перебераем через цыкл и цыкл переберает результирующий набор и выводит даные из нашего запроса
        echo "<br/> id:" . $row["user_id"] . "<br/> name:". $row["name"] . "<br/>surname:". $row["surname"];
    }
}
//sql запроси. (для всех записей таблицы) SELECT(выбираю) *(все столбцы) FROM(из таблицы)users
//sql запроси.(для выборки) SELECT(выбираю) *(все столбцы) FROM(из таблицы)users  WHERE(где) user_id >5(выводится идентефикаторы больше 5)
// объеденить 2 условия, используем оператор AND
//Выборка записей з определьонным интервалом оператор BETWEEN 5 AND 30( интервал вид 5 до 30), и NOT BETWEEN(з 5 до 30 не попадьот)
