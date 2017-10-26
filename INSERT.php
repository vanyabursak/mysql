<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

//вставка новых данных
//обектно ориентированный способ
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//$sql = "INSERT INTO users(name, surname,password)
//        VALUES ('koka', 'kogut','3425');";
//$sql.= "INSERT INTO users(name, surname,password)
//        VALUES ('koka1', 'kogut1','3425111');";
//$sql.= "INSERT INTO users(name, surname,password)
//        VALUES ('koka2', 'kogut2','3425222')";
//
//
//if($conn->multi_query($sql)){// чтобы записывать в переменную $sql много раз фун multi_query
//    echo "record created";
//}
//
//$conn->close();



//PDO
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
//    $conn->beginTransaction();
//    $conn->exec("INSERT INTO users(name,surname,password)
//      VALUES ('Koka','Kogut','1234')");
//    $conn->exec("INSERT INTO users(name,surname,password)
//      VALUES ('Koka','Kogut','1234')");
//    $conn->exec("INSERT INTO users(name,surname,password)
//      VALUES ('Koka','Kogut','1234')");
//
//    $conn->commit();
//    echo "record created";
//}
//catch (PDOException $e) {
//    $conn->rollBack();
//}


//Добавление отобранных данных
//$conn = new mysqli($servername, $username, $password, $dbname);
//$sql = "INSERT INTO users(name, surname,password)
//        SELECT name, surname,password FROM users2";//Данная конструкция позволяет одновременно выбирать данные из одной таблицы, и вставить их в другую.
//if($conn->query($sql)){
//    echo "record created";
//}
//Нужно обратить внимание, чтобы значение внутренних ключей не повторялись (поле ID), в противном случае произойдет ошибка.
//Оператор SELECT также может включать предложения WHERE для фильтрации данных.
//Также следует отметить, что СУБД не обращает внимания на названия колонок, которые содержатся в операторе SELECT, для нее важно только порядок их расположения.
// Поэтому данные в первом указанном столбце, что были выбраны из-за SELECT, будут в любом случае заполнены в первый столбец таблицы Sellers, указанной после оператора INSERT INTO, независимо от названия поля.
//$conn->close();




//Копирование данных из одной таблицы в другую
//Часто при работе с базами данных возникает необходимость в создании копий любых таблиц, с целью резервирования или модификации.
// Чтобы сделать полную копию таблицы в SQL предусмотрен отдельный оператор SELECT INTO.
// Например, нам нужно создать копию таблицы users, нужно будет прописать запрос следующим образом:

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * INTO users_new FROM user";
if($conn->query($sql)){
    echo "record created";
}
$conn->close();