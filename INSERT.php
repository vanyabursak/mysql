<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users(name, surname,password)
        VALUES ('koka', 'kogut','3425'),
              ('kokaaaaa', 'kogut','3425544')";


if($conn->query($sql)){
    echo "record created";
}

$conn->close();