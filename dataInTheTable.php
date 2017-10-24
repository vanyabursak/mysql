<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";//test-созданная база данных
// додавание данных в таблицу
//// mysqli обектно ориентированный
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//$sql = "INSERT INTO users (name, surname, password)//INSERT INTO додавание а таблицу
//        VALUES ('Ivan', 'Ivanov', '54321')";
//
//if ($conn->query($sql)){
//    echo "Record created";
//}
//
//$conn->close();


// mysqli процедурный подход
//$conn = mysqli_connect($servername, $username, $password, $dbname);
//
//$sql = "INSERT INTO users (name, surname, password)
//        VALUES('Ivan', 'Ivanov', '54321232141')";
//
//if (mysqli_query($conn,$sql)){
//    echo "Record created";
//}
//
//mysqli_close($conn);


//PDO

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $sql = "INSERT INTO users (name, surname, password)
       VALUES('Ivan', 'Ivanov', '54345621')";
    $conn->exec($sql);
    echo "Record created 1";
}
catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;