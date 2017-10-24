<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


//получения последнего ID
//$conn = new mysqli($servername, $username, $password, $dbname);
////обэктно ориентированый
//$sql = "INSERT INTO users(name, surname, password)
//         VALUES ('Jon','Var','12343532')";
//if ($conn->query($sql)) {
//    $last_id = $conn->insert_id;
//    echo "last_id".$last_id;
//}

//PDO
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql =  "INSERT INTO users(name,surname,password) 
              VALUES ('alex','nav','00000')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "last_id" .    $last_id;
}
catch (PDOException $e) {
    echo $sql. $e->getMessage();
}

$conn = null;