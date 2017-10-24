<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";//test-созданная база данных



////oo способ создания таблиц
//$conn = new mysqli($servername,$username,$password,$dbname);
//if ($conn->connect_error) {
//    die("Connection failed:".$conn->connect_error);
//}
//$sql = "CREATE TABLE users( //создание таблицы users
//      name VARCHAR (30) NOT NULL,
//      surname VARCHAR (30) NOT NULL PRIMARY KEY,
//      password VARCHAR (30) NOT NULL)";
////NOT NULL означает что каждая строка должна содержать значения для етого столбца нульовые значения допускатся небудут
////Primary key используеться для однозначной идентификации строк в таблице,
//// каждая таблица должна иметь первичный ключ столбца его значения должно быть уникальным для каждой записи в столбце тоесть ето первичный ключ
//
//if ($conn->query($sql)) {
//    echo "Table users created successfully";
//} else {
//    echo "Error".$conn->error;
//}
//
//$conn->close();


//процедурный способ
//$conn = mysqli_connect($servername,$username,$password,$dbname);
//if (!$conn) {
//    die("Connection failed:". mysqli_connect_error());
//}
//
//$sql = "CREATE TABLE users2( //создание таблицы users2
//      name VARCHAR (30) NOT NULL,  //наименование полей (name surname password) varchar (тип данных)
//      surname VARCHAR (30) NOT NULL PRIMARY KEY,
//      password VARCHAR (30) NOT NULL)";
////Primary key используеться для однозначной идентификации строк в таблице,
//// каждая таблица должна иметь первичный ключ столбца его значения должно быть уникальным для каждой записи в столбце тоесть ето первичный ключ
//
//if (mysqli_query($conn,$sql)) {
//    echo "Table users 2 created successfully";
//} else {
//    echo "Error". mysqli_error($conn);
//}
//
//$conn->close();

//PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE users3(
      name VARCHAR (30) NOT NULL,
      surname VARCHAR (30) NOT NULL PRIMARY KEY,
      password VARCHAR (30) NOT NULL)";

    $conn->exec($sql);
}
catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;