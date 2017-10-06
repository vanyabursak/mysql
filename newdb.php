<?php
    //несколько вариантов подключения к базам данним

//mysqli-позволяет работать только з СУБД-mysql
//PDO(обектно ориентированая библиотека)- предоставляет одинаковий интерфейс для баз даных (теоретически при использовании PDO можно поменять сервер баз даных, изменив немного код)


//ето обектно ориентированый способ с помощью росшерения (mysqli)
//$servername = "localhost";
//$username = "root";
//$password = "";
//
//$conn = new mysqli($servername,$username,$password);
//
//if($conn->connect_error) {
//    die("Connection failed:" . $conn->connect_error);
//}
//echo "Connection successfully";



// процедурный подход mysqli
//$servername = "localhost";
//$username = "root";
//$password = "";
//
//$conn = mysqli_connect($servername,$username,$password);
//
//if(!$conn) {
//    die("Connection failed:" . mysqli_connect_error());
//}
//echo "Connection successfully";



//PDO
//$servername = "localhost";
//$username = "root";
//$password = "";
//
//try {
//    $conn = new PDO("mysql:host=$servername; dbname=newDB", $username,$password);//подключаем host, имя базы данных(newDB),user pass
//    echo "Connection successfully";
//}
//catch (PDOException $e){
//    echo "Connection filed:". $e->getMessage();
//}




       //создание базы данных з помощью кода

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);

}


//     //создаем базу данных ОО
$sql = "CREATE DATABASE testDB";

if ($conn->query($sql)){
    echo "Database created successfully";
} else {
    echo "Error" . $conn->error;
}

//процедурный
//$conn = mysqli_connect($servername,$username,$password);
//if ($conn->connect_error) {
//    die("Connection failed:" . mysqli_connect_error());
//}
//$sql = "CREATE DATABASE testDB";
//
//if (mysqli_query($conn,$sql)){
//    echo "Database created successfully";
//} else {
//    echo "Error" . mysqli_error($conn);
//}
//
//mysqli_close($conn);//закрываем соединение, тепер мы неможем создать базу данных


//PDO
//
//try{
//    $conn = new PDO("mysql:host=$servername;dbname=testDB",$username,$password);
//
//    $sql = "CREATE DATABASE testDB2";
//    $conn->exec($sql);
//    echo "Database created successfully";
//}
//catch (PDOException $r) {
//    echo $sql . $r->getMessage();
//}