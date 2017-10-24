<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname );

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        echo "<br/> id:" . $row["user_id"] . "<br/> name:". $row["name"] . "<br/>surname". $row["surname"];
    }
}