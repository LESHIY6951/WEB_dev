<?php
$servername = "localhost";
$username = "aaa";
$password = "qwertyasd123";
$database = "web_db";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Ошибка подключения: " . mysqli_connect_error());
} else {
    echo "Подключение успешно";
}
?>