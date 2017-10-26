<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


//обектно ориентированный способ
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users(name, surname,password)
        VALUES ('koka', 'kogut','3425');";
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