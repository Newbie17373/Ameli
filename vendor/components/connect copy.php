<?php
$servername = "localhost";
$db_name = "a0830793_diplomaProject";
$db_username = "a0830793_diplomaProject";
$db_password = "AoPh2495!";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    die();
}

$conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
// Проверка соединения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
