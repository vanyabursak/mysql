<?php
//update-обновление полей уже в существующих записях

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE users SET name='Dima' WHERE name='roma'";//обновления имя Рома на имя Дима

if ($conn->query($sql)) {
    echo "Record update";
}
$conn->close();