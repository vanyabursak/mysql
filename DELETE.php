<?php
//DELETE - он отвечает за удаление всех или часть записей из таблицы
//TRUNCATE TABLE - удаление полностю всех записей из таблицы
//оператор LIMIT - он позволяет задать максимальное количество строк для удал. или виборки и т.д

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "TRUNCATE TABLE users";//аналог DELETE, но удал проходит быстрее
//$sql = "DELETE FROM users LIMIT 2";//удал два самых первых значения
//$sql = "DELETE FROM users WHERE name='Jon'";//если нет WHERE то будут удалены все записи
if ($conn->query($sql)) {
    echo "Record deleted";
}
$conn->close();
